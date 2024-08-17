@section('navbar')
<nav class="navbar navbar-expand-lg p-5 border-bottom border-dark border-2" style="height: 90px; background-color: white; border-bottom: 1px #333 solid;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Menú a la izquierda -->
        <div class="w-25">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Logo al centro -->
        <div class="mx-auto">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/Logo.png') }}" alt="RACEPRO" class="logo" style="height: 30px;">
            </a>
        </div>

        <!-- Icono de usuario a la derecha -->
        <div class="nav-icon ms-auto" style="position: relative;">
            <a class="nav-link" href="{{ route('auth.login') }}">
                <img src="{{ asset('img/login_icon.png') }}" alt="User Icon" style="height: 40px;">
            </a>
        </div>
    </div>
</nav>

@endsection

