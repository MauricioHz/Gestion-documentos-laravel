<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Pipeline Project Management Bootstrap Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management Bootstrap theme by Medium Rare">
    <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="{{ URL::asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
    
</head>

<body>
    <div class="layout layout-nav-top">
        <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="index.html">
                <img alt="Pipeline" src="{{ URL::asset('assets/img/logo.svg') }}" />
            </a>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-block d-lg-none ml-2">
                    <div class="dropdown">
                        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="Image" src="{{ URL::asset('assets/img/avatar-male-4.jpg') }}" class="avatar" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                            <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Documentación</a>
                    </li>
                </ul>
                <div class="d-lg-flex align-items-center">
                    <form class="form-inline my-lg-0 my-2">
                        <div class="input-group input-group-dark input-group-round">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">search</i>
                                </span>
                            </div>
                            <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search app" aria-describedby="search-app">
                        </div>
                    </form>
                    <div class="dropdown mx-lg-2">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Crea nuevo
                        </button>
                        <div class="dropdown-menu" aria-labelledby="newContentButton">
                            <a class="dropdown-item" href="{{ route('home') }}">Perfiles</a>
                            <a class="dropdown-item" href="{{ route('home') }}">Usuarios</a>
                            <a class="dropdown-item" href="{{ route('home') }}">Grupos</a>
                            <a class="dropdown-item" href="{{ route('home') }}">Secciones</a>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        <div class="dropdown show">
                            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img alt="Image" src="{{ URL::asset('assets/img/avatar-male-4.jpg') }}" class="avatar">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right show">
                                <a href="nav-side-user.html" class="dropdown-item">Perfil {{ Auth::user()->name }}</a>
                                <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- contenido -->
                    @yield('content')
                    <!-- fin contenido -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/autosize@4.0.2/dist/autosize.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.10.0/prism.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.7/lib/draggable.bundle.legacy.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.7/lib/plugins/swap-animation.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/theme.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app/app.js') }}"></script>
    
    <style type="text/css">
        .layout-switcher {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) translateY(73px);
            color: #fff;
            transition: all .35s ease;
            background: #343a40;
            border-radius: .25rem .25rem 0 0;
            padding: .75rem;
            z-index: 999;
        }

        .layout-switcher:not(:hover) {
            opacity: .95;
        }

        .layout-switcher:not(:focus) {
            cursor: pointer;
        }

        .layout-switcher-head {
            font-size: .75rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .layout-switcher-head i {
            font-size: 1.25rem;
            transition: all .35s ease;
        }

        .layout-switcher-body {
            transition: all .55s ease;
            opacity: 0;
            padding-top: .75rem;
            transform: translateY(24px);
            text-align: center;
        }

        .layout-switcher:focus {
            opacity: 1;
            outline: none;
            transform: translateX(-50%) translateY(0);
        }

        .layout-switcher:focus .layout-switcher-head i {
            transform: rotateZ(180deg);
            opacity: 0;
        }

        .layout-switcher:focus .layout-switcher-body {
            opacity: 1;
            transform: translateY(0);
        }

        .layout-switcher-option {
            width: 72px;
            padding: .25rem;
            border: 2px solid rgba(255, 255, 255, 0);
            display: inline-block;
            border-radius: 4px;
            transition: all .35s ease;
        }

        .layout-switcher-option.active {
            border-color: #007bff;
        }

        .layout-switcher-icon {
            width: 100%;
            border-radius: 4px;
        }

        .layout-switcher-body:hover .layout-switcher-option:not(:hover) {
            opacity: .5;
            transform: scale(0.9);
        }

        @media all and (max-width: 990px) {
            .layout-switcher {
                min-width: 250px;
            }
        }

        @media all and (max-width: 767px) {
            .layout-switcher {
                display: none;
            }
        }
    </style>
    <div class="layout-switcher" tabindex="1">
        <div class="layout-switcher-head d-flex justify-content-between">
            <span>Select Layout</span>
            <i class="material-icons">arrow_drop_up</i>
        </div>
        <div class="layout-switcher-body">
        </div>
    </div>
 <script>
 
var options = {
  valueNames: [ 'parametro']
};
var parametroList = new List('parametros', options);

console.log(parametroList);

var options = {
  valueNames: [ 'proyecto']
};
var proyectoList = new List('proyectos', options);

var options = {
  valueNames: [ 'input.filter-check']
};
var checkList = new List('checks', options);

console.log(checkList);

var options1 = {
  valueNames: [ 'customCheck']
};
var actividadList = new List('actividad', options1);

console.log(actividadList);

/*
listClass:"list"
listContainer:div#parametros
searchClass:"search"
valueNames:["parametro"]
*/

 </script>
</body>

</html>