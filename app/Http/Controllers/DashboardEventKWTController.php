<?php

namespace App\Http\Controllers;

use App\Models\kwt_event;
use Illuminate\Http\Request;

class DashboardEventKWTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $active => kwt_event;
        $items = kwt_event::latest()->paginate(10);
        return view('dashboard.db_event_kwt.index', [
            'title' => 'Event KWT',
            'active' => 'dashboard/kwt_event',
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
     * @param  \App\Models\kwt_event  $kwt_event
     * @return \Illuminate\Http\Response
     */
    public function show(kwt_event $kwt_event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kwt_event  $kwt_event
     * @return \Illuminate\Http\Response
     */
    public function edit(kwt_event $kwt_event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kwt_event  $kwt_event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kwt_event $kwt_event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kwt_event  $kwt_event
     * @return \Illuminate\Http\Response
     */
    public function destroy(kwt_event $kwt_event)
    {
        //
    }
}
