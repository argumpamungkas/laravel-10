@extends('layouts.main_layout')

@section('title', 'Students')

@section('content')

<h1>Ini adalah Student</h1>
<ol>
    @foreach ($studentList as $student)
    @if ($student->jurusan_id == 1)
    <li>
        {{$student->nim}} | {{$student->name}} | Sistem Informasi
    </li>
    @elseif ($student->jurusan_id == 2)
    <li>
        {{$student->nim}} | {{$student->name}} | Teknik Informatika
    </li>
    @else
    <li>
        {{$student->nim}} | {{$student->name}} | Manajemen Informatika
    </li>

    @endif
    @endforeach
</ol>

@endsection