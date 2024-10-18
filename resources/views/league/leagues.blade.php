@extends('layout')

@section('content')
@include('resources.navbar')

<style>
    .card {
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: relative;
    }
    .flag-icon {
      position: absolute;
      top: 20px;
      right: 25px;
      width: 100px;
      height: auto;
    }
    .currency-amount {
      font-size: 1.5rem;
      font-weight: bold;
      color: black;
    }
    .currency-symbol {
      font-size: 1rem;
      color: gray;
    }
    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
    }
    .card-subtitle {
      font-size: 0.9rem;
      color: gray;
    }
    .user-icon{
        width:30px;
    }
</style>

<div class="container">
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

    <h1 class="fw-bolder text-center text-uppercase pt-5 pb-2">
        <p class="fw-bolder">Ligas</p>
    </h1>

    @auth
        <div class="d-flex justify-content-end pe-3 pb-5 ">
            <a class="fw-semibold border border-1 border-dark btn btn-outline-dark shadow px-3 py-2" href="{{ route('createleagues.create') }}">
                Crea tu liga
            </a>
        </div>
    @endauth

    {{-- Listado de ligas --}}
    <div class="row">
        @foreach ($leagues as $league)
            <div class="col-md-4 mb-4"> <!-- Usamos `col-md-4` para mantener la estructura de columnas en pantallas medianas -->
                <div class="card" style="width: 100%;">
                    <!-- Flag Icon -->
                    <img src="{{$league->image_url  }}" alt="EU Flag" class="flag-icon pt-1">
                    <!-- Card Content -->
                    <div class="card-body">
                        <h5 class="card-title fs-3">{{ $league->leagueName }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted d-inline-flex px-2 py-1 fw-semibold rounded-2 me-2 border
                        @switch($league->categoryId)
                            @case(1)
                                bg-success-subtle  border-success-subtle
                            @break
                            @case(2)
                                bg-info-subtle  border-info-subtle
                            @break
                            @case(3)
                                bg-danger-subtle  border-danger-subtle
                            @break
                            @default
                        @endswitch  ">
                            {{ $league->categoryName }}
                        </h6>
                        <div class="row">
                            <div class="col">
                                <div class="mt-5 mb-0 text-opacity-25">Created by</div>
                                <div class="currency-amount"><img class='user-icon mr-2' src={{ $league->icon }}>{{ $league->username }}</div>
                            </div>
                            <div class="col">
                                <div class="mt-5 mb-0 text-opacity-25">Created at</div>
                                <div class="currency-amount">{{ date('d/m/Y', strtotime($league->created)) }}</div>
                            </div>
                        </div>

                        <div class="row pt-4">
                            <div class="btn rounded border-dark-subtle border-1">
                                <a href="/racepro/public/leagues/{{ $league->key }}">Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
