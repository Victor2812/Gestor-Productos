@extends('layouts.app')

@section('title', 'Ver producto')

@section('content')

<main>
<div class="container">
    <div class="py-3 h-100">
        
        <div class="card">
            <div class="card-body p-0">

                <div class="row g-0 d-flex justify-content-center align items-center">
                    <div class="col-10 col-sm-5 mb-5">
                        <h1 class="fw-bold mb-4 pt-5 text-start">{{$producto->name}}</h1>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Descripción: </span>{{$producto->descripction}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Precio Base: </span>{{$producto->precio_base}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Pedido Mínimo: </span>{{$producto->pedido_minimo}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Categoría: </span>{{$categoria->name}}</h4>
                    </div>
                    <div class="col-10 col-sm-5 mb-5">
                        <img src="{{ $producto['alt'] }}" class="img-fluid rounded-3 pt-sm-5" alt="Imagen del producto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

@endsection