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
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/admin.css') }}"  media="screen,projection"/>


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
            margin: 0px 10px 0px 10px;
        }
    </style>
</head>
<body>

    <div id="app">

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Perfil</a></li>
            <li><a href="#!">Configurações</a></li>
            <li class="divider"></li>
            @if (!Auth::guest())
            <li><a href="#!">{{ Auth::user()->email }}</a></li>
                @endif

        </ul>
        <header>
            {{--<div class="navbar-fixed">--}}
                <nav class=" blue-grey lighten-3">
                    <div class="nav-wrapper">
                        <div class="row">
                            <div class="col s2 hide-on-large-only">
                                <ul>
                                    <li>
                                        <a href="#" data-activates="slide-out" class="button-collapse">
                                            <i class="material-icons">menu</i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s6 m6 l6">

                                <a href="#!" class="breadcrumb">Dashboard</a>
                                {{--<a href="#!" class="breadcrumb">Second</a>--}}
                                {{--<a href="#!" class="breadcrumb">Third</a>--}}
                            </div>
                            <div class="col s4 m6 l6">

                                <div class="navbar-header">
                                    <ul class="right">

                                        <li><a href="{{ env('URL_ADMIN_LOGOUT') }}"
                                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                               class="tooltipped" data-position="left"
                                               data-delay="50" data-tooltip="Logout"
                                            >
                                                <i class="large material-icons">input</i>
                                            </a>
                                            <form id="logout-form" action="{{ env('URL_ADMIN_LOGOUT') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            {{--</div>--}}
            <ul id="slide-out" class="side-nav fixed  blue-grey darken-3">
                <nav class="blue-grey darken-4">
                    <div class="container">
                        <!-- Branding Image -->
                        <a class="brand-logo" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                </nav>
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
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img class="circle avatar" src="images/user_default.jpg">
                                </div>
                                <div class="col col s8 m8 l8">
                                    <a class="dropdown-button" href="#!" data-activates="dropdown1">
                                    <span class="white-text name">{{ Auth::user()->name }}
                                        <i class="material-icons right">arrow_drop_down</i>
                                    </span>
                                    </a>
                                </div>
                            </div>

                        @endif

                    </div>
                </li>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active white-text"><i class="material-icons">view_quilt</i>Dashboard</div>
                        <div class="collapsible-body blue-grey darken-4">
                        <span>
                            <ul>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link1</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link2</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link3</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link4</a></li>
                            </ul>
                        </span>
                        </div>

                    </li>
                    <li>
                        <div class="collapsible-header white-text"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body blue-grey darken-4">
                        <span>
                            <ul>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link1</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link2</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link3</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link4</a></li>
                            </ul>
                        </span>
                        </div>

                    </li>
                    <li>
                        <div class="collapsible-header white-text"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body blue-grey darken-4">
                        <span>
                            <ul>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link1</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link2</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link3</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link4</a></li>
                            </ul>
                        </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header white-text"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body blue-grey darken-4">
                        <span>
                            <ul>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link1</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link2</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link3</a></li>
                                <li><a class="waves-effect white-text waves-light" href="#!">Link4</a></li>
                            </ul>
                        </span>
                        </div>
                    </li>
                </ul>


            </ul>
        </header>


    <main>
        <div>
            @yield('content')
        </div>

    </main>

<footer class="page-footer blue-grey lighten-3">
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright SiGLA - COTEC
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
    <!-- Page Layout here -->

    <!-- Scripts -->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ asset('materialize/js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('materialize/js/materialize.min.js') }}"></script></body>
<script>
    $(document).ready(function(){
        // Show sideNav

        $(".button-collapse").sideNav();

        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrainWidth: false, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false, // Displays dropdown below the button
                alignment: 'left', // Displays dropdown with edge aligned to the left of button
                stopPropagation: false // Stops event propagation
            }
        );
    });

</script>
</html>
