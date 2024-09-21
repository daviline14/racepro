@section('navbar')
<nav class="navbar navbar-expand-lg p-5 border-bottom border-dark border-2" style="height: 90px; background-color: white; border-bottom: 1px #333 solid;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Menú a la izquierda -->
        <div class="w-25">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/racepro/public">Home</a>
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
        <div class="justify-content-center">
            <a class="navbar-brand" href="/racepro/public">
                <img src="{{ asset('img/Logo.png') }}" alt="RACEPRO" class="logo" style="height: 30px;">
            </a>
        </div>

        @auth
            <!-- Icono de usuario a la derecha -->
            <div class="dropdown-center">
                <!-- Imagen que actúa como botón del menú desplegable -->
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('img/login_icon.png') }}" alt="Menu" style="width: 40px; height: 40px;">
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión
                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </a>
                    </li>
                </ul>
            </div>
        @endauth
        @guest
        <div class='row'>
            <div class='col'>
                <button type="button" class="btn btn-outline-dark">
                    <a href="{{ route('auth.login') }}" class='nav-link'>Regístrate</a>
                </button>
            </div>
            <div class='col'>
                <button type="button" class="btn btn-link">
                    <a href="{{ route('auth.register') }}" class='nav-link'>Iniciar sesión</a>
                </button>

            </div>
        </div>

        @endguest

    </div>
</nav>

@endsection

