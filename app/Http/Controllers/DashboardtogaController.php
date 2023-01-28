<?php

namespace App\Http\Controllers;

use App\Models\toga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardtogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = toga::latest()->paginate(10);
        if(request('search')){
            $word = request('search');
            $items = DB::table('togas')->where('name','LIKE','%'.$word."%")->paginate(10);
            $items->appends(request()->all());
            return view('dashboard.db_toga.index',[
                'title' => 'TOGA',
                'active' => 'dashboard/toga',
                'items' => $items,
            ]);

        }
        return view('dashboard.db_toga.index', [
            'title' => 'TOGA',
            'active' => 'dashboard/toga',
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
        return view('dashboard.db_toga.create',[
            'title' => 'TOGA',
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
        // $test = $request->image;
        // dd($test);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'latin_name' => 'max:255',
            'image' => 'required|file',
            'body' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // dd($validatedData);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('toga-images');
        }

        toga::create($validatedData);
        return redirect('dashboard/toga')->with('success', 'Sukses menambahkan data daftar TOGA!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\toga  $toga
     * @return \Illuminate\Http\Response
     */
    public function show(toga $toga)
    {
        return view('dashboard.db_toga.show',[
            'title' => 'TOGA',
            'items' => $toga
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\toga  $toga
     * @return \Illuminate\Http\Response
     */
    public function edit(toga $toga)
    {
        return view('dashboard.db_toga.edit',[
            'title' => 'TOGA',
            'items' => $toga
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\toga  $toga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, toga $toga)
    {
        // dd($request->name);
        $rules = [
            'name' => 'required|max:255',
            'latin_name' => 'max:255',
            // 'image' => 'required|file',
            'body' => 'required'
        ];
        $validatedData = $request->validate($rules);
        // $cek = 0;
        if($request->file('image')){
            // $cek = 1;
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('toga-images');
        }
        else{
            $validatedData['image'] = $request->oldImage;
        }
        // dd($cek);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // dd($validatedData);
        toga::where('id',$toga->id)->update($validatedData);
        return redirect('dashboard/toga')->with('success', 'Data TOGA berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\toga  $toga
     * @return \Illuminate\Http\Response
     */
    public function destroy(toga $toga)
    {
        Storage::delete($toga->image);
        toga::destroy($toga->id);
        return redirect('dashboard/toga')->with('success', 'Data TOGA berhasil dihapus!');
    }
}
