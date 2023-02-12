<?php

namespace App\Http\Controllers;

use App\Models\toga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class togaController extends Controller
{
    public function index(){
        $items = toga::latest()->paginate(4);
        if(request('search')){
            $word = request('search');
            // dd($word);
            $items = DB::table('togas')->where('name','LIKE','%'.$word."%")->paginate(4);
            $items->appends(request()->all());
            return view('toga.index',[
                'title' => 'TOGA',
                'active' => 'toga',
                'items' => $items,
            ]);

        }
        return view('toga.index',[
            "title" => "Tanaman TOGA",
            "active" => "toga",
            "items" => $items
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
