<?php

namespace App\Http\Controllers\League;
use App\Models\League;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function show($key){
        $league=League::where(['key'=>$key])->get();

        return view('league.league',['league'=>$league[0]]);
    }
}
