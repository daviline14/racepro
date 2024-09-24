<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/League;

class LeaguesController extends Controller
{
    public function show(){
        return view('leagues');
    }
    public function create_league(){

    }
}
