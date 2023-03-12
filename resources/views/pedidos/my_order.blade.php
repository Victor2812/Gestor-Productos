@extends('layouts.app')

@section('title', 'Mis Pedidos')

@section('content')

<main>
    <div class="container">
        <div class="py-5 h-100">
        
            <div class="card">
                <div class="card-body p-0">

                    <div class="row g-0 d-flex justify-content-center">
                        <div class="col-10">
                            <h1 class="fw-bold mb-2 pt-5 text-start">Mis pedidos</h1>
                            
                            <form method="GET" action="{{ route(Route::currentRouteName()) }}" class="py-5">
                                @csrf
                                <div class="row">

                                    <!-- Buscador -->
                                    <div class="col-12 col-sm-9 mb-1 mb-sm-5">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-file-earmark"></i>
                                            </div>
                                            <input type="text" class="form-control" name="search" placeholder="Identificador de tu pedido" value="{{ $old_search }}">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div> 
                                    </div>

                                    <div class="col-12 col-sm-3 mb-5 mb-sm-5">
                                        <input type="submit" class="normal-btn btn-primary" value="Buscar">
                                    </div>

                                    <!-- Pedidos -->
                                    <ul class="row g-0">

                                        <hr class="my-2">

                                        <li class="row mb-2 d-flex justify-content-between align-items-center g-0">
                                            <div class="col-2 col-sm-1 text-center">
                                                <span class="fw-bold">ID</span>
                                            </div>
                                            <div class="col-8 col-sm-3 text-center">
                                                <span class="fw-bold">ESTADO</span>
                                            </div>
                                            <div class="col-sm-2 text-center d-none d-sm-block">
                                                <span class="fw-bold">FECHA RECOGIDA</span>
                                            </div>
                                            <div class="col-sm-2 text-center d-none d-sm-block">
                                                <span class="fw-bold">FECHA RESERVA</span>
                                            </div>
                                            <div class="col-sm-2 text-center d-none d-sm-block">
                                                <span class="fw-bold">IMPORTE</span>
                                            </div>
                                            <div class="col-2 col-sm-1 text-center">
                                                <span class="fw-bold">VER</span>
                                                
                                            </div>
                                        </li>
                                       
                                        <hr class="mb-4">
                                            
                                            @if (!isset($pedido))
                                                @foreach ($pedidos as $p)

                                                    <li class="row mb-2 d-flex justify-content-between align-items-center g-0">
                                                        <div class="col-2 col-sm-1 text-center">
                                                            <span class="fw-bold">{{ $p->id }}</span>
                                                        </div>
                                                        <div class="col-8 col-sm-3 text-center">
                                                            <span class="normal-btn btn-outline-primary text-uppercase">{{ $p->estado }}</span>
                                                        </div>
                                                        <div class="col-sm-2 text-center d-none d-sm-block">
                                                            <span>{{ $p->fecha_recogida }}</span>
                                                        </div>
                                                        <div class="col-sm-2 text-center d-none d-sm-block">
                                                            <span>{{ $p->fecha_reserva }}</span>
                                                        </div>
                                                        <div class="col-sm-2 text-center d-none d-sm-block">
                                                            <span class="fw-bold">{{ $p->importe_total }}</span>
                                                        </div>
                                                        <div class="col-2 col-sm-1 text-center">
                                                            <a href="{{ route('pedido.mi-pedido', $p->id) }}" class="cont-btn btn-primary">
                                                                <i class="bi bi-eye"></i>
                                                            </a>    
                                                        </div>
                                                    </li>
                                    
                                                    <hr class="my-4">
                                                @endforeach 
                                            @else
                                            <li class="row mb-2 d-flex justify-content-between align-items-center g-0">
                                                <div class="col-2 col-sm-1 text-center">
                                                    <span class="fw-bold">{{ $pedido->id }}</span>
                                                </div>
                                                <div class="col-8 col-sm-3 text-center">
                                                    <span class="normal-btn btn-outline-primary text-uppercase">{{ $pedido->estado }}</span>
                                                </div>
                                                <div class="col-sm-2 text-center d-none d-sm-block">
                                                    <span>{{ $pedido->fecha_recogida }}</span>
                                                </div>
                                                <div class="col-sm-2 text-center d-none d-sm-block">
                                                    <span>{{ $pedido->fecha_reserva }}</span>
                                                </div>
                                                <div class="col-sm-2 text-center d-none d-sm-block">
                                                    <span class="fw-bold">{{ $pedido->importe_total }}</span>
                                                </div>
                                                <div class="col-2 col-sm-1 text-center">
                                                    <a href="{{ route('pedido.mi-pedido', $pedido->id) }}" class="cont-btn btn-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </a>    
                                                </div>
                                            </li>

                                                <hr class="my-4">
                                            @endif   
                                    </ul>








                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>                
        </div>                
    </div>
</main>

@endsection