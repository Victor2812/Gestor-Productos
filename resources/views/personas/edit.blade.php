@extends('layouts.app')

@section('title', 'Ver Usuario')

@section('content')
    <main>
        <h1>Editar: {{ $persona->fullName }}</h1>

        <form action="{{ route('personas.store') }}" method="post">
            @csrf
            <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="{{ $persona->name }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- surName -->
        <div>
            <x-input-label for="surname" :value="__('Surname')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="{{ $persona->surname }}" required autofocus autocomplete="surname" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         <!-- dni -->
         <div>
            <x-input-label for="dni" :value="__('dni')" />
            <x-text-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="{{ $persona->dni }}" required autofocus autocomplete="dni" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         <!-- phone -->
         <div>
            <x-input-label for="phone" :value="__('phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="{{ $persona->phone }}" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="{{ $persona->email }}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>  
        <div class="mt-4">
            <button type="submit" class="ml-4 dropdown-cart-btn btn-outline-primary btn-block">
                Editar Usuario
            </button>
        </div>
        </form>
    </main>
@endsection