<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('materialize/css/materialize.min.css') }}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        header, main, footer {
            padding-left: 300px;
        }
        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }
        main {
            margin: 20px;
        }
    </style>
</head>
<body>

    <div id="app">

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Editar Perfil</a></li>
            <li><a href="#!">Configurações</a></li>

        </ul>
        <header>
            {{--<div class="navbar-fixed">--}}
                <nav class="teal darken-4">

                            <div class="nav-wrapper">
                                <div class="navbar-header">
                                    <!-- Branding Image -->
                                    <a class="brand-logo" href="{{ url('/') }}">
                                        {{ config('app.name', 'Laravel') }}
                                    </a>
                                    <ul class="right hide-on-med-and-down">
                                        <!-- Authentication Links -->
                                        @if (Auth::guest())
                                            <li><a href="{{ env('URL_ADMIN_LOGIN') }}">Login</a></li>
                                            <li><a href="{{ url('/register') }}">Cadastra-se</a></li>
                                        @else
                                        <!-- Dropdown Trigger -->
                                            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                                                    <i class="large material-icons">settings <i class="material-icons right">arrow_drop_down</i> </i>
                                                    </a>
                                            </li>
                                            <li><a href="{{ env('URL_ADMIN_LOGOUT') }}"
                                                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="large material-icons">input</i>
                                                </a>
                                                <form id="logout-form" action="{{ env('URL_ADMIN_LOGOUT') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        @endif
                                    </ul>
                                </div>


                    </div>

                </nav>
            {{--</div>--}}
        </header>
        <ul id="slide-out" class="side-nav fixed  teal darken-1">
            <li>
                <div class="userView">
                    <div class="background">
                        <img src="images/office.jpg">
                    </div>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <a href="#!user"><img class="circle" src="images/user_default.jpg"></a>
                        <a href="#!name"><span class="white-text name">Anonimo</span></a>li>
                    @else
                        <a href="#!user"><img class="circle" src="images/user_default.jpg"></a>
                        <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                        <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                    @endif

                </div>
            </li>

            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <main>
        <div>
            @yield('content')
        </div>

    </main>
<footer>
    <nav class="teal darken-4">footer</nav>
</footer>
    <!-- Page Layout here -->

    <!-- Scripts -->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ asset('materialize/js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('materialize/js/materialize.min.js') }}"></script></body>
<script>
    $(document).ready(function(){
        $('.slide-out').sideNav({
                menuWidth: 250, // Default is 300
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
        );
        $('.dropdown-button').dropdown();
    });

</script>
</html>
