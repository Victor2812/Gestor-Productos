<!--Formulario para cambiar la contraseña-->
@extends('layouts.app')

@section('title', 'Reset Password')

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
                            <h1 class="fw-bold mb-0 pt-5 text-center">Reset Password</h1>

                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <div class="row g-0">
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <!-- Email Address -->
                                    <div class="col-12 mb-2">
                                        <label class="visually-hidden" for="email" :value="__('Email')">e-mail</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                            <input id="email" class="form-control" type="email" name="email"  :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-12 mb-2">
                                        <label class="visually-hidden" for="password" :value="__('Password')">password</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-12 mb-2">
                                        <label class="visually-hidden" for="password_confirmation" :value="__('Confirm Password')">confirm password</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                            <input type="password" id="password_confirmation" class="form-control"
                                                                name="password_confirmation" required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-12 mb-2 d-flex justify-content-center">
                                        <button class="login-btn btn-primary">
                                            {{ __('Reset Password') }}
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