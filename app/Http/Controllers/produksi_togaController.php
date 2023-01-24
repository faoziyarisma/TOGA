<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produksi_togaController extends Controller
{
    public function index(){
        return view('produksi_toga.index',[
            "title" => "Produksi KWT",
            "active" => "produksi_TOGA",
        ]);
    }
}
