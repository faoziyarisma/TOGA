<?php

namespace App\Http\Controllers;

use App\Models\toga;
use Illuminate\Http\Request;

class DashboardtogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
        return view('toga.index',[
            "title" => "Tanaman TOGA",
            "active" => "toga",
            
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
     * @param  \App\Models\toga  $toga
     * @return \Illuminate\Http\Response
     */
    public function show(toga $toga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\toga  $toga
     * @return \Illuminate\Http\Response
     */
    public function edit(toga $toga)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\toga  $toga
     * @return \Illuminate\Http\Response
     */
    public function destroy(toga $toga)
    {
        //
    }
}
