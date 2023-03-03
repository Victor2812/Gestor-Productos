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
                <div class="row mb-4">
                    @foreach($productos as $item)
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card shadow">
                            <div class="image-container">
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price">{{ $item->precio_base }} €</span>
                                    </div>
                                </div>
                                <img src="{{ $item->alt }}" alt="{{ $item->alt }}" class="img-fluid rounded thumbnail-image">
                            </div>
                            <div class="p-3">
                                <h5 class="product-name">{{ $item->name }}</h5>
                                <p class="product-desc mb-1">{{ $item->description }}</p>
                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <span class="category-tag">{{ $item->categoria->name }}</span>
                                    <a href="{{ route('cart.store', $item->id) }}" class="product-btn btn-outline-primary">+</a>
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