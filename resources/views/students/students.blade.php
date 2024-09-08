@extends('layouts.main_layout')

@section('title', 'Students')

@section('content')

<h1>Student</h1>

<div class="container">

    <div class="mt-4 mb-4">
        <a href="/student-add" class="btn btn-primary">Add Data</a>
    </div>

    @if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Name</th>
                {{-- <th>Gender</th> --}}
                {{-- <th>Jurusan</th> --}}
                {{-- <th>Lecture</th> --}}
                {{-- <th>Jurusan_id</th> --}}
                {{-- <th>Extracurricular</th> --}}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $student )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->nim}}</td>
                <td>{{$student->name}}</td>
                {{-- <td>{{$student->gender == 'L' ? 'Laki-Laki' : 'Perempuan'}}</td> --}}
                {{-- <td>{{$student->jurusan_id}}</td> --}}
                {{-- <td>{{$student->jurusan['name']}}</td> CARA PERTAMA RELATIONSHIP--}}
                {{-- CARA KEDUA DIBAWAH --}}
                {{-- <td>{{$student->jurusan['name']}}</td> --}}
                {{-- <td>{{$student->jurusan->lecturers->name}}</td> --}}
                {{-- <td>
                    @foreach ($student->extras as $extra)
                    - {{$extra->name}} <br>
                    @endforeach
                </td> --}}
                <td>
                    <a href="/student/{{$student->id}}" class="btn btn-outline-info">
                        Detail
                    </a>
                    <a href="student-edit/{{$student->id}}" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection