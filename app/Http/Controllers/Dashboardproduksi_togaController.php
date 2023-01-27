<?php

namespace App\Http\Controllers;

use App\Models\produksi_toga;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produksi_toga  $produksi_toga
     * @return \Illuminate\Http\Response
     */
    public function show(produksi_toga $produksi_toga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produksi_toga  $produksi_toga
     * @return \Illuminate\Http\Response
     */
    public function edit(produksi_toga $produksi_toga)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produksi_toga  $produksi_toga
     * @return \Illuminate\Http\Response
     */
    public function destroy(produksi_toga $produksi_toga)
    {
        //
    }
}
