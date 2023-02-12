<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kwt_event;
use Illuminate\Support\Facades\DB;
use App\Models\kwt_organisasi;

class kwtController extends Controller
{
    public function index(){
        $items = kwt_event::latest()->paginate(4);
        if(request('search')){
            $word = request('search');
            // dd($word);
            $items = DB::table('kwt_events')->where('title', 'LIKE', '%'.$word."%")->paginate(4);
            $items->appends(request()->all());
            return view('kwt.index',[
                "title" => "KWT",
                "active" => "kwt",
                "items" => $items
            ]);
        }
        return view('kwt.index',[
            "title" => "KWT",
            "active" => "kwt",
            "items" => $items
        ]);
    }

    public function organisasi(){
        $items = DB::table('kwt_organisasis')->get();
        $counter = 0;
        return view('kwt.organisasi',[
            "title" => "KWT",
            "active" => "kwt",
            "items" => $items,
            "counter" => $counter
        ]);
    }

    public function detail_event(kwt_event $kwt_event){
        // dd($kwt_event);
        return view('kwt.detail',[
            "title" => 'Tanaman TOGA',
            "active" => 'TOGA',
            "item" => $kwt_event
        ]);
    }
}
