<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('etudiants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'cin' => 'required|string|max:30|unique:etudiants|regex:/^[A-Za-z0-9]+$/', // Autorise lettres et chiffres
            'cne' => 'required|string|max:30|unique:etudiants|regex:/^[A-Za-z0-9]+$/', // Autorise lettres et chiffres
            'email' => 'required|email|unique:etudiants',
            'rapport' => 'required|file|mimes:pdf|max:2048', // Le fichier rapport doit être un PDF et de taille inférieure à 2 Mo
        ]);

        if ($request->hasFile('rapport') && $request->file('rapport')->isValid()) {
           
            $rapportPath = $request->file('rapport')->store('rapports', 'public');

           
            Etudiant::create([
                'nom' => $request->input('nom'),
                'cin' => $request->input('cin'),
                'cne' => $request->input('cne'),
                'email' => $request->input('email'),
                'rapport' => $rapportPath, 
            ]);

            // Retourner une réponse, ici nous redirigeons vers une page de succès ou un autre endroit
            return redirect()->route('etudiants.index')->with('success', 'Étudiant créé avec succès!');
        } else {
            // Si le fichier n'est pas valide ou absent, retourner une erreur
            return back()->withErrors(['rapport' => 'Le fichier est invalide ou manquant.']);
        }
    }
}
