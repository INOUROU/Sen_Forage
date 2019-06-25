<?php

namespace App\Http\Controllers;

use App\Administrateur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
class AdministrateurController extends Controller
{
    public function list(Request $request)
    {
        $administrateurs=Administrateur::with('user')->get();
        return Datatables::of($administrateurs)->make(true);
    }
      

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrateurs.index');
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
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show(Administrateur $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrateur $administrateur)
    {
        //
    }
}
