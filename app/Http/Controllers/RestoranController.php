<?php

namespace App\Http\Controllers;

use App\restoran;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRestoranRequest;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restorans = Restoran::all();
        return view('restoran', compact('restorans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRestoranRequest $request)
    {
        Restoran::create($request->all());
        return redirect("restoran");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function show(restoran $restoran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function edit(restoran $restoran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restoran $restoran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function destroy(restoran $restoran)
    {
        //
    }
}
