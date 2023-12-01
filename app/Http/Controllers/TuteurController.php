<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuteur;

class TuteurController extends Controller
{
    public function liste_tuteur()
    {
        $tuteurs = Tuteur::all();
        return view('tuteur.tuteur', compact('tuteurs'));
    }

    public function ajouterTuteur_tuteur()
    {
        $tuteurs = Tuteur::all();

        return view('tuteur.ajouterTuteur', compact('tuteurs'));
    }

    public function ajouterTuteur_tuteur_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'profession' => 'required',
            'telephone' => 'required',
        ]);

        $tuteur = new Tuteur();
        $tuteur->nom = $request->nom;
        $tuteur->prenom = $request->prenom;
        $tuteur->profession = $request->profession;
        $tuteur->telephone = $request->telephone;

        $tuteur->save();

        return redirect('/tuteur')->with('status', 'Le tuteur a bien été ajouté avec succes.');
    }

    public function update_tuteur($id)
    {
        $tuteurs = Tuteur::find($id);

        return view('tuteur.update', compact('tuteurs'));
    }

    public function update_tuteur_traitement(Request $request)
    {

        $tuteur = Tuteur::find($request->id);

        $tuteur->nom = $request->input('nom');
        $tuteur->prenom = $request->input('prenom');
        $tuteur->profession = $request->input('profession');
        $tuteur->telephone = $request->input('telephone');
        $tuteur->update();

        return redirect('/tuteur')->with('status', 'Le tuteur a bien été modifier avec succes.');

    }

    public function delete_tuteur($id)
    {
        $tuteur = Tuteur::find($id);
        $tuteur->delete();

        return redirect('/tuteur')->with('status', 'Le tuteur a bien été supprimé avec succes.');
    }
}