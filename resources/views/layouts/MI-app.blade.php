<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Registro Automotor')</title>
    
    <!-- favicon muni LGSan Martin -->
    <link rel="icon" href="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=48,h=48,fit=crop,f=png/meP0q0yleyu9xLn6/muni-libertador-YKbLW0bJMEuZJO2j.png">

    <!-- Bootstrap y CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="fondoGeneral">
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg sticky-top bg-transparent">
            <div class="container-fluid">
                <div class="">
                    <a class="navbar-brand" href="#">
                        <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=48,h=48,fit=crop,f=png/meP0q0yleyu9xLn6/muni-libertador-YKbLW0bJMEuZJO2j.png" alt="logo">
                    </a>
                </div>
                <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/titulares') }}">Listar Titulares</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/titulares') }}">Listar Titulares</a>
                  </li>
                  
                </ul>
                <div class="">
                    @include('layouts.navigation')
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/') }}" class="">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>
            
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
              </div>
            </div>
        </nav>
    <!--
        <div class="" style="" >
            <img alt="ciudad de Libertador" src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/meP0q0yleyu9xLn6/libertadorgralsanmartin-m2Wbn16NpNToBVg5.jpeg"class="">
            <div class=""></div>
        </div>
    -->
        <div>
            @yield('content')
        </div>
    </div>

    <!-- scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
