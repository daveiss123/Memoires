<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoireController extends Controller
{
    
  
        public function index()
        {
            $memoires = Memoire::all();
    
            return view('admin.memoires.index', compact('memoires'));
        }
    
        public function create()
        {
            return view('admin.memoires.create');
        }
    
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'titre' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
            ]);
    
            $memoire = new Memoire;
            $memoire->titre = $validatedData['titre'];
            $memoire->description = $validatedData['description'];
            $memoire->save();
    
            return redirect()->route('admin.memoires.index');
        }
    
        public function edit(Memoire $memoire)
        {
            return view('admin.memoires.edit', compact('memoire'));
        }
    
        public function update(Request $request, Memoire $memoire)
        {
            $validatedData = $request->validate([
                'titre' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
            ]);
    
            $memoire->titre = $validatedData['titre'];
            $memoire->description = $validatedData['description'];
            $memoire->save();
    
            return redirect()->route('admin.memoires.index');
        }
    
        public function destroy(Memoire $memoire)
        {
            $memoire->delete();
    
            return redirect()->route('admin.memoires.index');
        }
    
        public function show(Memoire $memoire)
        {
            return view('memoires.show', compact('memoire'));
        }
  
    
}
