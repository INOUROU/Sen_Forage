<?php

namespace App\Http\Controllers;

use App\Abonnements;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AbonnementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }
    public function index()
    {
        return view('clients.index');
    }
    public function list(Request $request)
   {
       $clients=Client::with('user')->get();
       return Datatables::of($clients)->make(true);
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
     * @param  \App\Abonnements  $abonnements
     * @return \Illuminate\Http\Response
     */
    public function show(Abonnements $abonnements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abonnements  $abonnements
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonnements $abonnements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abonnements  $abonnements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonnements $abonnements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonnements  $abonnements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonnements $abonnements)
    {
        //
    }
}
