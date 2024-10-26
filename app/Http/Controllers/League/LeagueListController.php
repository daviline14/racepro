<?php

namespace App\Http\Controllers\League;

use Illuminate\Http\Request;
use App\Models\League;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class LeagueListController extends Controller
{
    public function show(){
        $leagues=DB::table('leagues')
        ->join('simulators','simulators.id','=','leagues.simulator_id')
        ->join ('users','users.id','=','leagues.creator_user_id')
        ->select('leagues.name as leagueName','simulators.name as simulatorName','simulators.icon_url as icon'
        ,'simulators.icon_url','users.username as username','leagues.created_at as created','users.icon as icon','leagues.key as key')
        ->get();

        /* dd($leagues); */

        return view('league.leagues',['leagues'=>$leagues]);
    }


}
