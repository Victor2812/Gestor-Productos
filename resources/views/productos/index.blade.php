@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="py-3 py-sm-5 h-100">
                <div class="card">
                    <div class="row card-body p-3 d-flex justify-content-center">
                    @foreach ($categorias as $cat)
                        <div class="col-12 col-sm-2 mb-2 mb-sm-0">
                            <a class="category-link btn-outline-primary" href="{{ route('producto.categoria', $cat->id) }}">
                                {{ $cat->name }}
                            </a> 
                        </div>                       
                    @endforeach
                    </div>
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
                                        <span class="product-price">{{ $pro->precio_base }} €</span>
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