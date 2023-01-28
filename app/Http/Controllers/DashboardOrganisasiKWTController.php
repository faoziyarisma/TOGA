<?php

namespace App\Http\Controllers;

use App\Models\kwt_organisasi;
use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardOrganisasiKWTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = kwt_organisasi::latest()->paginate(10);
        if(request('search')){
            $word = request('search');
            // dd($word);
            $items = DB::table('kwt_organisasis')->where('name','LIKE','%'.$word."%")->paginate(10);
            // dd($items);
            $items->appends(request()->all());
            return view('dashboard.db_organisasi_kwt.index',[
                "title" => "Organisasi KWT",
                // 'active' => 'dashboard/kwt_organisasi',
                'items' => $items,
            ]);
        }
        return view('dashboard.db_organisasi_kwt.index', [
            'title' => 'Organisasi KWT',
            // 'active' => 'dashboard/kwt_organisasi',
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
        return view('dashboard.db_organisasi_kwt.create',[
            'title' => 'Organisasi KWT',
            'jabatans' => jabatan::all(),
            // 'active' => 'dashboard/kwt_organisasi',
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
        // $name = $request->alamat;
        // dd($name);
        $validatedData = $request -> validate([
            'name' => 'required',
            'jabatan_id' => 'required',
            'alamat' => 'required'
        ]);
        // dd($validatedData);

        kwt_organisasi::create($validatedData);
        return redirect('dashboard/kwt_organisasi')->with('success', 'Sukses menambahkan anggota baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kwt_organisasi  $kwt_organisasi
     * @return \Illuminate\Http\Response
     */
    public function show(kwt_organisasi $kwt_organisasi)
    {
        return view('dashboard.db_organisasi_kwt.show',[
            'title' => 'Organisasi KWT',
            'items' => $kwt_organisasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kwt_organisasi  $kwt_organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(kwt_organisasi $kwt_organisasi)
    {
        return view('dashboard.db_organisasi_kwt.edit',[
            'title' => 'Organisasi KWT',
            'items' => $kwt_organisasi,
            'jabatans' => jabatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kwt_organisasi  $kwt_organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kwt_organisasi $kwt_organisasi)
    {
        $rules = [
            'name' => 'required',
            'jabatan_id' => 'required',
            'alamat' => 'required'
        ];
        $validatedData = $request->validate($rules);
        kwt_organisasi::where('id',$kwt_organisasi->id)->update($validatedData);
        return redirect('dashboard/kwt_organisasi')->with('success', 'Data Anggota berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kwt_organisasi  $kwt_organisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(kwt_organisasi $kwt_organisasi)
    {
        kwt_organisasi::destroy($kwt_organisasi->id);
        return redirect('/dashboard/kwt_organisasi')->with('success', 'Data Anggota berhasil dihapus!');
    }

    public static function convert_jabatan_id(string $jabatan_id){
        $data_jabatan = DB::table('jabatans')->where('id', '=', $jabatan_id)->get();
        $jabatan_name = collect($data_jabatan)->pluck('name')->implode('');
        // $conv_date = Carbon::parse($date)->locale('id')->isoFormat('LL');
        return $jabatan_name;
    }
}
