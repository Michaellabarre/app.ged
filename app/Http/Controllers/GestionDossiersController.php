<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 10/07/2018
 * Time: 16:56
 */

namespace App\Http\Controllers;


class GestionDossiersController

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  addDoc()
    {
        return view('gestionDossiers.addDossiers');
    }

    public function  showDoc()
    {
        return view('gestionDossiers.showDossiers');
    }
    public function index()
    {
        return view('gestionDossiers.gestionDossiers');
    }
    public function  histo()
    {
        return view('historiques.historique');
    }
    public function  consul()
    {
        return view('gestionDossiers.consulDossiers');
    }
    public function  expo()
    {
        return view('gestionDossiers.exportDossiers');
    }
    public function  depl()
    {
        return view('gestionDossiers.deplDossiers');
    }
    public function  impo()
    {
        return view('gestionDossiers.imporDossiers');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
