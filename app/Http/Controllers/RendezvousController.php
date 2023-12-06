<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rendezvous;
use App\Models\Docteur;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rendezvous = Rendezvous::all();
        return view('Rendezvous.liste', compact('rendezvous'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $docteur = Docteur::all();
        return view('Rendezvous.ajouter', compact('docteur'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'telephone'=> 'required',
            'adresse'=> 'required',
            'date_rdv'=> 'required',
            'heure_rdv'=> 'required',
            'statut_rdv'=> 'required',
            'motif_rdv'=> 'required',
            'docteurs_id'=> 'required',

        ]);


        $rendezvous = new Rendezvous();
        $rendezvous->nom = $request->nom;
        $rendezvous->prenom = $request->prenom;
        $rendezvous->adresse = $request->adresse;
        $rendezvous->telephone = $request->telephone;
        $rendezvous->date_rdv = $request->date_rdv;
        $rendezvous->heure_rdv = $request->heure_rdv;
        $rendezvous->statut_rdv = $request->statut_rdv;
        $rendezvous->motif_rdv = $request->motif_rdv;
        $rendezvous->docteurs_id = $request->docteurs_id;
        $rendezvous->save();

        return redirect()->route('rendezvous.index')->with('status', 'Un rendezvous a  été ajouté avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rendezvous = Rendezvous::find($id);
        return view('Rendezvous.details',compact('rendezvous'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rendezvous = Rendezvous::all();

        return view('Rendezvous.modifier');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rendezvous = Rendezvous::find($id);

        $rendezvous->update([
            'nom'=> $request-> nom,
            'prenom'=> $request-> prenom,
            'telephone'=> $request-> telephone,
            'date_rdv'=> $request-> date_rdv,
            'adresse'=> $request-> adresse,
            'heure_rdv'=> $request-> heure_rdv,
            'statut_rdv'=> $request-> statut_rdv,
            'motif_rdv'=> $request-> motif_rdv,
            'docteurs_id'=> $request-> docteurs_id,

        ]);

        return redirect()->route('rendezvous.index')->with('status', 'Un rendezvous a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->delete();
            return redirect()->route('rendezvous.index')->with('status', 'Un rendezvous a  été supprimé avec succes.');
    }
}


