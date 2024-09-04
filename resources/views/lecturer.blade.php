@extends('layouts.main_layout')

@section('title', 'Lecturers')

@section('content')

<h1>Lecture</h1>

<div class="mt-4 mb-4">
    <a href="" class="btn btn-primary">Add Data</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lecturerList as $lecturer)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$lecturer->name}}</td>
            <td>
                <a href="/lecturer/{{$lecturer->id}}"><button type="submit"
                        class="btn btn-outline-info">Detail</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection