<?php

namespace App\Http\Controllers;

use App\Models\Psb;
use Illuminate\Http\Request;

class PsbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.psb.psb_online');
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
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function show(Psb $psb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function edit(Psb $psb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psb $psb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psb $psb)
    {
        //
    }
}
