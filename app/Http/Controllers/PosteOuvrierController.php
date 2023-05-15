<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Ouvrier;
use App\Models\Service;
use App\Models\PosteOuvrier;
use Illuminate\Http\Request;
use App\Http\Requests\StorePosteOuvrierRequest;
use App\Http\Requests\UpdatePosteOuvrierRequest;

class PosteOuvrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posteOuvriers=PosteOuvrier::with('devi','ouvrier','service')->get();
        return view('main.showPosteOuvriers',compact('posteOuvriers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $devis=Devi::all();
        $ouvriers=Ouvrier::all();
        $services=Service::all();

        return view('main.createPosteOuvrier',compact('devis','ouvriers','services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'salaire'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
            'poste_ouvrier'=>'required',
            'ouvrier_id'=>'required|exists:ouvriers,id',
            'devi_id'=>'required|exists:devis,id',
            'service_id'=>'required|exists:services,id',
            'type'=>'required',
        ]);

        $posteOuvrier=new PosteOuvrier();
        $posteOuvrier->salaire=$request->input('salaire');
        $posteOuvrier->date_debut=$request->input('date_debut');
        $posteOuvrier->date_fin=$request->input('date_fin');
        $posteOuvrier->poste_ouvrier=$request->input('poste_ouvrier');
        $posteOuvrier->ouvrier_id=$request->input('ouvrier_id');
        $posteOuvrier->devi_id=$request->input('devi_id');
        $posteOuvrier->service_id=$request->input('service_id');
        $posteOuvrier->type=$request->input('type');
        $posteOuvrier->save();
        return redirect()->route('posteOuvrier.index')->with(['success'=>'posteOuvrier ajouter']);


    }

    /**
     * Display the specified resource.
     */
    public function show(PosteOuvrier $posteOuvrier)
    {
        return view('main.showPosteOuvrier',compact('posteOuvrier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PosteOuvrier $posteOuvrier)
    {
        $devis=Devi::all();
        $ouvriers=Ouvrier::all();
        $services=Service::all();
        return view('main.showPosteOuvrier',compact('posteOuvrier','devis','ouvriers','services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PosteOuvrier $posteOuvrier)
    {
        $request->validate([
            'salaire'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
            'poste_ouvrier'=>'required',
            'ouvrier_id'=>'required|exists:ouvriers,id',
            'devi_id'=>'required|exists:devis,id',
            'service_id'=>'required|exists:services,id',
            'type'=>'required',
        ]);
        $posteOuvrier->salaire=$request->input('salaire');
        $posteOuvrier->date_debut=$request->input('date_debut');
        $posteOuvrier->date_fin=$request->input('date_fin');
        $posteOuvrier->poste_ouvrier=$request->input('poste_ouvrier');
        $posteOuvrier->ouvrier_id=$request->input('ouvrier_id');
        $posteOuvrier->devi_id=$request->input('devi_id');
        $posteOuvrier->service_id=$request->input('service_id');
        $posteOuvrier->type=$request->input('type');
        $posteOuvrier->update();
        return redirect()->route('posteOuvrier.index')->with(['success'=>'posteOuvrier modifier']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PosteOuvrier $posteOuvrier)
    {
        //
        $posteOuvrier->delete();
        return redirect()->route('posteOuvrier.index')->with(['success'=>'posteOuvrier supprimer']);
    }
}
