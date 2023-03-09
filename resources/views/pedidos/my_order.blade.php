@extends('layouts.app')

@section('title', 'Mis Pedidos')

@section('content')
    <h1>Mis Pedidos</h1>
    <hr>
    <div>
        <div class="row px-4 gx-sm-3" id="filtros">
            <form action="{{ route(Route::currentRouteName()) }}" method="GET">
            
                <!-- Row -->
                <div class="row mb-0 mb-sm-3 gx-0">

                    <!-- Buscador -->
                    <div class="col-12 mb-3 col-sm-4 mb-sm-0 px-sm-1">
                        <div class="form-outline">
                            <input type="text" class="form-control" name="search" placeholder="ID PEDIDO" value="{{ $old_search }}"/>
                        </div>
                    </div>
                    <!-- value="$old_search }}" -->
                    <div class="col-12 mb-3 col-sm mb-sm-0 px-sm-1">
                        <input type="submit" class="dropdown-cart-btn btn-outline-primary btn-block" value="Buscar">
                    </div>
                </div>
            </form>
        </div>
        <div>
            <span>ID</span>
            <span>ESTADO</span>
            <span>FECHA RECOGIDA</span>
            <span>FECHA RESERVA</span>
            <span>IMPORTE TOTAL</span>
            <span>VER</span>
        </div>
        @if (!isset($pedido))
            @foreach ($pedidos as $p)
                <div>
                    <span>{{ $p->id }}</span>
                    <span class="text-uppercase">{{ $p->estado }}</span>
                    <span>{{ $p->fecha_recogida }}</span>
                    <span>{{ $p->fecha_reserva }}</span>
                    <span>{{ $p->importe_total }}</span>
                    <span><a href=""><i class="bi bi-eye"></i></a></span>
                </div>
            @endforeach 
        @else 
        <div>
            <span>{{ $pedido->id }}</span>
            <span class="text-uppercase">{{ $pedido->estado }}</span>
            <span>{{ $pedido->fecha_recogida }}</span>
            <span>{{ $pedido->fecha_reserva }}</span>
            <span>{{ $pedido->importe_total }}</span>
            <span><a href=""><i class="bi bi-eye"></i></a></span>
        </div>
        @endif                    
    </div>
@endsection