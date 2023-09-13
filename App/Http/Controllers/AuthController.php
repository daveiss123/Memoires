<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // public function register(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nom' => ['required', 'string', 'max:255'],
    //         'prenom' => ['required', 'string', 'max:255'],
    //         'matricule' => ['string', 'max:255'],
    //         'date_de_naissance' => ['date', 'max:255'],
    //         'role_id' => ['integer'],
    //         'filiere_id' => ['integer'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'mot_de_passe' => ['required', 'string', 'min:8', 'confirmed'],
    //         'mot_de_passe_confirme' => ['date', 'max:255'],
    //     ]);

    //     $user = User::create([
    //         'nom' => $validatedData['nom'],
    //         'email' => $validatedData['email'],
    //         'mot_de_passe' => Hash::make($validatedData['mot_de_passe']),
    //     ]);

    //     Auth::login($user);

    //     return redirect('/');
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
