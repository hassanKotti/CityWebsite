<!doctype html>
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="bg-dark" id="sidebar-wrapper">
                <div class="sidebar-heading"></div>
                <div class="list-group ">
                    <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Home</a>
                    <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Themes</a>
                    <div class="dropdown__menu"><a class="dropdown-item" href="/themes#transport">Transport</a><a
                            class="dropdown-item" href="/themes#environment">Environment</a><a class="dropdown-item"
                            href="/themes#housing">Housing</a><a class="dropdown-item"
                            href="/themes#economy">Economy</a><a class="dropdown-item"
                            href="/themes#education">Education</a><a class="dropdown-item"
                            href="/themes#health">Health</a><a class="dropdown-item"
                            href="/themes#demographics">Demographics</a></div>
                    <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Stories</a>
                    <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Queries</a>
                    <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Tools</a>
                    <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Portal</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <div class="jum-container">
                    <!-- Top navigation-->
                    <nav class="navbar  transparent navbar-inverse ">
                        <div class="container navbar-inner">
                            <a class="navbar-brand" href="#">
                                <button class="side-menu__toggler s-m__trigger side-menu__left" type="button"
                                    data-toggle="collapse" data-target="#sidebar-wrapper"
                                    aria-controls="sidebar-wrapper" aria-expanded="false"
                                    aria-label="{{ __('Toggle navigation') }}">
                                    <div class="menu-button">
                                        <div class="menu-button__bar menu-button__bar--top"> </div>
                                        <div class="menu-button__bar menu-button__bar--middle"> </div>
                                        <div class="menu-button__bar menu-button__bar--bottom"></div>
                                    </div>
                                </button>
                            </a>
                            <div class="collapse navbar-collapse" id="">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">

                                    <ul class="side-menu">
                                        <li class="side-menu__nav-item"><a class="side-menu__nav-link" href="/"><svg
                                                    class="icon icon--small side-menu__icon">
                                                    <use xlink:href="#icon__"></use>
                                                </svg><span>home</span></a></li>
                                        <li class="side-menu__nav-item dropdown dropdown--show"><a
                                                class="side-menu__nav-link dropdown__link" href="/themes"><svg
                                                    class="icon icon--small side-menu__icon">
                                                    <use xlink:href="#icon__themes"></use>
                                                </svg><span>themes</span></a><a class="dropdown__toggle"><svg
                                                    class="icon icon--small side-menu__icon">
                                                    <use xlink:href="#icon__arrow"></use>
                                                </svg><span class="sr-only">Toggle Dropdown</span></a>

                                        </li>
                                        <li class="side-menu__nav-item"><a class="side-menu__nav-link"
                                                href="/stories"><svg class="icon icon--small side-menu__icon">
                                                    <use xlink:href="#icon__stories"></use>
                                                </svg><span>stories</span></a></li>
                                        <li class="side-menu__nav-item"><a class="side-menu__nav-link"
                                                href="/queries"><svg class="icon icon--small side-menu__icon">
                                                    <use xlink:href="#icon__queries"></use>
                                                </svg><span>queries</span></a></li>
                                        <li class="side-menu__nav-item"><a class="side-menu__nav-link"
                                                href="/tools"><svg class="icon icon--small side-menu__icon">
                                                    <use xlink:href="#icon__tools"></use>
                                                </svg><span>tools</span></a></li>
                                        <li class="side-menu__nav-item"><a class="side-menu__nav-link"
                                                href="/portal"><svg class="icon icon--small side-menu__icon">
                                                    <use xlink:href="#icon__portal"></use>
                                                </svg><span>portal</span></a></li>
                                    </ul>
                                </ul>
                            </div>
                            <div class="d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3">
                                <img class="float-left mr-1" height="20px" width="20px" title="Click to open search box"
                                    src="{{ asset('assets/magnifying-glass.svg') }}">
                                <img class="float-right ml-2" height="20px" width="20px"
                                    title="Click to open search box" src="{{ asset('assets/portal_icon.svg') }}">
                            </div>
                        </div>
                    </nav>
                    <div class="container">
                        @yield('jum-container')
                    </div>
                </div>
                <main>
                    @yield('content')
                </main>
            </div>
            <script src="//unpkg.com/alpinejs" defer></script>
        </div>
    </div>
</body>

</html>
