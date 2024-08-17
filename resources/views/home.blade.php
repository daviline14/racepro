    @extends('layout')
    @include('resources.navbar')
    @section('content')
    <div class="container-fluid p-0">
        <div id='mainphoto' class='main  w-100 border-bottom border-dark border-2' style="background-image:url({{ asset('img/1314097.jpeg') }});background-size:cover;">
            <div class='row '>
                <div style='height:70vh' class='col'></div>
            </div>
            <div class='row'>
                <div class='container'>
                    <div class='row'>
                        <div class='text-light p-5 col-6'>
                            <p class='fs-5'>Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Unde, enim! Earum voluptates eligendi optio distinctio,
                                illum, iste deserunt placeat quidem quisquam maxime odit tempora nobis corrupti laboriosam id, cum sequi.
                            </p>
                        </div>

                        <div class='col-6 p-5 mt-5 h-auto'>
                            <div class="d-flex justify-content-end ">
                                <a class="btn btn-lg btn-light border border-2 border-dark fw-semibold" href="#" role="button">Lorem ipsum</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

                </div>
        </div>
    </div>
    </div>
        <div class='container-fluid border-bottom border-dark border-2'>
            <div class='container d-flex'>

                <div class='row m-4 p-5 gx-5' style="height:50vh;align-items:center">
                    <div class='col-6 rounded-5'>

                        <h2 class='fs-1 fw-bolder'>Únete con tus amigos o crea tu propio campeonato</h2>
                    </div>

                    <div class='col-6 p-5 text-justify'>
                        <p>Aquí todos tienen un lugar en los campeonatos, independientemente de su experiencia o categoría preferida. Aquí, puedes unirte a competiciones ya existentes o crear tus propios campeonatos personalizados si no encuentras lo que buscas. Con total flexibilidad para configurar circuitos, reglas y más, nuestra comunidad global te invita a diseñar y competir en eventos a medida, asegurando que siempre haya un espacio para ti. ¡Empieza hoy y lleva tu pasión por el SimRacing al siguiente nivel, creando o participando en el campeonato de tus sueños!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class='row'>
            <div class='col p-3'>
                <p class='text-center fs-1 fw-bolder'>Últimos campeonatos creados </p>
            </div>
        </div>
            <div class='row'>
                <div class='col'>
                    <div class="card rounded rounded-5 mb-3 border border-2 border-dark ">
                        <img src="{{ asset('img/box1.png') }}" class="card-img-top rounded-bottom rounded-5" alt="...">
                        <div class="card-body ">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>

                <div class='col'>
                    <div class="card rounded rounded-5 mb-3 border border-2 border-dark ">
                        <img src="{{ asset('img/box1.png') }}" class="card-img-top rounded-bottom rounded-5" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class='col'>
                    <div class="card rounded rounded-5 mb-3 border border-2 border-dark ">
                        <img src="{{ asset('img/box1.png') }}" class="card-img-top rounded-bottom rounded-5" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

