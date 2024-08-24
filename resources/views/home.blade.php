@extends('layouts.main_layout')

@section('title', 'Home')

@section('content')

<h1>Selamat Datang</h1>
@if ($role == 'Admin')
<h2>Nama : {{$nama}}</h2>
<h2>Role : {{$role}}</h2>
@else
<h2>Nama : {{$nama}}</h2>
<h2>Role : 'Bukan Admin y'</h2>
@endif
@endsection