@extends('layouts.app')

@section('title', $task->title) {{-- Başlık --}}

@section('content')

<p> {{ $task ->description }} </p> {{-- Açıklama --}}
<p> {{ $task ->longDescription }} </p> {{-- Uzun Açıklama --}}

@if ($task ->completed == true) {{-- Durum --}}
    <p>Tamamlandı</p>
@else
    <p>Tamamlanmadı</p>
@endif

<p> {{ $task ->createdAt }} </p> {{-- Oluşturma Tarihi --}}
<p> {{ $task ->updatedAt }} </p> {{-- Güncelleme Tarihi --}}

@endsection
