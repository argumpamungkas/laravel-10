@extends('layouts.main_layout')

@section('title', 'Add Student')

@section('content')

<h1>Add Student</h1>
{{-- <p>{{$jurusans}}</p> --}}

<div class="mt-5 col-6 m-auto">
    <form action="student" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" required>
        </div>

        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="">Select One</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan_id" id="jurusan" class="form-control" required>
                <option value="">Select One</option>
                @foreach ($jurusans as $jurusan)
                <option value="{{$jurusan->id}}">{{$jurusan->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>
</div>

@endsection