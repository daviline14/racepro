@extends('layout')
@include('resources.navbar')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container-fluid" style='height: calc(100vh - 90px);'>
    <div class='row'>
        <div class="col-6 p-0 m-0">
            <div src="" alt="Racecar" class='w-100' style='height: calc(100vh - 100px);background-image:url("{{ asset('img/Login.png') }}");background-size:cover; background-position:top;'></div>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <div class="login-box w-50">
                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    <div class='w-100'>
                        <div class="pt-3">
                            <label for="username" class='form-label'>Usuario</label>
                            <input type="text" id="username" name="username" class='form-control rounded border border-dark border-2' required>
                        </div>
                        <div class="pt-1">
                            <label for="password" class='form-label'>Contraseña</label>
                            <input type="password" id="password" name="password" class='form-control rounded border border-dark border-2' required>
                        </div>
                        <div class="pt-3">
                            <div class="d-grid gap-2 justify-content-center">
                                <button type="submit" class='btn btn-dark btn-sm px-4'>Entrar</button>
                                <p>
                                    ¿No tienes cuenta?
                                    <a class='link-dark link-underline-opacity-0 fw-bold' href='{{ route('auth.register') }}'> Regístrate</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
