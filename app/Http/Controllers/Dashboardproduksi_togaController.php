<?php

namespace App\Http\Controllers;

use App\Models\produksi_toga;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class Dashboardproduksi_togaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = produksi_toga::latest()->paginate(10);
        if(request('search')){
            $word = request('search');
            $items = DB::table('produksi_togas')->where('name', 'LIKE', '%'.$word."%")->paginate(10);
            $items->appends(request()->all());
            return view('dashboard.db_produksi_toga.index',[
                'title' => 'Produksi TOGA',
                'active' => 'dashboard/produksi_toga',
                'items' => $items,
            ]);
        }
        return view('dashboard.db_produksi_toga.index', [
            'title' => 'Produksi TOGA',
            'active' => 'dashboard/produksi_toga',
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.db_produksi_toga.create',[
            'title' => 'Produksi TOGA',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $test = $request->alat_bahan;
        // dd($test);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'file|required',
            'deskripsi' => 'required',
            'alat_bahan' => '',
            'proses' => '',
            'reaksi_kimia' => '',
            'potensi' => ''
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 200);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('produksitoga-images');
        }
        // dd($validatedData);
        produksi_toga::create($validatedData);
        return redirect('dashboard/produksi_toga')->with('success', 'Sukses menambahkan data produksi TOGA!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produksi_toga  $produksi_toga
     * @return \Illuminate\Http\Response
     */
    public function show(produksi_toga $produksi_toga)
    {
        return view('dashboard.db_produksi_toga.show',[
            'title' => 'Produksi TOGA',
            'items' => $produksi_toga
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produksi_toga  $produksi_toga
     * @return \Illuminate\Http\Response
     */
    public function edit(produksi_toga $produksi_toga)
    {
        return view('dashboard.db_produksi_toga.edit',[
            'title' => 'Produksi TOGA',
            'items' => $produksi_toga
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produksi_toga  $produksi_toga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produksi_toga $produksi_toga)
    {
        // dd($request->name);
        $rules = [
            'name' => 'required|max:255',
            'image' => 'file',
            'deskripsi' => 'required',
            'alat_bahan' => '',
            'proses' => '',
            'reaksi_kimia' => '',
            'potensi' => ''
        ];
        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('produksitoga-images');
        }
        else{
            $validatedData['image'] = $request->oldImage;
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 200);
        // dd($validatedData);
        produksi_toga::where('id',$produksi_toga->id)->update($validatedData);
        return redirect('dashboard/produksi_toga')->with('success', 'Data Produksi TOGA berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produksi_toga  $produksi_toga
     * @return \Illuminate\Http\Response
     */
    public function destroy(produksi_toga $produksi_toga)
    {
        Storage::delete($produksi_toga->image);
        produksi_toga::destroy($produksi_toga->id);
        return redirect('dashboard/produksi_toga')->with('success', 'Data produksi TOGA berhasil dihapus!');
    }
}
