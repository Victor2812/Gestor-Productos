@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')
    <main>
        <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
        <div>
            <label for="name">Nombre</label>
             <input type="text" class="form-control" id="name" name="name">
             <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- description -->
       <div>
           <label for="description">Descripción</label>
           <input id="description" class="form-control" type="text" name="description"/>
           <x-input-error :messages="$errors->get('description')" class="mt-2" />
       </div>

        <!-- tipo_vender -->
        <div>
           <label for="tipo_vender">Tipo de venta</label>
           <input id="tipo_vender" class="form-control" type="text" name="tipo_vender"/>
           <x-input-error :messages="$errors->get('tipo_vender')" class="mt-2" />
       </div>

        <!-- precio_base -->
        <div>
           <label for="precio_base">Precio base</label>
           <input id="precio_base" class="form-control" type="text" name="precio_base"/>
           <x-input-error :messages="$errors->get('precio_base')" class="mt-2" />
       </div>

       <!-- pedido_minimo -->
       <div>
           <label for="pedido_minimo">Pedido minimo</label>
           <input id="pedido_minimo" class="form-control" type="text" name="pedido_minimo"/>
           <x-input-error :messages="$errors->get('pedido_minimo')" class="mt-2" />
       </div>

        <!-- img -->
        <div>
           <label for="alt">Imagen</label>
           <input id="alt" class="form-control" type="file" name="alt"/>
           <x-input-error :messages="$errors->get('alt')" class="mt-2" />
       </div>


       <!-- categoria_id -->
       <div>
           <label for="categoria_id">Escoge la categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-control">
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
            </select>
       </div>
       


     
        <div class="mt-4">
            <button type="submit" class="ml-4 dropdown-cart-btn btn-outline-primary btn-block">
                Editar Producto
            </button>
        </div>
        </form>
    </main>
@endsection