@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
<form method="POST" action="{{ route('task_store') }}">
    @csrf
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="description"> Description </label>
        <textarea name="description" id="description" rows="6"></textarea>
    </div>

    <div>
        <label for="long_description"> Description </label>
        <textarea name="long_description" id="long_description" rows="10"></textarea>
    </div>

    <div>
        <button type="submit"> Add Task </button>
    </div>

</form>
@endsection
