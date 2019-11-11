<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .my-custom-scrollbar {
            position: relative;
            height: 367px;
            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 9999;
        }

        #map {
            width: 100%;
            height: 400px;
            background-color: grey;
        }
    </style>
</head>

<body class="bdimg">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a style="color:white" class="nav-link"
                                href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a style="color:white" class="nav-link"
                                href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesion') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {

/*             if(Cookies.get("loadCount") != "1"){
 */                setTimeout(() => {
                    $(".loader").fadeOut("slow");
                }, 1000 );
                Cookies.set("loadCount","1");
/*             }
 */        });
        $(document).ready(function() {
            $(".dropdown-toggle").dropdown();
        });
    </script>
    {{-- <script type="text/javascript">
        var c = document.getElementById("myCanvas");
            //LINEAS AMARILLAS
            var ctx = c.getContext("2d");
            //FONDO
            var ctx2 = c.getContext("2d");
            //RECTANGULO DE OCUPADO
            var ctx3 = c.getContext("2d");
            ctx.beginPath();
            
            //CAJON ARRIBA IZQ
            ctx.rect(100, 100, 60, 100);
            //CAJON ABAJO IZQ
            ctx.rect(100, 200, 60, 100);
            //CAJON ENMEDIO ARRIBA
            ctx.rect(160, 100, 60, 100);
            //CAJON ENMEDIO ABAJO
            ctx.rect(160, 200, 60, 100);
            //CAJON ARRIBA DERECHA
            ctx.rect(220, 100, 60, 100);
            //CAJON ABAJO DERECHA
            ctx.rect(220, 200, 60, 100);
            //CAJON CON LINEA DE NO ESTACIONARSE
            ctx.rect(280, 200, 60, 100);
            //LINEAS DEL CAJON
            ctx.moveTo(280, 200);
            ctx.lineTo(340, 215);
            ctx.moveTo(280, 215);
            ctx.lineTo(340, 230);
            ctx.moveTo(280, 230);
            ctx.lineTo(340, 245);
            ctx.moveTo(280, 245);
            ctx.lineTo(340, 260);
            ctx.moveTo(280, 260);
            ctx.lineTo(340, 275);
            ctx.moveTo(280, 275);
            ctx.lineTo(340, 290);
            
            //COLOR DE LOS CAJONES
            ctx.strokeStyle = '#f2df0c'
            //COLOR DE FONDO
            ctx2.fillStyle = "#2e2d2d";
            ctx2.fillRect(0, 0, 800, 400);
            
            //OCUPADOS
            ctx3.fillStyle = "#e60716";
            //CAJON ARRIBA IZQ
            ctx3.fillRect(110, 110, 40, 80);
            //CAJON ABAJO IZQ
            ctx3.fillRect(110, 210, 40, 80);
            //CAJON ENMEDIO ARRIBA
            ctx3.fillRect(170, 110, 40, 80);
            //CAJON ENMEDIO ABAJO
            ctx3.fillRect(170, 210, 40, 80);
            //CAJON ARRIBA DERECHA
            ctx3.fillRect(230, 110, 40, 80);
            //CAJON ABAJO DERECHA
            ctx3.fillRect(230, 210, 40, 80);
            
            
            //DIBUJAR TODO LO ANTERIOR
            ctx.stroke();
            ctx.stroke();
            ctx.stroke();
    </script> --}}
</body>

</html>