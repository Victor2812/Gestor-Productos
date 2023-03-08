@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')
    <main>
        <form action="{{ route('pedidos.update', $pedido) }}" method="post">
            @csrf
            @method('put')
            <!-- Estado -->
        <div>
            <label for="estado">Estado Pedido:</label>
            <select name="estado" id="estado">
                @foreach (App\Models\Pedidos::ESTADOS as $key => $estado )
                    <option value="{{ $key }}" @if ($key === $pedido->estado) selected @endif>{{$estado }}</option>
                @endforeach
            </select>
             <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <!-- Fecha Reserva -->
       <div>
           <label for="fecha_reserva">Fecha Reserva:</label>
           <input disabled id="fecha_reserva" class="form-control" type="datetime-local" name="fecha_reserva" value="{{ $pedido->fecha_reserva }}" />
           <x-input-error :messages="$errors->get('fecha_reserva')" class="mt-2" />
       </div>

        <!-- Fecha Recogida -->
        <div>
           <label for="fecha_recogida">Fecha Recogida:</label>
           <input disabled id="fecha_recogida" class="form-control" type="datetime-local" name="fecha_recogida" value="{{ $pedido->fecha_recogida }}" />
           <x-input-error :messages="$errors->get('fecha_recogida')" class="mt-2" />
       </div>

        <!-- Importe Total-->
        <div>
           <label for="importe_total">Importe Total:</label>
           <input disabled id="importe_total" class="form-control" type="text" name="importe_total" value="{{ $pedido->importe_total }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

               <!-- Cliente-->
               <div>
                <label for="cliente">Cliente:</label>
                <input disabled id="cliente" class="form-control" type="text" name="cliente" value="{{ $pedido->cliente->name }}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

        <div class="mt-4">
            <button type="submit" class="ml-4 dropdown-cart-btn btn-outline-primary btn-block">
                Editar Producto
            </button>
        </div>
        </form>
    </main>
@endsection
