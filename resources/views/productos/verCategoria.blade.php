@extends('layouts.app')

@section('title', 'Productos')

@section('content')

<div class="container">

        
        <div class="row justify-content-center">
            <div class="py-3 py-sm-5 h-100">
                @if($subcategorias)
                
                
                <div class="row">
                <div class="d-inline-flex align-items-center my-3">
                    <h6 class="mb-0 d-none d-sm-block">
                        <a href="{{ route('shop') }}" class="cont-btn btn-primary">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </h6>
                    <h1 class="ms-4 fw-bold mb-0 text-capitalize">{{ $categoria->name }}</h1>   
                </div>

                <div class="card mt-3">
                    <div class="row card-body p-3 d-flex justify-content-center">
                    @foreach($subcategorias as $subcat)
                        <div class="col-12 col-sm-3 mb-2 mb-sm-0">
                            <a class="category-link btn-outline-primary" href="{{ route('producto.categoria', $subcat->id) }}">
                                {{ $subcat->name }}
                            </a> 
                        </div>                       
                    @endforeach
                    </div>
                </div>
                
                @else
                <div class="d-inline-flex align-items-center ">
                    <h6 class="mb-0 d-none d-sm-block">
                        <a href="{{ route('shop') }}" class="cont-btn btn-primary">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </h6>
                    <h1 class="ms-4 fw-bold mb-0 text-capitalize">{{ $categoria->name }}</h1>   
                </div>
                @endif
            </div>
        </div>
        
        <div class="row mb-4">
                    @foreach($productos as $item)
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card shadow">
                            <div class="image-container">
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="product-price">{{ $item->precio_base }} €</span>
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
                    <!-- Productos subcategorias -->
                    @if ($subcategorias)
                    @foreach ($subcategorias as $subcat)
                        @php  
                            $prod = $subcat->productos()->get()->all();
                        @endphp
                            @foreach($prod as $item)
                            <div class="col-sm-6 col-md-4 mb-4">
                                <div class="card shadow">
                                    <div class="image-container">
                                        <div class="first">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="product-price">{{ $item->precio_base }} €</span>
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
                    @endforeach
                    @endif
                </div>

                


</div>



    
@endsection