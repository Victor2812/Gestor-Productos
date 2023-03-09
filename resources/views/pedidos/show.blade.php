@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Estado Pedido:</label>
                    </div>
                    <div class="col-sm-9">
                        {{ $pedido->estado }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Fecha Reserva:</label>
                    </div>
                    <div class="col-sm-9">
                        {{ $pedido->fecha_reserva }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Fecha Recogida:</label>
                    </div>
                    <div class="col-sm-9">
                        {{ $pedido->fecha_recogida }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Importe Total:</label>
                    </div>
                    <div class="col-sm-9">
                        {{ $pedido->importe_total }} €
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Cliente</label>
                    </div>
                    <div class="col-sm-9">
                        {{ $pedido->cliente->name }}
                    </div>
                </div>
    </div>
@endsection
