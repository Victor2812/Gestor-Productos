@extends('layouts.app')

@section('title', 'Productos')

@section('body')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ $categoria->name }}</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>{{ $categoria->name }}</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($productos as $item)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $item->image_path }}"
                                    class="card-img-top mx-auto"
                                    style="height: 150px; width: 150px;display: block;"
                                    alt="{{ $item->alt }}">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $item->name }}</h6>
                                    <p>${{ $item->precio_base }}</p>
                                    <div class="card-footer" style="background-color: white;">
                                        <div class="row">
                                            <a href="{{ route('cart.store', $item->id) }}" class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
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