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

<p> {{ $task ->created_at }} </p> {{-- Oluşturma Tarihi --}}
<p> {{ $task ->updated_at }} </p> {{-- Güncelleme Tarihi --}}

@endsection
