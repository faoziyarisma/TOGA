<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardInformationController extends Controller
{
    public static function count_users(){
        $cur_date = now()->format('Y-m-d');

        //contIn_20
        $data = DB::table('kwt_organisasis')->count();
        
        
        return $data ;
    }

    public static function count_events(){
        $cur_date = now()->format('Y-m-d');

        //contIn_20
        $data = DB::table('kwt_events')->count();
        
        return $data ;
    }

    public static function count_togas(){
        $cur_date = now()->format('Y-m-d');

        //contIn_20
        $data = DB::table('togas')->count();
        
        
        return $data ;
    }

    public static function count_produksitogas(){
        $cur_date = now()->format('Y-m-d');

        //contIn_20
        $data = DB::table('produksi_togas')->count();
        
        return $data ;
    }
}
