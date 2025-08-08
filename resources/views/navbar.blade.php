<nav class="navbar navbar-expand-lg navbar-dark bg-pink px-4">
    <a class="navbar-brand fw-bold text-white" href="{{ route("dashboard") }}">Logo here</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" href="{{ route('dashboard') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route("about") }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Libraries</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <li><a class="dropdown-item" href="#">LiRA</a></li>
                    <li><a class="dropdown-item" href="#">MIDES Repository</a></li>
                    <li><a class="dropdown-item" href="#">Alert Services</a></li>
                    <li><a class="dropdown-item" href="#">ALINET</a></li>
                    <li><a class="dropdown-item" href="#">Book borrowing</a></li>
                    <li><a class="dropdown-item" href="#">Information Literacy Alert Schedule</a></li>
                    <li><a class="dropdown-item" href="#">Scanning Services</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="eresourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Electronic Resources
                </a>
                <ul class="dropdown-menu" aria-labelledby="eresourcesDropdown">
                    <li><a class="dropdown-item" href="{{ route('mides') }}">MIDES repository</a></li>
                    <li><a class="dropdown-item" href="#">SIDLAk</a></li>
                </ul>
            </li>
        </ul>
        <div class="d-flex align-items-center text-white">
            <div class="me-2"><i class="bi bi-person-circle fs-4"></i></div>
            <div class="d-flex flex-column">
                <span class="fw-bold">Username</span>
                <a href="{{ route('profile') }}" class="text-white-50 text-decoration-underline small">View profile</a>
            </div>
        </div>
    </div>
</nav>
<style>
    /*drop down*/
    @media (min-width: 992px) {
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }
    }
</style>
