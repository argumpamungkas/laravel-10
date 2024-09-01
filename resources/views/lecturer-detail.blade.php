@extends('layouts.main_layout')

@section('title', 'Lecture Detail')

@section('content')

<h2>Ini adalah detail Lecture {{$lecturer->name}}</h2>

<table class="table">
    <thead>
        {{-- <th>No</th> --}}
        <th>Jurusan</th>
        <th>Mahasiswa</th>
    </thead>
    <tbody>
        <tr>
            {{-- <td>{{$loop->iteration}}</td> --}}
            <td>{{$lecturer->jurusans->name}}</td>
            <td>
                @foreach ( $lecturer->jurusans->students as $lecture)
                {{$loop->iteration}}. {{$lecture->name}}<br>
                @endforeach
            </td>
        </tr>
    </tbody>
</table>

@endsection