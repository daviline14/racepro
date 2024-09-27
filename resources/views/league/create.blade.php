@extends('layout')
@include('resources.navbar')
@section('content')

<div class="container w-50 vh-100 flex-d">
    <div class='row'>

        <div class=" justify-content-center align-items-center align-middle">
            <div class="login-box ">

                    @csrf
                    <div class='w-100'>
                        <div class="pt-3">
                            <label for="username" class='form-label'>Nombre</label>
                            <input type="text" id="name" name="name" class='form-control rounded border-dark border-2' required>
                        </div>
                        <div class="pt-1">
                            <label for="email" class='form-label'>Email</label>
                            <input type="email" id="email" name="email" class='form-control rounded  border-dark border-2' required>
                        </div>
                        <div class="pt-1">
                            <label for="password" class='form-label'>Contraseña</label>
                            <input type="password" id="password" name="password" class='form-control rounded  border-dark border-2' required>
                        </div>
                        {{-- <div class="pt-1">
                            <label for="password_confirmation" class='form-label'>Repite la contraseña</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class='form-control rounded  border-dark border-2' required>
                        </div> --}}
                        <div class="pt-3">
                            <div class="d-grid gap-2 justify-content-center">
                                <button type="submit" class='btn btn-dark btn-sm px-4'>Registro</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
