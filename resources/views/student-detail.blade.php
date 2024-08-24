@extends('layouts.main_layout')

@section('title', 'Student Detail')

@section('content')
<h1>Detail Student</h1>
<table class="table table-bordered">
    <tr>
        <td>NIM (Nomor Induk Mahasiswa)</td>
        <td>{{$student->nim}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{$student->name}}</td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>{{$student->gender == 'P' ? 'Perempuan' : 'Laki-Laki'}}</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>{{$student->jurusan->name}}</td>
    </tr>
    <tr>
        <td>Dosen</td>
        <td>{{$student->jurusan->lecturers->name}}</td>
    </tr>
    <tr>
        <td>Extracurricular</td>
        <td>
            @foreach ($student->extras as $extra)
            - {{$extra->name}} <br>
            @endforeach
        </td><br>
    </tr>
</table>
@endsection