<?php

namespace App\Http\Controllers\League;

use Illuminate\Http\Request;
use App\Models\League;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class LeaguesController extends Controller
{
    public function show(){
        $leagues=DB::table('leagues')
        ->join('simulators','simulators.id','=','leagues.simulator')
        ->join ('categories','categories.id','=','leagues.category')
        ->select('leagues.name as leagueName','simulators.name as simulatorName','categories.name as categoryName'
        ,'simulators.image_url')->get();
        //   return dd($leagues);
        return view('league.leagues',['leagues'=>$leagues]);
    }


}
