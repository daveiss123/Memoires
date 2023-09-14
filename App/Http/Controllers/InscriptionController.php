<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
   
        public function showRegistrationForm()
        {
            return view('inscription');
        }
    
        public function register(Request $request)
        {
            // Validation des données d'inscription
            $this->validate($request, [
                'nom' => ['required', 'string', 'max:255'],
                'prenom' => ['required', 'string', 'max:255'],
                'matricule' => ['string', 'max:255'],
                'date_de_naissance' => ['date'],
                'filiere_id' => ['integer'],
                'role_id' => ['integer'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mot_de_passe' => ['required', 'string', 'min:8'],
                'mot_de_passe_confirme' => ['required', 'string', 'min:8'],
                
            ]);

   
   
        
            // Création de l'utilisateur
            $user = User::create([
                'name' => $request->input('nom') . ' ' . $request->input('prenom'),
                'matricule' => $request->input('matricule'),
                'date_de_naissance' => $request->input('date_de_naissance'),
                'role_id' => $request->input('role_id'),
                'filiere_id' => $request->input('filiere_id'),
                'email' => $request->input('email'),
                'mot_de_passe' => Hash::make($request->input('mot_de_passe')),
            ]);
        
            // Connexion de l'utilisateur
            $this->guard()->login($user);
        
            // Redirection après l'inscription réussie
            return redirect($this->redirectPath());
        }
        
  
    
}
