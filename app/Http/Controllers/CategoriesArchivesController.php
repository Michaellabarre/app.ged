<?php

namespace App\Http\Controllers;

use App\Categories_archives;
use Illuminate\Http\Request;

class CategoriesArchivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function index()
    {
        return view('archives.catArchives');
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
     * @param  \App\Categories_archives  $categories_archives
     * @return \Illuminate\Http\Response
     */
    public function show(Categories_archives $categories_archives)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories_archives  $categories_archives
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories_archives $categories_archives)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories_archives  $categories_archives
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories_archives $categories_archives)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories_archives  $categories_archives
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories_archives $categories_archives)
    {
        //
    }
}
