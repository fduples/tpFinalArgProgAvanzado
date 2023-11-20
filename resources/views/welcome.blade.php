<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TPFinal Federico Duples</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
        <!-- favicon muni LGSan Martin -->
        <link rel="icon" href="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=48,h=48,fit=crop,f=png/meP0q0yleyu9xLn6/muni-libertador-YKbLW0bJMEuZJO2j.png" type="image/x-icon">
                
        <!-- Bootstrap y CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    </head>
    <body class="texto-normal">
        <div class="text-end my-2">
            @if (Route::has('login'))
                <div>
                    @auth
                    
                        <a href="{{ url('/dashboard') }}" class="btn btn-trans" style="color: rgb(109, 0, 27)">Bienvenida/o {{ Auth::user()->name }} - ingresar al sitio</a>
                   
                    @else
                        <a href="{{ route('login') }}" class="btn btn-violeta">Log in</a>
                        @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-violeta">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
        </div>
        <div class="container bg-dark bg-gradient bg-opacity-25">
            <div class="libertador text-center" style="font-size: 6rem">
                <p>
                    Libertador General San Martín
                </p>
            </div>  
            <div class="text-center">
                <p class="texto-oscuro-bold">
                    Libertador General San Martín, usualmente referida como Libertador, es la ciudad cabecera del departamento de Ledesma, en la provincia argentina de Jujuy.<br><br>Es la quinta ciudad más poblada de la provincia. Se encuentra situada a 106 km de San Salvador de Jujuy, es la puerta de entrada al parque nacional Calilegua, y es centro logístico de abastecimiento para la Ruta Nacional 34. Está dentro del perímetro de la reserva de biosfera de las Yungas.
                </p>
            </div>  
            <div class="text-center bg-dark bg-gradient bg-opacity-25">
                <p class="texto-negro-bold fs-5">
                    Esta es la página de acceso al Sistema de Gestión de Automotores del Municipio de Libertador General San Martín.
                </p>
            </div>  
            
        </div>  
    </body>
</html>
