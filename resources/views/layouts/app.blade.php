<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AppNutri</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ url('/css') }}/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .quick{
            margin-left: 1em;
            font-size: 0.8em;
            text-decoration: none;
        }
    </style>

    <script src="{{ url('/js') }}/jquery.min.js"></script>
    <script src="{{ url('/js') }}/bootstrap.min.js"></script>
    <!--Plugin para hacer filtrables las tablas-->
    <script src="{{ url('/js') }}/tablefilter.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/css') }}/filtergrid.css">

    <!--Plugin para los campos fechas-->
    <script src="{{ url('/js') }}/jquery.datetimepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/css') }}/jquery.datetimepicker.css"> 
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    AppNutri
                </a>
            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/pacientes') }}">Pacientes</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Acceder</a></li>
                        <!--<li><a href="{{ url('/register') }}">Registrarse</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Acá se van a imprimir los mensajes AJAX -->    
    <div id="mensajes_ajax" class="container"></div>
    
    @yield('content')

    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <footer class="row">
        <div class="container text-center">
            <p style="border-top: 1px solid #ddd; padding-top: 5px;">Copyright © 2016/17 - AppNutri | Lic. Silvia Mendoza | Desarrollado por <a href="http://www.logikos.com.ar">Logikos</a></p>
        </div>
    </footer>

</body>
</html>
