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
            'category' => 'required|integer',
            'max_racers' => 'required|integer',
            'simulator' => 'required|string',
            'description' => 'nullable|string',
            'user'=>'integer'
        ]);

        /* $category = $request->input('category');
        $max_racers = $request->input('max_racers'); */
        //   dd(Auth::user()->id);
        League::create([
            'name'=>$request->name,
            'simulator'=>$request->simulator,
            'category'=>$request->category,
            'max_racers'=>$request->max_racers,
            'user'=>$request->user,
            'description'=>$request->description,
            'key'=>Str::random(8)

        ]);

        return redirect('/leagues')->with('success', 'Has creado la liga correctamente');
    }
}
