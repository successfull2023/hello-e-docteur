<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\docteur;
use Illuminate\Http\Request;

class DocteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $docteurs = docteur::all();
        return view('Docteur.liste', compact('docteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return view('Docteur.ajouter');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // docteur::create([
        //     'nom'=> $request-> nom,
        //     'premon'=> $request-> prenom,
        //     'date_naissance'=> $request-> date_naissance,
        //     'adresse'=> $request-> adresse,
        //     'sexe'=> $request-> sexe,
        //     'specialite'=> $request-> specialite,
        //     'telephone'=> $request-> telephone,

        // ]);

        $docteurs = new docteur();
        $docteurs->nom = $request->nom;
        $docteurs->prenom = $request->prenom;
        $docteurs->date_naissance = $request->date_naissance;
        $docteurs->adresse = $request->adresse;
        $docteurs->sexe = $request->sexe;
        $docteurs->specialite = $request->specialite;
        $docteurs->telephone = $request->telephone;
        $docteurs->photo = $request->photo->store('photo','public');

        $docteurs->save();


        return redirect()->route('docteur.index')->with('status', 'Un docteur a  été ajouté avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $docteurs = docteur::find($id);
        return view('Docteur.details',compact('docteurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $docteurs = docteur::find($id);

        return view('Docteur.modifier',compact('docteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docteurs = docteur::find($id);

        $docteurs->update([
            'nom'=> $request-> nom,
            'prenom'=> $request-> prenom,
            'date_naissance'=> $request-> date_naissance,
            'adresse'=> $request-> adresse,
            'sexe'=> $request-> sexe,
            'specialite'=> $request-> specialite,
            'telephone'=> $request-> telephone,
            'photo'=> $request-> photo,
        ]);

        return redirect()->route('docteur.index')->with('status', 'Un docteur a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docteurs = docteur::find($id);
            $docteurs->delete();
            return redirect()->route('docteur.index')->with('status', 'Un docteur a  été supprimé avec succes.');
    }
}

