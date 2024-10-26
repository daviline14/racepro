@section('navbar')
<nav class="navbar navbar-expand-lg p-5 border-bottom border-dark border-2" style="height: 90px; background-color: white; border-bottom: 1px #333 solid;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Menú a la izquierda -->
        <div class="row w-100">

        <div class="col-2">

            <ul class="navbar-nav mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " href="leagues">Ligas</a>
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
    <div class="col-8">
        <!-- Logo al centro -->
        <div class="justify-content-center text-center ">
            <a class="navbar-brand" href="{{ route('home.show') }}">
                <img src="{{ asset('img/Logo.png') }}" alt="RACEPRO" class="logo" style="height: 30px;">
            </a>
        </div>
    </div>
<div class="col-2">
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
        <div class='row align-items-center' >
            <div class='col-7'>
                <button type="button" class="btn btn-link link-dark  link-offset-2 link-underline link-underline-opacity-0"">
                    <a href="{{ route('auth.login') }}" class='nav-link fw-semibold '>Iniciar sesión</a>
                </button>

            </div>
            <div class='col-5'>
                <button type="button" class="btn btn-outline-dark border border-dark border-2">
                    <a href="{{ route('auth.register') }}" class='nav-link fw-bold'>Regístrate</a>
                </button>
            </div>
        </div>

        @endguest
    </div>
    </div>

    </div>
</nav>

@endsection

