<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    // public function store(Request $request)
    // {
    //     //
    // }

    public function store(Request $request)
   {
       //validation d’une requete avant enregistreent des données
       $this->validate(
           $request, [
               'nom' => 'required|string|max:50',
               'prenom' => 'required|string|max:50',
               'email' => 'required|email|max:255|unique:users,email',
               'password' => 'required|string|max:50',
           ]
       );
       return view('clients.index');
      
   }



    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}


