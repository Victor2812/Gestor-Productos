@extends('layouts.app')

@section('title', 'Home')




<div class="wrapper">

    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">


        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">

            <!-- Lista Nav -->
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start my-5" id="menu">

                <!-- Productos -->
                <li class="nav-item">
                    <a href="" class="nav-link align-middle px-0 text-white">
                        <i class="fs-4 bi-bag"></i> <span class="ms-1 d-none d-sm-inline">Productos</span>
                    </a>
                </li>

                <!-- Usuarios -->
                <li class="nav-item">
                    <a href="{{ route('personas.index') }}" class="nav-link align-middle px-0 text-white">
                        <i class="fs-4 bi-person"></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span>
                    </a>
                </li>

                <!-- Categorias -->
                <li class="nav-item">
                    <a href="" class="nav-link align-middle px-0 text-white">
                        <i class="fs-4 bi-tag"></i> <span class="ms-1 d-none d-sm-inline">Categorias</span>
                    </a>
                </li>

                <!-- Pedidos -->
                <li class="nav-item">
                    <a href="" class="nav-link align-middle px-0 text-white">
                        <i class="fs-4 bi-file-earmark"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span>
                    </a>
                </li>

                <!-- Estadisticas -->
                <li class="nav-item">
                    <a href="" class="nav-link align-middle px-0 text-white">
                        <i class="fs-4 bi-bar-chart"></i> <span class="ms-1 d-none d-sm-inline">Estadísticas</span>
                    </a>
                </li>

            </ul>
            <!-- End Lista Nav -->
        </div>
    </div>

    <div class="content-wrapper d-flex flex-column">
        <!-- Header -->
        <header class="bg-white">
            <nav class="navbar navbar-expand-md shadow ">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="../imgs/logo-escuela.png" alt="Escuela Hosteleria" height="40px">
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

        <!-- Content -->
        <div class="content p-4">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Panel de control</h1>
            </div>

            <!-- Row -->
            <div class="row">

                <!-- Productos -->
                <a href="" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
                    <div class="card text-center text-primary shadow h-100 py-2">
                        <div class="card-body">
                            <h2>
                                <i class="bi bi-bag"></i>
                            </h2>
                            <div class="row no-gutters align-items-center">
                                <div class="col auto">
                                    <h5>Productos</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Usuarios -->
                <a href="{{ route('personas.index') }}" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
                    <div class="card text-center text-primary shadow h-100 py-2">
                        <div class="card-body">
                            <h2>
                                <i class="bi bi-person"></i>
                            </h2>
                            <div class="row no-gutters align-items-center">
                                <div class="col auto">
                                    <h5>Usuarios</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Categorias -->
                <a href="" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
                    <div class="card text-center text-primary shadow h-100 py-2">
                        <div class="card-body">
                            <h2>
                                <i class="bi bi-tag"></i>
                            </h2>
                            <div class="row no-gutters align-items-center">
                                <div class="col auto">
                                    <h5>Categorias</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Pedidos -->
                <a href="" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
                    <div class="card text-center text-primary shadow h-100 py-2">
                        <div class="card-body">
                            <h2>
                                <i class="bi bi-file-earmark"></i>
                            </h2>
                            <div class="row no-gutters align-items-center">
                                <div class="col auto">
                                    <h5>Pedidos</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <!-- End Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="app"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Row -->

            

        </div>
        <!-- End Row -->

        <hr>

        <footer class="container">
            <div class="text-center px-3 mb-3">
                © 2023 Copyright
                <a href="https://www.egibide.org/escuela-de-hosteleria/">egibide.org</a>
            </div>
        </footer>


    </div>
    <!-- End Content -->

</div>
