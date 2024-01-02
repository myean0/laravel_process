<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return redirect()->route('task_main');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => \App\Models\Task::all()->where('completed', false)
    ]);
})->name('task_main');

/*

* all() : Tüm Kayıtları Çeker.
* latest() : Son Güncellenen Kayıtları Çeker.
! where() : Spesifik Kayıtları Çeker (completed, false).

*/

Route::view('tasks/create', 'create')
->name('task_create');

Route::get('/tasks/{id}', function($id) {
    return view('details', [
        'task' => \App\Models\Task::findOrFail($id)
    ]);

})->name('task_details');

Route::post('/tasks', function(Request $request) {
    dd($request->all());
})->name('task_store');

// Route::get('/page1', function() {
//     return '1. Sayfa';
// })->name('first_page');

// Route::get('/page2', function () {
//     return '2. Sayfa';
// })->name('second_page');

Route::fallback(function () {
    return redirect()->route('task_main');
});
