@extends('layouts.main_layout')

@section('title', 'Jurusans')

@section('content')

<h1>Jurusan</h1>

<div class="mt-4 mb-4">
    <a href="" class="btn btn-primary">Add Data</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            {{-- <th>Lecturer</th> --}}
            <th>Name</th>
            {{-- <th>Student</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jurusanList as $jurusan)
        <tr>
            <td>{{$loop->iteration}}.</td>
            {{-- <td>{{$jurusan->lecturers->name}}</td> --}}
            <td>{{$jurusan->name}}</td>
            {{-- <td>
                <ol>
                    @foreach ($jurusan->students as $dataStudent)
                    <li>
                        {{$dataStudent->name}}
                    </li>
                    @endforeach
                </ol>
            </td> --}}
            <td>
                <a href="/jurusan/{{$jurusan->id}}"><button type="submit"
                        class="btn btn-outline-info">Detail</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection