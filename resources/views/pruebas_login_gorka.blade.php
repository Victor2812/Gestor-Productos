@extends('layouts.app')

@section('title', 'Home')

@section('body')
<div>
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <p>Has iniciado sesion</p>
                <!--Logout-->
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button>Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
                <a href="{{route('password.request')}}">Has olvidado la contraseña</a>
            @endauth
        </div>
    @endif

</div>
@endsection