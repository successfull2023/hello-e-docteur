<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function accueil()
    {
        return view('Auth');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        return view('Auth')->with('status', 'identifiant ou mot de passe incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return view('Auth');
    }

    public function dashboard()
    {

        return view ('dashboard');

    }
}
