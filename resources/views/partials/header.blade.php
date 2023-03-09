<header class="bg-white">
    <nav class="navbar navbar-expand-md shadow ">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('dashboard') }}">
                <img src="../../imgs/logo-escuela.png" alt="Escuela Hosteleria" height="40px">
            </a>
            <!-- Botones Derecha -->
            <div class="d-flex">
                <!-- Login -->
                <div class="d-flex flex-row align-items-center justify-content-center header-guapo">
                    @auth
                        <p class="mb-0" style="color : grey">{{ auth()->user()->fullName()}}</p>
                        <div class="divider d-none d-lg-inline"></div>
                    @endauth
                    <div>
                        @auth
                            <a class="session-link" href="{{ route('logout') }}">Cerrar sesión</a>
                        @else 
                            <a class="session-link" href="{{ route('login') }}">Iniciar sesión</a>
                        @endauth
                    </div>   
                </div>
                <!-- End Login -->
            </div>
            <!-- End Botones Derecha -->
        </div>
    </nav>
</header>