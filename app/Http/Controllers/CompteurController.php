<?php

namespace App\Http\Controllers;

use App\Compteur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CompteurController extends Controller
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
        $compteurs = Compteur::all()->paginate(10);
        return view('compteurs.index',compact('compteurs'));  
      }

        public function listfree(){
            $compteurs=Compteur::doesntHave('abonnement')->get();
            return DataTables::of($compteurs)->make(true);
     }
     public function list()
    {
        $compteurs=Compteur::with('abonnement')->get();
        return Datatables::of($compteurs)->make(true);
    }

   /*  public function list(Request $request)
   {
       $compteurs=Compteur::with('user')->get();
       return Datatables::of($compteurs)->make(true);
   }
 */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compteurs.create',compact('compteurs'));  
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
     * @param  \App\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function show(Compteur $compteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Compteur $compteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compteur $compteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compteur $compteur)
    {
        //
    }
}
