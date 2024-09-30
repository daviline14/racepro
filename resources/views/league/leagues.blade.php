@extends('layout')
@include('resources.navbar')
@section('content')
<div class="container ">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <h1 class='fw-bolder text-center text-uppercase p-5'>
        Ligas
    </h1>

</div>
<div class="container ">
    {{-- @dd($leagues) --}}
    @foreach ($leagues as $league )

    <div class="card" style="width: 18rem;">
        <img src="{{ $league->image_url }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $league->leagueName  }}</h5>
          </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $league->categoryName }}</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    @endforeach

</div>
@endsection
