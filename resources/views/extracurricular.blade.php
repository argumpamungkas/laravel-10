@extends('layouts.main_layout')

@section('title', 'Extracurriculars')

@section('content')

<h1>Extracurricular</h1>

<div class="mt-4 mb-4">
    <a href="" class="btn btn-primary">Add Data</a>
</div>

<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            {{-- <td>Member</td> --}}
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($extraList as $extra)
        <tr>
            <td>{{$loop->iteration}}.</td>
            <td>{{$extra->name}}</td>
            {{-- <td>
                <ol>
                    @foreach ($extra->students as $student)
                    <li>
                        {{$student->name}}
                    </li>
                    @endforeach
                </ol>
            </td> --}}
            <td><a href="/extracurricular/{{$extra->id}}"><button type="submit"
                        class="btn btn-outline-info">Detail</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection