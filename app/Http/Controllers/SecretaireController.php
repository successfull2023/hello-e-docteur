<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $patients = patient::all();
        return view('Patient.liste', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return view('Patient.ajouter');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $patients->create([
            'nom'=> $request-> nom,
            'premon'=> $request-> prenom,
            'telephone'=> $request-> telephone,
            'sexe'=> $request-> sexe,
            'adresse'=> $request-> adresse,
            'groupe_sanguin'=> $request-> groupe_sanguin,
            'antecedant'=> $request-> antecedant,
            'derniere_consultattion'=> $request-> derniere_consultattion,
        ]);


        $patients = new patient();
        $patients->nom = $request->nom;
        $patients->prenom = $request->prenom;
        $patients->telephone = $request->telephone;
        $patients->sexe = $request->sexe;
        $patients->adresse = $request->adresse;
        $patients->groupe_sanguin = $request->groupe_sanguin;
        $patients->antecedant = $request->antecedant;
        $patients->derniere_consultattion = $request->derniere_consultattion;
        $patients->photo = $request->photo->store('photo','public');

        $patients->save();


        return redirect()->route('patients.index')->with('status', 'Un patient a  été ajouté avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patients = patient::find($id);
        return view('Patients.details',compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patientss = patient::all();

        return view('Patients.modifier');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patients = patient::find($id);

        $patients->update([
            'nom'=> $request-> nom,
            'premon'=> $request-> prenom,
            'telephone'=> $request-> telephone,
            'sexe'=> $request-> sexe,
            'adresse'=> $request-> adresse,
            'groupe_sanguin'=> $request-> groupe_sanguin,
            'antecedant'=> $request-> antecedant,
            'derniere_consultattion'=> $request-> derniere_consultattion,
        ]);

        return redirect()->route('patients.index')->with('status', 'Un patient a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patients = patient::find($id);
            $patients->delete();
            return redirect()->route('patient.index')->with('status', 'Un patient a  été supprimé avec succes.');
    }
}


