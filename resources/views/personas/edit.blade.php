@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')


<main>
<div class="container">
    <div class="py-3 h-100">
        
        <div class="card">
            <div class="card-body p-0">

                <!-- Formulario -->
                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-10">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-0 pt-5 text-start">Editar Usuario</h1>
                    
                        <form method="POST" action="{{ route('personas.update', $persona) }}" class="py-5">
                            @csrf
                            
                            <div class="row d-flex justify-content-start g-0">

                                <!-- Nombre -->
                                <div class="col-12 col-sm-5 mb-2 pe-0 pe-sm-2">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <input type="text" name="name" class="form-control" id="name" value="{{$persona->name}}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div> 
                                </div>

                                <!-- Apellidos -->
                                <div class="col-12 col-sm-7 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="surname" :value="__('Surname')">Apellidos</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <input type="text" name="surname" class="form-control" id="surname" value="{{$persona->surname}}" />
                                        <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- DNI -->
                                <div class="col-12 col-sm-4 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="dni" :value="__('dni')">DNI</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <input type="text" name="dni" class="form-control" id="dni" value="{{$persona->dni}}" />
                                        <x-input-error :messages="$errors->get('dni')" class="mt-2" />
                                    </div>
                                </div>
                                
                                <!-- Rol -->
                                <div class="col-12 col-sm-4 mb-2 px-0 px-sm-2">
                                    <label class="visually-hidden" for="role_id">Escoge la categoria</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-person-workspace"></i>
                                        </div>
                                        <select name="role_id" id="role_id" class="form-control form-select">
                                        @foreach($roles as $rol)
                                            <option value="{{ $rol->id }}" {{ $rol->id == old('role_id', $persona->role_id) ? 'selected' : '' }}>
                                                {{ $rol->name }}
                                            </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- Telefono -->
                                <div class="col-12 col-sm-4 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="phone" :value="__('phone')">Teléfono</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <input type="text" name="phone" class="form-control" id="phone" value="{{$persona->phone}}" />
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- E-mail -->
                                <div class="col-6 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="email" :value="__('Email')">E-mail</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" value="{{$persona->email}}" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-6 col-sm-6 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="password" :value="__('Password')">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Login Button -->
                                <div class="col-12 col-sm-3 d-flex justify-content-center mt-4">
                                    <button class="login-btn btn-primary">
                                        {{ __('Editar') }}
                                    </button>
                                </div>


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