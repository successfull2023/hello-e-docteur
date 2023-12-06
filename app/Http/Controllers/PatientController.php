<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $patients = Patient::all();
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

        //  $patients->create([
            // 'nom'=> $request-> nom,
            // 'prenom'=> $request-> prenom,
            // 'age'=> $request-> age,
            // 'telephone'=> $request-> telephone,
            // 'sexe'=> $request-> sexe,
            // 'adresse'=> $request-> adresse,
            // 'groupe_sanguin'=> $request-> groupe_sanguin,
            // 'antecedant'=> $request-> antecedant,
            // 'derniere_consultattion'=> $request-> derniere_consultattion,
        //  ]);


        $patients = new Patient();
        $patients->nom = $request->nom;
        $patients->prenom = $request->prenom;
        $patients->age = $request->age;
        $patients->telephone = $request->telephone;
        $patients->sexe = $request->sexe;
        $patients->adresse = $request->adresse;
        $patients->group_sanguin = $request->group_sanguin;
        $patients->antecedant = $request->antecedant;
        $patients->derniere_consultation = $request->derniere_consultation;
        $patients->save();


        return redirect()->route('patient.index')->with('status', 'Un patient a  été ajouté avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patients = Patient::find($id);
        return view('Patient.details',compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patients = Patient::find($id);

        return view('Patient.modifier', compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patients = Patient::find($id);

        $patients->update([
            'nom'=> $request-> nom,
            'prenom'=> $request-> prenom,
            'age'=> $request-> age,
            'telephone'=> $request-> telephone,
            'sexe'=> $request-> sexe,
            'adresse'=> $request-> adresse,
            'group_sanguin'=> $request-> group_sanguin,
            'antecedant'=> $request-> antecedant,
            'derniere_consultation'=> $request-> derniere_consultation,
        ]);

        return redirect()->route('patient.index')->with('status', 'Un patient a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patients = Patient::find($id);
        $patients->delete();
            return redirect()->route('patient.index')->with('status', 'Un patient a  été supprimé avec succes.');
    }
}

