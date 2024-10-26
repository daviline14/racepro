@extends('layout')
@include('resources.navbar')
@section('content')

<div class="container w-50 flex-d">
    <div class='row'>

        <div class="d-grid" style="height:60vh;place-items: center;">
            <div class="title text-center ">
                <h1 class='fw-semibold'>Crea tu liga</h1>
            </div>
                <form action="{{ route('createleagues.create') }}" method="POST">
                    @csrf
                    <div class='w-100'>
                        <div class="form-floating">
                            <input type="text" id="name" name="name" class='form-control rounded border-dark border-2 mb-3' required>
                            <label for="name" class='form-label fw-bold'>Nombre</label>
                        </div>
                        <div class="form-floating" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="This top tooltip is themed via CSS variables.">
                            <select class="form-select rounded border-dark border-2 mb-3" id='simulator_id' name='simulator_id' disabled aria-label="Default select example" >
                                <option value="">Selecciona un simulador</option>
                                <option value="1">iRacing</option>
                                <option value="2">Assetto Corsa</option>
                                <option value="3" selected>Assetto Corsa Competizione</option>
                                <option value="4">rFactor 2</option>
                                <option value="5">Project CARS 2</option>
                                <option value="6">rFactor</option>
                                <option value="7">RaceRoom Racing Experience</option>
                                <option value="8">Automobilista 2</option>
                                <option value="9">Gran Turismo 7</option>
                                <option value="10">Forza Motorsport</option>
                            </select>
                            <label for="simulator" class='form-label fw-bold'>Juego</label>
                        </div>
                       {{--  <div class="form-floating">
                            <select class="form-select rounded border-dark border-2 mb-3" id='category_id' name='category_id' aria-label="Default select example">
                                <option value="" disabled selected>Selecciona una categoría</option>
                                <option value="1">GT3</option>
                                <option value="2">GT4</option>
                                <option value="3">GT2</option>
                                <option value="4">TCX</option>
                            </select>
                            <label for="category" class='form-label fw-bold'>Categoría</label>
                        </div> --}}
                        <div class="form-floating">
                            <input type="number"  id='max_racers' name="max_racers" class='form-control mb-3 rounded  border-dark border-2' required>
                            <label for="max_racers" class='form-label fw-bold'>Número de jugadores</label>
                        </div>
                        <div class="form-floating">
                            <input type="date"  id='start_date' name="start_date" class='form-control mb-3 rounded  border-dark border-2' required>
                            <label for="start_date" class='form-label fw-bold'>Fecha de inicio</label>
                        </div>
                        <div class="form-floating">
                            <input type="date"  id='end_date' name="end_date" class='form-control mb-3 rounded  border-dark border-2' required>
                            <label for="end_date" class='form-label fw-bold'>Fecha de fin</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control fw-5 rounded  border-dark border-2" style="height: 100px" placeholder="Puedes escribir algo normal, o algo gracioso..." id="description" name='description'></textarea>
                            <label for="description" class='form-label fw-bold'>Descripción</label>

                          </div>


                        <div class="">
                            <div class="d-grid gap-2 justify-content-center">
                                <button type="submit" class='btn btn-dark btn-sm px-4'>Crear liga</button>
                            </div>
                        </div>


                    </div>
                </form>

        </div>
    </div>
</div>
@endsection
