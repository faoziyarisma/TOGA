<?php

namespace App\Http\Controllers;
use App\Models\produksi_toga;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class produksi_togaController extends Controller
{
    public function index(){
        $items = produksi_toga::latest()->paginate(4);
        if(request('search')){
            $word = request('search');
            // dd($word);
            $items = DB::table('produksi_togas')->where('name', 'LIKE', '%'.$word."%")->paginate(4);
            $items->appends(request()->all());
            return view('produksi_toga.index',[
                "title" => "Produksi KWT",
                "active" => "produksi_TOGA",
                "items" => $items
            ]);
        }
        return view('produksi_toga.index',[
            "title" => "Produksi KWT",
            "active" => "produksi_TOGA",
            "items" => $items
        ]);
    }

    public function detail_produksi_toga(produksi_toga $produksi_toga){
        // dd($produksi_toga);
        return view('produksi_toga.detail',[
            "title" => 'Tanaman TOGA',
            "active" => 'TOGA',
            "item" => $produksi_toga
        ]);
    }
}
