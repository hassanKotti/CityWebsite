<nav class="navbar transparent navbar-inverse ">
    <div class="container navbar-inner">
        <a class="navbar-brand" href="#">
            <button class="side-menu__toggler s-m__trigger side-menu__left" type="button" data-toggle="collapse"
                data-target="#sidebar-wrapper" aria-controls="sidebar-wrapper" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <div class="menu-button">
                    <div class="menu-button__bar menu-button__bar--top"> </div>
                    <div class="menu-button__bar menu-button__bar--middle"> </div>
                    <div class="menu-button__bar menu-button__bar--bottom"></div>
                </div>
            </button>
        </a>
        <div class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
            </ul>
        </div>
        <div class="d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3">
            <img class="float-left mr-1" height="20px" width="20px" title="Click to open search box"
                src="{{ asset('assets/magnifying-glass.svg') }}">
            <img class="float-right ml-2" height="20px" width="20px" title="Click to open search box"
                src="{{ asset('assets/portal_icon.svg') }}">
        </div>
    </div>
</nav>
