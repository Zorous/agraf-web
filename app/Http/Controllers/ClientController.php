<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients=Client::all();
        return view('main.showClients')->with(['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('main.createClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|max:10',
            'montant' => 'required',
            'email' => 'required',
            
            
        ]);

        $client=new Client();
        $client->nom=$request->input('nom');
        $client->prenom=$request->input('prenom');
        $client->telephone=$request->input('telephone');
        $client->montant=$request->input('montant');
        $client->email=$request->input('email');
        $client->save();
        
        return redirect()->route('clients.index')->with(['success'=>'client ajouter']);
        /*return redirect('/');*/
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return view('main.showClient')->with(['clients'=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        return view('main.editClient')->with(['clients'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|max:10',
            'montant' => 'required',
            'email' => 'required|email',
            
            
        ]);
        $client1=Client::findOrFail($client);
        $client1->nom=$request->get('nom');
        $client1->prenom=$request->get('prenom');
        $client1->telephone=$request->get('telephone');
        $client1->montant=$request->get('montant');
        $client1->email=$request->get('email');
        $client1->update();

        

        return redirect()->route('clients.index')->with(['success'=>'client modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client1=Client::findOrFail($client);
        $client1->delete();
        return redirect()->route('clients.index')->with(['success'=>'client supprime']);
    }
}
