<div id="sidebar-wrapper" class="overlay">
    {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}
    <div class="overlay-content">
        <a class="list-group-item list-group-item-action border-0 p-3" href="#!">
            <i class="fa fa-location-arrow  mr-2" aria-hidden="true"></i> Home</a>
        <a class="list-group-item list-group-item-action border-0 p-3" href="{{ route('themes') }}">
            <i class="fa fa-image mr-2" aria-hidden="true"></i>Themes</a>
        <!--div class="dropdown__menu"><a class="dropdown-item" href="/themes#transport">Transport</a>
            <a class="dropdown-item" href="/themes#environment">Environment</a>
            <a class="dropdown-item" href="/themes#housing">Housing</a>
            <a class="dropdown-item" href="/themes#economy">Economy</a>
            <a class="dropdown-item" href="/themes#education">Education</a>
            <a class="dropdown-item" href="/themes#health">Health</a>
            <a class="dropdown-item" href="/themes#demographics">Demographics</a>
        </div-->
        <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Stories</a>
        <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Queries</a>
        <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Tools</a>
        <a class="list-group-item list-group-item-action border-0 p-3" href="#!">Portal</a>
    </div>
</div>
<script>
    function openNav() {
        document.getElementById("sidebar-wrapper").style.width = "15%";
    }

    function closeNav() {
        document.getElementById("sidebar-wrapper").style.width = "0%";
    }
</script>
