@extends('layouts.app')

@section('title', 'Calendario')

@section('body')
    <h1 class="mt-5">Calendario</h1>
    <form action="{{route('pedido.store')}}" method="POST">
        @csrf
        <input type="date" name="fecha" id="fecha" required/>
        <button type="submit"> Crear pedido </button>
    </form>
@endsection