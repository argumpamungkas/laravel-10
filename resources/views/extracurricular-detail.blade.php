@extends('layouts.main_layout')

@section('title', 'Extracurricular Detail')

@section('content')

<h2>Ini adalah detail Extracurricular {{$extra->name}}</h2>

<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Gender</th>
    </thead>
    <tbody>
        @foreach ($extra->students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->gender == 'L' ? 'Laki - Laki' : 'Perempuan'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection