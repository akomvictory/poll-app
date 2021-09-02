<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

      
    $polling = DB::table('announced_pu_results') //users
        ->join('polling_unit', function ($join) { // contact
            $join->on('announced_pu_results.polling_unit_uniqueid', '=', 'polling_unit.uniqueid')
                 ->where('polling_unit.uniqueid', '=', 9);
        })
        ->get();

        return view('index', ['polling' => $polling]);
    }

    public function showpolls(){

        $lga = DB::table('lga')->distinct()->get();
        return view('show', ['lga' => $lga]);
    }

    public function total(){

        $total = DB::table('announced_pu_results')->sum('party_score');
        return view('total', ['total' => $total]);
    }

}
