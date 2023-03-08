@extends('layouts.app')

@section('title', 'Ver categoria')

@section('content')

    <h1>Categoria</h1>
    <p>{{$categoria->name}}</p>
    @if(!is_null($categoria_padre))
        <h4>Categoria padre</h4>
        <p>{{$categoria_padre->name}}</p>
    @endif

@endsection