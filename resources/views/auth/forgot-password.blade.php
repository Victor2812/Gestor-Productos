<!--Formulario con email para el has olvidado la contraseña-->
@extends('layouts.app')

@section('title', 'Recuperar contraseña')

@section('content')

<main>

    <div class="container">
        <div class="py-5 h-100">
           
            <div class="card">
                <div class="card-body p-0">

                    <!-- Formulario -->
                    <div class="row g-0 d-flex justify-content-center">
                        <div class="col-10 col-sm-4">

                            <!-- Titulo -->
                            <h1 class="fw-bold mb-0 pt-5 text-center">Recuperar Contraseña</h1>
                        
                            <form method="POST" action="{{ route('password.email') }}" class="py-5">
                                @csrf
                                <div class="row g-0">

                                    <div class="col-12 mb-5 text-center">
                                        {{ __('¿Has olvidado tu contraseña? No te preocupes. Haznos saber tu dirección de email y te enviaremos un link para que la resetees y elijas una nueva.') }}
                                    </div>

                                    <!-- E-mail -->
                                    <div class="col-12 mb-2">
                                        <label class="visually-hidden" for="email" :value="__('Email')">e-mail</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" :value="old('email')" required autofocus>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div> 
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="login-btn btn-primary">
                                            {{ __('Recuperar') }}
                                        </button>
                                    </div>

                                    <!-- Session Status -->
                                    <div class="col-12 mt-5 text-primary">    
                                        <x-auth-session-status class="mb-4" :status="session('status')" />
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