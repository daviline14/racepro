<?php

namespace App\Http\Controllers;

use App\Http\Controllers\League\LeagueListController;
use Illuminate\Http\Request;
use App\Models\League;

class HomeController extends Controller
{
    public function index(){
        $last_three=League::orderBy('created_at', 'desc')->take(3)->get();
        return view('home',['leagues'=>$last_three]);
    }
}
