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
                        
                            <form method="POST" action="{{ route('password.confirm') }}" class="py-5">
                                @csrf
                                <div class="row g-0">

                                    <div class="col-12 mb-5 text-center">
                                        {{ __('Esta es un área segura de la aplicación. Por favor, confirme su contraseña antes de continuar.') }}
                                    </div>

                                    <!-- Password -->
                                    <div class="col-12">
                                        <label class="visually-hidden" for="password" :value="__('Password')">password</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required autocomplete="current-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="login-btn btn-primary">
                                            {{ __('Confirmar') }}
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

