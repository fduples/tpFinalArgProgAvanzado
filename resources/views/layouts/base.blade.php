<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'TpFinal FDuples')</title>

    <!-- favicon muni LGSan Martin -->
    <link rel="icon" href="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=48,h=48,fit=crop,f=png/meP0q0yleyu9xLn6/muni-libertador-YKbLW0bJMEuZJO2j.png" type="image/x-icon">
                
    <!-- Bootstrap y CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>
<body class="texto-normal">
    @yield('nav')
    <div class="container">
        @yield('content')
    </div>
    
    
    <!-- scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>