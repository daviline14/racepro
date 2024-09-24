<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;

class LeaguesController extends Controller
{
    public function show(){
        return view('league.leagues');
    }
    public function create_league(Request $request){
        League::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'max_racers'=>$request->max_racers
        ]);

        return redirect('/leagues')->with('success', 'Has creado la liga correctamente');
    }
}
