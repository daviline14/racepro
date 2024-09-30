<?php

namespace App\Http\Controllers\League;

use Illuminate\Http\Request;
use App\Models\League;
use App\Http\Controllers\Controller;

class CreateLeagueController extends Controller
{
    public function show(){
        return view('league.create');
    }
    public function create(Request $request){
       /*  $request->validate([
            'name'=>'required|string',
            'category'=>'required'
        ]); */

        /* $category = $request->input('category');
        $max_racers = $request->input('max_racers'); */
        // dd($request);
        League::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'max_racers'=>$request->max_racers,
            'description'=>$request->description
        ]);

        return redirect('/leagues')->with('success', 'Has creado la liga correctamente');
    }
}
