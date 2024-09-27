<?php

namespace App\Http\Controllers\League;

use Illuminate\Http\Request;
use App\Models\League;
use App\Http\Controllers\Controller;

class LeaguesController extends Controller
{
    public function show(){
        return view('league.leagues');
    }

}
