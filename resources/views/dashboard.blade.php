@extends('layouts.app')

@section('title', 'Home')

@section('content')

 <!-- Titulo -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="fw-bold mb-0  text-start">Panel de control</h1>
</div>

<!-- Row -->
<div class="row">

    <!-- Productos -->
    <a href="{{ route('productos.index') }}" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
        <div class="card text-center text-primary shadow h-100 py-2">
            <div class="card-body">
                <h2 class="text-primary">
                    <i class="bi bi-bag"></i>
                </h2>
                <div class="row no-gutters align-items-center">
                    <div class="col auto">
                        <h5>Productos</h5>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Usuarios -->
    <a href="{{ route('personas.index') }}" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
        <div class="card text-center text-primary shadow h-100 py-2">
            <div class="card-body">
                <h2 class="text-primary">
                    <i class="bi bi-person"></i>
                </h2>
                <div class="row no-gutters align-items-center">
                    <div class="col auto">
                        <h5>Usuarios</h5>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Categorias -->
    <a href="{{ route('categorias.index') }}" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
        <div class="card text-center text-primary shadow h-100 py-2">
            <div class="card-body">
                <h2 class="text-primary">
                    <i class="bi bi-tag"></i>
                </h2>
                <div class="row no-gutters align-items-center">
                    <div class="col auto">
                        <h5>Categorias</h5>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Pedidos -->
    <a href="{{ route('pedidos.index') }}" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
        <div class="card text-center text-primary shadow h-100 py-2">
            <div class="card-body">
                <h2 class="text-primary">
                    <i class="bi bi-file-earmark"></i>
                </h2>
                <div class="row no-gutters align-items-center">
                    <div class="col auto">
                        <h5>Pedidos</h5>
                    </div>
                </div>
            </div>
        </div>
    </a>

</div>
<!-- End Row -->

<!-- Row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="app"></div>
            </div>
        </div>

    </div>
</div>
<!-- End Row -->




<!-- End Row -->

    
@endsection
