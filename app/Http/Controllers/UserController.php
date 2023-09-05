<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // funzione per il login
    public function login()
    {
        
        return view('auth.login');
        
    }
    // funzione per il form di registrazione utente
    public function create()
    {
        
        return view('auth.register');
        
    }
    // funzione per modifica dati utente
    public function edit()
    {
        
        return view('users.edit');
        
    }

    public function forgotPassword()
    {
        
        return view('auth.forgot-password');
        
    }
}
