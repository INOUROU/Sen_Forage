<?php

namespace App\Http\Controllers;

use App\Gestionnaire;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class GestionnaireController extends Controller
{
      public function list(Request $request)
   {
       $gestionnaires=Gestionnaire::with('user')->get();
       return Datatables::of($gestionnaires)->make(true);
   }
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
        return view('gestionnaires.index');
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* $village_id=$request->input('village');
        $village=\App\Village::find($village_id); */

       /*  return view('clients.create',compact('village')); */
       return view('gestionnaires.create');
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
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestionnaire $gestionnaire)
    {
        //
    }
}
