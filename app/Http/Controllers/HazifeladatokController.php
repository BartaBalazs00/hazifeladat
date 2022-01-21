<?php

namespace App\Http\Controllers;

use App\Models\hazifeladatok;
use Illuminate\Http\Request;

class HazifeladatokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hazifeladatok = hazifeladatok::orderBy('id')->get();
        return view('hazifeladatok.hazifeladatok', ['hazifeladatok'=> $hazifeladatok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hazifeladatok.createhazifeladat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['url']);
        $hazifeladat = new hazifeladatok();
        $hazifeladat->fill($adatok);
        $hazifeladat->szoveges = "";
        $hazifeladat->pontszam = -1;
        $hazifeladat->save();
        return redirect()->route('hazifeladatok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hazifeladatok  $hazifeladatok
     * @return \Illuminate\Http\Response
     */
    public function show(hazifeladatok $hazifeladatok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hazifeladatok  $hazifeladatok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hazifeladat = hazifeladatok::find($id);
        return view('hazifeladatok.edithazifeladat', ['hazifeladat' => $hazifeladat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hazifeladatok  $hazifeladatok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            'szoveges' => 'required',
            'pontszam' => 'required'
        ]);
        $hazifeladat = hazifeladatok::find($id);
        $hazifeladat->szoveges = $request->input("szoveges");
        $hazifeladat->pontszam = $request->input("pontszam");
        $hazifeladat->save();
        return redirect()->route('hazifeladatok.index', $hazifeladat->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hazifeladatok  $hazifeladatok
     * @return \Illuminate\Http\Response
     */
    public function destroy(hazifeladatok $hazifeladatok)
    {
        $hazifeladatok->delete();
        return redirect()->route('hazifeladatok.index');
    }
}
