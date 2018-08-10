<?php

namespace App\Http\Controllers;

use App\Sous_categories;
use Illuminate\Http\Request;

class SousCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
return view('acceuil.test');
    }

    public function indey()
    {
        return view('corbeilles.yel');
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
     * @param  \App\Sous_categories  $sous_categories
     * @return \Illuminate\Http\Response
     */
    public function show(Sous_categories $sous_categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sous_categories  $sous_categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Sous_categories $sous_categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sous_categories  $sous_categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sous_categories $sous_categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sous_categories  $sous_categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sous_categories $sous_categories)
    {
        //
    }
}
