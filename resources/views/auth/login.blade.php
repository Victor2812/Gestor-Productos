<!--Formulario de login-->
@extends('layouts.app')

@section('title', 'Log In')

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
                            <h1 class="fw-bold mb-0 pt-5 text-center">Login</h1>
                        
                            <form method="POST" action="{{ route('login') }}" class="py-5">
                                @csrf
                                <div class="row g-0">

                                    <!-- E-mail -->
                                    <div class="col-12 mb-2">
                                        <label class="visually-hidden" for="email" :value="__('Email')">e-mail</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" :value="old('email')" required autofocus autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div> 
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

                                    <div class="row g-0 px-3 py-1 mb-4 d-flex justify-content-between">
                                       
                                        <!-- Forgot Pass -->
                                        <div class="col-8">
                                            <div>
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ __('¿Has olvidado tu contraseña?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="col-4 text-end">
                                            <div class="form-check">
                                                <label for="remember_me" class="form-check-label">
                                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                                    <span>{{ __('Recordar') }}</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Login Button -->
                                    <div class="col-12 mb-2 d-flex justify-content-center">
                                        <button class="login-btn btn-primary">
                                            {{ __('Log in') }}
                                        </button>
                                    </div>

                                    <!-- No registrado -->
                                    <div class="col-12 d-flex justify-content-center">
                                        <div>
                                            <a href="{{ route('register') }}">
                                                {{ __('¿No estas registrado?') }}
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Session Status -->
                                    <div class="col-12 mt-5 text-primary">    
                                        <x-auth-session-status class="mb-4" :status="session('status')" />
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
</main>
    

@endsection