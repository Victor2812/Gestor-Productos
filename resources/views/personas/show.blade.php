@extends('layouts.app')

@section('title', 'Ver Usuario')

@section('content')

    <h1>Usuario</h1>
    <p>{{$persona->name}}</p>
    <p>{{$persona->surname}}</p>
    <p>{{$persona->dni}}</p>
    <p>{{$persona->phone}}</p>
    <p>{{$persona->email}}</p>
    <p>{{$persona->password}}</p>
    <p>{{$rol->name}}</p>

@endsection