@extends('layouts.app')

@section('title', 'Nuevo Usuario')

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
                        <h1 class="fw-bold mb-0 pt-5 text-start">Nuevo Usuario</h1>
                    
                        <form method="POST" action="{{ route('personas.store') }}" class="py-5">
                            @csrf
                            @if(isset($ruta))
                                <input type="hidden" name="ruta" value="{{ $ruta }} " />
                            @endif
                            <div class="row d-flex justify-content-start g-0">

                                <!-- Nombre -->
                                <div class="col-12 col-sm-5 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="name" :value="__('Name')">Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" :value="old('name')" required autofocus autocomplete="name">
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
                                        <input type="text" name="surname" class="form-control" id="surname" placeholder="Apellidos" :value="old('surname')" required autofocus autocomplete="surname" />
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
                                        <input type="text" name="dni" class="form-control" id="dni" placeholder="DNI" :value="old('dni')" required autofocus autocomplete="dni" />
                                        <x-input-error :messages="$errors->get('dni')" class="mt-2" />
                                    </div>
                                </div>
                                
                                <!-- Rol -->
                                <div class="col-12 col-sm-4 mb-2 px-0 px-sm-2">
                                    <label class="visually-hidden" for="rol_id">Escoge la categoria</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-person-workspace"></i>
                                        </div>
                                        <select name="rol_id" id="rol_id" class="form-control form-select">
                                                <option value="1">Administrador</option>
                                                <option value="2">Cliente</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- Telefono -->
                                <div class="col-12 col-sm-4 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="phone" :value="__('phone')">Tel??fono</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Tel??fono" :value="old('phone')" required autofocus autocomplete="phone" />
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- E-mail -->
                                <div class="col-12 mb-2">
                                    <label class="visually-hidden" for="email" :value="__('Email')">E-mail</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" :value="old('email')" required autofocus autocomplete="email" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-12 col-sm-6 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="password" :value="__('Password')">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Contrase??a" required autofocus autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password Confirmar -->
                                <div class="col-12 col-sm-6 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="password_confirmation" :value="__('Confirm Password')">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmar Contrase??a" required autofocus autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Login Button -->
                                <div class="col-12 col-sm-3 d-flex justify-content-center mt-4">
                                    <button class="login-btn btn-primary">
                                        {{ __('Crear') }}
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