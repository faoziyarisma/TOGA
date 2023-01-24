<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class togaController extends Controller
{
    public function index(){
        return view('toga.index',[
            "title" => "Tanaman TOGA",
            "active" => "toga",
            
        ]);
    }

    public function detail_toga(){

    }
}
