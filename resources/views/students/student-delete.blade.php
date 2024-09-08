@extends('layouts.main_layout')

@section('title', 'Delete')

@section('content')

<div class="container mt-5">
    <h1>Delete</h1>
    <p>Apakah anda yakin akan menghapus <b>{{$student->name}}</b> ?</p>

    <a href="/students" class="btn btn-outline-info">Cancel</a>
    <form method="post" style="display: inline-block" action="/student-destroy/{{$student->id}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection