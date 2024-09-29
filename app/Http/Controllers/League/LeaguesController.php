<?php

namespace App\Http\Controllers\League;

use Illuminate\Http\Request;
use App\Models\League;
use App\Http\Controllers\Controller;

class LeaguesController extends Controller
{
    public function show(){
        $leagues=League::all();
        return view('league.leagues',['leagues'=>$leagues]);
    }


}
