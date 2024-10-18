@extends('layout')

@section('content')
@include('resources.navbar')

@vite('resources/css/league.css')

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
            <h1 class="fw-bold" id='title'>
                {{ $league->name }}
            </h1>
        </div>
        <div class="col-6">
            <div class="card rounded-5 p-4" style="width: 100%;height:calc(100vh - 190px);">
                <div class="card-body">
                    <h5 class="card-title fs-2" >Requisitos</h5>
                    <h5 class="card-title fs-2" >Calendario</h5>
                    <table class="table table-hover">
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
              </div>
        </div>
    </div>
</div>



@endsection
