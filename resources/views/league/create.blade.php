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
                        <div class="form-floating">
                            <select class="form-select rounded border-dark border-2 mb-3" id='simulator' name='simulator' aria-label="Default select example">
                                <option value="" disabled selected>Selecciona una simulador</option>
                                <option value="1">Assetto Corsa</option>
                                <option value="2">Assetto Corsa Competizione</option>
                                <option value="3">F1 2024</option>
                            </select>
                            <label for="simulator" class='form-label fw-bold'>Juego</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select rounded border-dark border-2 mb-3" id='category' name='category' aria-label="Default select example">
                                <option value="" disabled selected>Selecciona una categoría</option>
                                <option value="1">GT3</option>
                                <option value="2">GT2</option>
                                <option value="3">GT2</option>
                                <option value="4">TCX</option>
                            </select>
                            <label for="category" class='form-label fw-bold'>Categoría</label>
                        </div>
                        <div class="form-floating">
                            <input type="number"  id='max_racers' name="max_racers" class='form-control mb-3 rounded  border-dark border-2' required>
                            <label for="max_racers" class='form-label fw-bold'>Número de jugadores</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control fw-5 rounded  border-dark border-2" style="height: 100px" placeholder="Puedes escribir algo normal, o algo gracioso..." id="description" name='description'></textarea>
                            <label for="description" class='form-label fw-bold'>Descripción</label>

                          </div>

                              <input type="hidden" id='user' name='user' value={{ Auth::user()->id  }}>

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
