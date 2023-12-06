<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Specialites;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $specialite = Specialites::all();
        return view('Specialite.liste', compact('specialite'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return view('Specialite.ajouter');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'specialite'=> 'required',
            'image'=>  'required',

        ]);


        $specialite = new Specialites();
        $specialite->specialite = $request->specialite;
        $specialite->image = $request->image->store('photo','public');

        $specialite->save();


        return redirect()->route('specialite.index')->with('status', 'Une specialite a  été ajouté avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $specialite = Specialites::find($id);
        return view('specialite.details',compact('specialite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $specialite = Specialites::all();

        return view('specialite.modifier', compact('specialite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $specialite = Specialites::find($id);

        $specialite->update([
            'specialite'=> $request-> specialite,
            'image'=> $request-> image,

        ]);

        return redirect()->route('specialite.index')->with('status', 'Un specialite a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $specialite = Specialites::find($id);
            $specialite->delete();
            return redirect()->route('specialite.index')->with('status', 'Un specialite a  été supprimé avec succes.');
    }
}

