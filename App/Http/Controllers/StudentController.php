<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   
        public function index()
        {
            return view('student.dashboard');
        }
    
        public function create()
        {
            return view('student.memoires.create');
        }
    
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'titre' => ['required', 'string', 'max:255'],
                'fichier' => ['required', 'file', 'mimes:pdf'],
            ]);
    
            $memoire = new Memoire;
            $memoire->titre = $validatedData['titre'];
            $memoire->fichier = $request->file('fichier')->store('memoires');
            $memoire->save();
    
            return redirect()->route('student.dashboard');
        }
    
        public function show(Memoire $memoire)
        {
            return view('memoires.show', compact('memoire'));
        }
    
}
