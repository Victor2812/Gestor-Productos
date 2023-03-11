@extends('layouts.app')

@section('title', 'Productos')

@section('content')

<main>
<div class="container">
    <div class="py-3 h-100">
        
        <div class="card">
            <div class="card-body p-0">

                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-10 mb-5">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-4 pt-5 text-start">{{$pedido->id}}</h1>
                        <h4 class="mb-3 text-uppercase"><span class="fw-bold text-primary text-capitalize">Estado: </span>{{$pedido->estado}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Fecha reserva: </span>{{$pedido->fecha_reserva}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Fecha recogida: </span>{{$pedido->fecha_recogida}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Importe total: </span>{{$pedido->importe_total}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Cliente: </span>{{$pedido->cliente->fullName()}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
