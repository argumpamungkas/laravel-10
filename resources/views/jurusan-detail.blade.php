@extends('layouts.main_layout')

@section('title', 'Detail Jurusan')

@section('content')

<h2>{{$jurusan->name}}</h2>

<h3>Lecturer: {{$jurusan->lecturers->name}}</h3>
<table class="table table-bordered mt-3">
    <thead>
        <th>No</th>
        <th>NIM</th>
        <th>Name</th>
    </thead>
    <tbody>
        @foreach ($jurusan->students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->nim}}</td>
            <td>{{$student->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection