<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $longDescription,
        public bool $completed,
        public string $createdAt,
        public string $updatedAt
    ) {}
}

$tasks = [
    new Task(
        1,
        'Ev İhtiyaçları - Banyo',
        'Banyo Malzemeleri',
        'Tuz Ruhu, Yumuşatıcı',
        false,
        '21.12.2023 19:07',
        '21.12.2023'

    ),
    new Task(
        2,
        'Ev İhtiyaçları - Mutfak',
        'Mutfak Malzemeleri',
        null,
        false,
        '21.12.2023 19:20',
        '21.12.2023'
    )
    ];

Route::get('/', function () {
    return redirect()->route('task_main');
});

Route::get('/tasks', function () use($tasks) {
    return view('index', [
        'tasks' => $tasks
    ]);
})->name('task_main');

Route::get('/tasks/{id}', function($id) {

    return view('details', [
        'task' => \App\Models\Task::findOrFail($id)
    ]);

})->name('task_details');

// Route::get('/page1', function() {
//     return '1. Sayfa';
// })->name('first_page');

// Route::get('/page2', function () {
//     return '2. Sayfa';
// })->name('second_page');

Route::fallback(function () {
    return redirect()->route('task_main');
});
