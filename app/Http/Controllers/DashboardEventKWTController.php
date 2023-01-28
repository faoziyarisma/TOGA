<?php

namespace App\Http\Controllers;

use App\Models\kwt_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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
        if(request('search_name')){
            $word = request('search_name');
            // dd($word);
            $items = DB::table('kwt_events')->where('title','LIKE','%'.$word."%")->paginate(10);
            // dd($items);
            $items->appends(request()->all());
            return view('dashboard.db_event_kwt.index',[
                'title' => 'Event KWT',
                'active' => 'dashboard/kwt_event',
                'items' => $items,
            ]);
        }
        if(request('search_date')){
            $date = request('search_date');
            // dd($date);
            $items = DB::table('kwt_events')->where('waktu','=',$date)->paginate(10);
            // dd($items);
            $items->appends(request()->all());
            return view('dashboard.db_event_kwt.index',[
                'title' => 'Event KWT',
                'active' => 'dashboard/kwt_event',
                'items' => $items,
            ]);
        }

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
        return view('dashboard.db_event_kwt.create',[
            'title' => 'Event KWT',
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
            'title' => 'required|max:255',
            'waktu' => 'required|date',
            'image' => 'required|file',
            'body' => 'required'
        ]);

        // dd($validatedData);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('event-images');
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        kwt_event::create($validatedData);
        return redirect('dashboard/kwt_event')->with('success', 'Sukses menambahkan data kegiatan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kwt_event  $kwt_event
     * @return \Illuminate\Http\Response
     */
    public function show(kwt_event $kwt_event)
    {
        return view('dashboard.db_event_kwt.show',[
            'title' => 'Event KWT',
            'items' => $kwt_event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kwt_event  $kwt_event
     * @return \Illuminate\Http\Response
     */
    public function edit(kwt_event $kwt_event)
    {
        return view('dashboard.db_event_kwt.edit',[
            'title' => 'Event KWT',
            'items' => $kwt_event,
        ]);
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
        // dd($request->oldImage);
        $rules = [
            'title' => 'required|max:255',
            'waktu' => 'required|date',
            // 'image' => 'required|file',
            'body' => 'required'
        ];

        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('event-images');
        }
        else{
            $validatedData['image'] = $request->oldImage;
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // dd($validatedData);

        $kwt_event::where('id',$kwt_event->id)->update($validatedData);
        return redirect('dashboard/kwt_event')->with('success', 'Data Kegiatan berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kwt_event  $kwt_event
     * @return \Illuminate\Http\Response
     */
    public function destroy(kwt_event $kwt_event)
    {
        Storage::delete($kwt_event->image);
        kwt_event::destroy($kwt_event->id);
        return redirect('dashboard/kwt_event')->with('success', 'Data kegiatan berhasil dihapus!');
    }

    public static function convert_date(string $date){
        $conv_date = Carbon::parse($date)->locale('id')->isoFormat('LL');
        return $conv_date;
    }
}
