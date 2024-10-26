<?php

namespace App\Http\Controllers\League;
use App\Models\League;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function show($key){
        $league=League::where(['key'=>$key])->get();

        return view('league.league',['league'=>$league[0]]);
    }
    public function inscription($user_id,$league_id){
        DB::table('inscriptions')->insertGetId([
            'user_id'=>$user_id,
            'league_id'=>$league_id
        ]
        );
    }
}
