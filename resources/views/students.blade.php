@extends('layouts.main_layout')

@section('title', 'Students')

@section('content')

<h1>Ini adalah Student</h1>
<table>
    <thead>
        <tr>
            <td>No.</td>
            <td>NIM</td>
            <td>Name</td>
            <td>Jurusan</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $student )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->nim}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->jurusan_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection