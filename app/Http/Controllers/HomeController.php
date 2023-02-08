<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kwt_event;
use App\Models\kwt_organisasi;
use App\Models\jabatan;
use App\Models\produksi_toga;
use App\Models\toga;

class HomeController extends Controller
{
    public function index(){
        $items = kwt_event::latest()->paginate(2);
        return view('home',[
            "title" => "Home",
            "active" => "home",
            "items" => $items
        ]);
    }
}
