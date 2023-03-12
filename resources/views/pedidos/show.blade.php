@extends('layouts.app')

@section('title', 'Productos')

@section('content')

<main>
<div class="container">
    <div class="py-3 h-100">
        <div class="card">
            <div class="card-body p-0">
                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-10 mb-3">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-4 pt-5 text-start">{{$pedido->id}}</h1>
                        <h4 class="mb-3 text-uppercase"><span class="fw-bold text-primary text-capitalize">Estado: </span>{{$pedido->estado}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Fecha reserva: </span>{{$pedido->fecha_reserva}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Fecha recogida: </span>{{$pedido->fecha_recogida}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Importe total: </span>{{$pedido->importe_total}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Cliente: </span>{{$pedido->cliente->fullName()}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Productos: </span></h4>

                    </div>
                </div>

                <div class="row g-0 d-flex justify-content-center">
                    <ul class="col-10">
                    <div class="p-0">
                        <hr class="my-4">
                        @foreach ($pedprod as $pd => $p)
                            <li class="row mb-4 d-flex justify-content-between align-items-center">
                                <div class="col-sm-3 text-center d-none d-sm-block">
                                    <img
                                    src="{{ $productos[$pd]->alt }}"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-6 col-sm-3 text-center">
                                    <h6 class="dropdown-cart-name">{{ $productos[$pd]->name }}</h6>
                                    <h6 class="mb-0"></h6>
                                </div>
                                <div class="col-6 col-sm-3 text-center">
                                    <h6>{{ $p->cantidad }}</h6>
                                </div>
                                <div class="col-sm-3 text-center d-none d-sm-block">
                                    <h6>{{ $p->precio }}€</h6>
                                </div>
                            </li>

                            <hr class="my-4">
                        @endforeach 
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
