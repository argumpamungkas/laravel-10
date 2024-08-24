@extends('layouts.main_layout')

@section('title', 'Lecture Detail')

@section('content')

<h2>Ini adalah detail Lecture {{$lecture->name}}</h2>

<p>{{$lecturer}}</p>

@endsection