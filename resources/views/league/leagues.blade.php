@extends('layout')
@include('resources.navbar')
@section('content')
<div class="container ">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
<script>
    // Espera 5 segundos (5000 ms) antes de ocultar el mensaje
    setTimeout(function() {
        let flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.transition = 'opacity 1s';
            flashMessage.style.opacity = '0';
            setTimeout(() => flashMessage.remove(), 1000); // Remover después de 1 segundo de transición
        }
    }, 5000); // 5000 ms = 5 segundos
</script>
<div id="flash-message" class="alert alert-danger m-5 position-absolute" style="z-index: 9999;">
    {{ session('error') }}
</div>
@endif

    <h1 class='fw-bolder text-center text-uppercase p-5'>
        Ligas
    </h1>

</div>
<div class="container ">
    {{-- @dd($leagues) --}}
    @foreach ($leagues as $league )

    <div class="card" style="width: 20rem;">
        <!-- Imagen de la liga -->
        <img src="{{ $league->image_url }}" class="card-img-top" alt="...">

        <!-- Título de la liga -->
        <h5 class="card-header">{{ $league->leagueName }}</h5>

        <!-- Lista de elementos -->
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <!-- Columna del ícono -->
                    <div class="col-2 border-end d-flex align-items-center justify-content-center">
                        <x-gmdi-videogame-asset-r/>
                    </div>

                    <!-- Columna del texto -->
                    <div class="col-10 fw-bold d-flex align-items-center">
                        {{ $league->simulatorName }}
                    </div>
                </div>
            </li>

            <!-- Otros ítems de la lista -->
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul>

        <!-- Enlaces de la card -->
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

    @endforeach

</div>
@endsection
