@extends('layouts.app')

@section('title', 'Home')

@section('body')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Categorias</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($categorias as $cat)
                        <div class="col-lg-3">
                            <a href="{{ route('producto.categoria', $cat->id) }}" class="custom-card">
                                <div class="card" style="width: 18rem">
                                    <!-- ICON -->
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $cat->name }}</h5>
                                    </div>
                                </div>
                            </a> 
                        </div>                       
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{ $pro->alt }}"
                                    class="card-img-top mx-auto"
                                    style="height: 150px; width: 150px;display: block;"
                                    alt="{{ $pro->alt }}">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $pro->name }}</h6>
                                    <p>${{ $pro->precio_base }}</p>
                                    <div class="card-footer" style="background-color: white;">
                                        <div class="row">
                                            <a href="{{ route('cart.store', $pro->id) }}" class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                <i class="bi bi-cart"></i> Agregar al carrito 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection