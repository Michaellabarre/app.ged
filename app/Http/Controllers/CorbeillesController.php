<?php

namespace App\Http\Controllers;

use App\Corbeilles;
use Illuminate\Http\Request;

class CorbeillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function corb()
    {
        return view('corbeilles.corbeilles');
        //
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
     * @param  \App\Corbeilles  $corbeilles
     * @return \Illuminate\Http\Response
     */
    public function show(Corbeilles $corbeilles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corbeilles  $corbeilles
     * @return \Illuminate\Http\Response
     */
    public function edit(Corbeilles $corbeilles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corbeilles  $corbeilles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corbeilles $corbeilles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corbeilles  $corbeilles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corbeilles $corbeilles)
    {
        //
    }
}
