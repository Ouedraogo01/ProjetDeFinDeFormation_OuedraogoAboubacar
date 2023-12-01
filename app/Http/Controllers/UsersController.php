<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Nationalite;
use App\Models\GroupeSanguin;

class UsersController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        $etudiants = Etudiant::all();
        $tuteurs = Tuteur::all();
        $villes = Ville::all();
        $nationalites = Nationalite::all();
        $groupesanguins = GroupeSanguin::all();

        return view('etudiant.ajouter', compact('etudiants', 'tuteurs', 'villes', 'nationalites', 'groupesanguins'));
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'photo' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->tuteur_id = $request->tuteur_id;
        $etudiant->ville_id = $request->ville_id;
        $etudiant->nationalite_id = $request->nationalite_id;
        $etudiant->groupe_sanguin_id = $request->groupe_sanguin_id;


        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $etudiant->photo = $imageName;
        }


        $etudiant->save();

        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été ajouté avec succes.');
    }

    public function update_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        $tuteurs = Tuteur::all();
        $villes = Ville::all();
        $nationalites = Nationalite::all();
        $groupesanguins = GroupeSanguin::all();

        return view('etudiant.update', compact('etudiants', 'tuteurs', 'villes', 'nationalites', 'groupesanguins'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = Etudiant::find($request->id);

        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->classe = $request->input('classe');
        $etudiant->tuteur_id = $request->input('tuteur_id');
        $etudiant->ville_id = $request->input('ville_id');
        $etudiant->nationalite_id = $request->input('nationalite_id');
        $etudiant->groupe_sanguin_id = $request->input('groupe_sanguin_id');

        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('photo')) {

            $imagePath = $request->file('photo')->store('images', 'public');
            $etudiant->photo = $imagePath;
        }

        $etudiant->update();

        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifier avec succes.');

    }

    public function delete_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été supprimé avec succes.');
    }

}