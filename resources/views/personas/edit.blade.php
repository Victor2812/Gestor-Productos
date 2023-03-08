@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <main>
        <form action="{{ route('personas.update', [$persona]) }}" method="post">
            @csrf
            <!-- Name -->
        <div>
            <label for="name">Nombre</label>
             <input type="text" class="form-control" id="name" name="name" value="{{$persona->name}}">
             <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- surName -->
       <div>
           <label for="surname">Surname</label>
           <input id="surname" class="form-control" type="text" name="surname" value="{{ $persona->surname }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

        <!-- dni -->
        <div>
           <label for="dni">DNI</label>
           <input id="dni" class="form-control" type="text" name="dni" value="{{ $persona->dni }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

        <!-- phone -->
        <div>
           <label for="phone">Telefono</label>
           <input id="phone" class="form-control" type="text" name="phone" value="{{ $persona->phone }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

       <!-- email address -->
       <div>
           <label for="email">Email</label>
           <input id="email" class="form-control" type="text" name="email" value="{{ $persona->email }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

       <!-- password -->
       <div>
           <label for="password">Contraseña</label>
           <input id="password" class="form-control" type="text" name="password" value="{{ $persona->password }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

       <div>
           <label for="role_id">Escoge el rol</label>
            <select name="role_id" id="role_id" class="form-control">
                @foreach($roles as $rol)
                    <option value="{{$rol->id}}">{{$rol->name}}</option>
                @endforeach
            </select>
       </div>
     
        <div class="mt-4">
            <button type="submit" class="ml-4 dropdown-cart-btn btn-outline-primary btn-block">
                Editar Usuario
            </button>
        </div>
        </form>
    </main>
@endsection