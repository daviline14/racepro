@extends('layout')

@section('content')
@include('resources.navbar')

@vite(['resources/css/league.css','resources/js/inscription.js'])

<style>
    .flag {
            width: 40px;
            height: auto;
            margin-right:5px;
        }
</style>

<div class="container">
    <div class="row  align-items-center p-5">
        <div class="col-6">
            <h1 class="fw-bold title1">
                {{ $league->name }}
            </h1>
        </div>
        <div class="col-6">
            <div class="card rounded-5 p-4 shadow-lg border-dark-subtle" style="width: 100%;height:calc(100vh - 190px);">
                <div class="card-body">
                    <h5 class="card-title fs-2 " >Requisitos</h5>
                    <h5 class="card-title fs-2 " >Calendario</h5>
                    <table class="table table-hover" style='background-color:#333'>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Circuito</th>
                                <th scope="col">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="https://flagcdn.com/w320/us.png" alt="USA Flag" class="flag"> Circuito de las Américas</td>
                                <td>2024-04-15</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="https://flagcdn.com/w320/es.png" alt="Spain Flag" class="flag"> Circuito de Jerez</td>
                                <td>2024-05-10</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="https://flagcdn.com/w320/it.png" alt="Italy Flag" class="flag"> Circuito de Monza</td>
                                <td>2024-07-22</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="https://flagcdn.com/w320/jp.png" alt="Japan Flag" class="flag"> Circuito de Suzuka</td>
                                <td>2024-09-03</td>
                            </tr>
                        </tbody>
                      </table>
                </div>
                <button type="button" id='inscription' class="btn btn-outline-dark">Inscríbete</button>
              </div>
              <div id="overlay"></div>
              <div id="formContainer">
                <form id="leagueForm">
                    <!-- Botón de cerrar -->
                    <button class="close-btn" id="closeForm">&times;</button>
                    @csrf
                    <div class="form-group">
                        <label for="name">Coche</label>
                        <input type="text" id="car" name="car" placeholder="Coche">
                    </div>

                    <div class="form-group">
                        <label for="car_number">Número</label>
                        <input type="number" id="car_number" name="car_number" placeholder="Número de coche">
                    </div>


                    <button type="submit">Guardar Liga</button>
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class='text-center '>
                    <h2 class="fw-bold p-5 title2">
                        Participantes
                    </h2>
                    <table class="table">
                        <thead>
                            <th scope="col">
                                #
                            </th>
                            <th scope="col">
                                Usuario
                            </th>
                            <th scope="col">
                                Coche
                            </th>
                            <th scope="col">
                                Categoría
                            </th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
