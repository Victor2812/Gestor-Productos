@extends('layouts.app')

@section('title', 'Home')

@section('body')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                
                <div class="row my-5 d-flex justify-content-center">
                    @foreach ($categorias as $cat)
                        <div class="col-12 col-sm-2">
                            <a href="{{ route('producto.categoria', $cat->id) }}">
                                <div class="category-btn d-flex justify-content-center align-items-center">
                                    <div class="category-icon d-flex justify-content-center align-items-center">
                                        <h2 class="m-0"><i class="bi bi-fire"></i></h2>
                                    </div>
                                    <h2 class="category-name m-0">{{ $cat->name }}</h2>    
                                </div>
                            </a> 
                        </div>                       
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                
                <div class="row mb-4">
                    @foreach($products as $pro)
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card shadow">
                            <div class="image-container">
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price">{{ $pro->precio_base }} €</span>
                                    </div>
                                </div>
                                <img src="{{ $pro->alt }}" alt="{{ $pro->alt }}" class="img-fluid rounded thumbnail-image">
                            </div>
                            <div class="p-3">
                                <h5 class="product-name">{{ $pro->name }}</h5>
                                <p class="product-desc mb-1">{{ $pro->description }}</p>
                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <span class="category-tag">{{ $pro->categoria->name }}</span>
                                    <a href="{{ route('cart.store', $pro->id) }}" class="product-btn btn-outline-primary">+</a>
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