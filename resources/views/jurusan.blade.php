@extends('layouts.main_layout')

@section('title', 'Jurusan')

@section('content')

<h1>Jurusan</h1>

<table class="table">
    <thead>
        <tr>
            <td>No.</td>
            <td>Name</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($jurusanList as $jurusan)
        <tr>
            <td>{{$loop->iteration}}.</td>
            <td>{{$jurusan->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection