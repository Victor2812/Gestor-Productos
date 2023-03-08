@extends('layouts.app')

@section('title', 'Ver producto')

@section('content')

    <h1>Producto</h1>
    <p>{{$producto->name}}</p>
    <p>{{$producto->descripction}}</p>
    <p>{{$producto->tipo_vender}}</p>
    <p>{{$producto->precio_base}}</p>
    <p>{{$producto->pedido_minimo}}</p>
    <img src="{{ $producto['alt'] }}" class="img-fluid rounded-3" alt="Imagen del producto">
    <p>{{$producto->categoria_id}}</p>
    <p>{{$categoria->name}}</p>

@endsection