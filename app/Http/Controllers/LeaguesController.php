<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaguesController extends Controller
{
    public function show(){
        return view('leagues');
    }
}
