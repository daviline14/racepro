<?php

namespace App\Http\Controllers\League;

use Illuminate\Http\Request;
use App\Models\League;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateLeagueController extends Controller
{
    public function show(){
        if(Auth::check()){
            return view('league.create');
        }else{
            session()->flash('error','No puedes crear una liga si no estás registrado');
            return redirect()->back();
        }
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'simulator_id' => 'required|integer',

            'max_racers' => 'required|integer',
            'creator_user_id'=>'integer',
            'description' => 'nullable|string',
            'start_date'=>'date',
            'end_date'=>'date',
        ]);

        /* $category = $request->input('category');
        $max_racers = $request->input('max_racers'); */
            // dd($request);
        League::create([
            'name'=>$request->name,
            'simulator_id'=>$request->simulator_id,

            'max_racers'=>$request->max_racers,
            'creator_user_id'=>Auth::id(),
            'description'=>$request->description,
            'key'=>Str::random(8),
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date

        ]);

        return redirect('/leagues')->with('success', 'Has creado la liga correctamente');
    }
}
