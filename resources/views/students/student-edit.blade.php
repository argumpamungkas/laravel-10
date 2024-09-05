@extends('layouts.main_layout')

@section('title', 'Edit Student')

@section('content')

<h1>Edit Student</h1>
{{-- <p>{{$student}}</p> --}}
{{-- <p>{{$jurusans}}</p> --}}

<div class="mt-5 col-6 m-auto">
    <form action="../student/{{$student->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" value="{{$student->nim}}" required>
        </div>

        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}" required>
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{$student->gender}}">{{$student->gender == 'L' ? 'Laki - Laki' : 'Perempuan'}}</option>
                @if ($student->gender == 'L')
                <option value="P">Perempuan</option>
                @else
                <option value="L">Laki - Laki</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan_id" id="jurusan" class="form-control" required>
                <option value="{{$student->jurusan_id}}">{{$student->jurusan->name}}</option>
                @foreach ($jurusans as $jurusan)
                <option value="{{$jurusan->id}}">{{$jurusan->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

@endsection