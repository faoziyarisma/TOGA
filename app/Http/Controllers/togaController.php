<?php

namespace App\Http\Controllers;

use App\Models\toga;
use Illuminate\Http\Request;

class togaController extends Controller
{
    public function index(){
        return view('toga.index',[
            "title" => "Tanaman TOGA",
            "active" => "toga",
            "items" => toga::latest()->paginate(6)
        ]);
    }

    public function detail_toga(toga $toga){
        // dd($toga);
        return view('toga.detail',[
            "title" => 'Tanaman TOGA',
            "active" => 'TOGA',
            "item" => $toga
        ]);
    }
}
