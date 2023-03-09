<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>

        
        @if (auth()->guest() || auth()->user()->role_id==2)
            
            <!-- Cliente e invitado -->
            @include('partials.navbar')
            @yield('content')
            @include('partials.footer')

        @else

            <!-- Admin -->
            <div class="wrapper">

                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
                    @include('partials.sidebar')
                </div>

                <div class="content-wrapper d-flex flex-column">
                
                    @include('partials.header')
                    
                    <div class="content p-4">
                        @yield('content')
                    </div>
                   
                    @include('partials.footer')

                </div>
            </div>
        @endif
        
        @stack('scripts')
    </body>
</html>
