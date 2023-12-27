@extends('layouts.app')

@section('title', 'Malzeme Listesi')

@section('content')

    {{-- @if (count($tasks) > 0) --}}

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('task_details', ['id' => $task->id]) }}"
               style="text-decoration: none; color: red" > {{ $task->title }} </a>
        </div>
    @empty
        Hiçbir liste bulunamadı.
    @endforelse

    {{-- @endif --}}

@endsection
