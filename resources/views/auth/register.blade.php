<!--Formulario de registro-->
@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="py-5 h-100">
        
        <div class="card">
            <div class="card-body p-0">

                <!-- Formulario -->
                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-4">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-0 pt-5 text-center">Sign Up</h1>
                    
                        <form method="POST" action="{{ route('register') }}" class="py-5">
                            @csrf
                            @if(isset($ruta))
                                <input type="hidden" name="ruta" value="{{ $ruta }} " />
                            @endif
                            <div class="row g-0">

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
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- DNI -->
                                <div class="col-12 col-sm-7 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="dni" :value="__('dni')">DNI</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <input type="text" name="dni" class="form-control" id="dni" placeholder="DNI" :value="old('dni')" required autofocus autocomplete="dni" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Telefono -->
                                <div class="col-12 col-sm-5 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="phone" :value="__('phone')">Teléfono</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Teléfono" :value="old('phone')" required autofocus autocomplete="phone" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required autofocus autocomplete="new-password" />
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
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmar Contraseña" required autofocus autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>



                                <div class="row g-0 ps-5 py-1 mb-4 d-flex justify-content-center">
                                    
                                    <!-- Forgot Pass -->
                                    <div class="col-6">
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('login') }}">
                                                    {{ __('Already registered?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- Login Button -->
                                <div class="col-12 d-flex justify-content-center">
                                    <button class="login-btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>    
                </div>
                <!-- End Formulario -->
            </div>
        </div>    
    </div>
</div>


<!--

    <form method="POST" action="{{ route('register') }}" class="py-5">
        @csrf
        @if(isset($ruta))
        <input type="hidden" name="ruta" value="{{ $ruta }} " />
        @endif
        
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        
        <div>
            <x-input-label for="surname" :value="__('Surname')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         
         <div>
            <x-input-label for="dni" :value="__('dni')" />
            <x-text-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus autocomplete="dni" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         
         <div>
            <x-input-label for="phone" :value="__('phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

-->
@endsection