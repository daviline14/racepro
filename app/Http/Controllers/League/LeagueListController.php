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
        ->join('simulators','simulators.id','=','leagues.simulator')
        ->join ('categories','categories.id','=','leagues.category')
        ->join ('users','users.id','=','leagues.user')
        ->select('leagues.name as leagueName','simulators.name as simulatorName','categories.name as categoryName','categories.id as categoryId'
        ,'simulators.image_url','users.username as username','leagues.created_at as created','users.icon as icon','leagues.key as key')
        ->get();

        /* dd($leagues); */

        return view('league.leagues',['leagues'=>$leagues]);
    }


}
