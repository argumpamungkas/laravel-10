@extends('layouts.main_layout')

@section('title', 'Home')

@section('content')
@if ($role == 'Admin')
<h2>Nama : {{$nama}}</h2>
<h2>Role : {{$role}}</h2>
@else
<h2>Nama : {{$nama}}</h2>
<h2>Role : 'Bukan Admin'</h2>
@endif

<table class="table">
  <tr>
    <td>No</td>
    <td>Anime</td>
  </tr>
  @foreach ($anime as $data)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$data}}</td>
  </tr>
  @endforeach
</table>
@endsection