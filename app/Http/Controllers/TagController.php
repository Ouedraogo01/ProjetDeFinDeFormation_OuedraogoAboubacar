<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function liste_tag()
    {
        $tags = Tag::all();
        return view('tag.tag', compact('tags'));
    }

    public function ajouterTag_tag()
    {
        $tags = Tag::all();

        return view('tag.ajouterTag', compact('tags'));
    }

    public function ajouterTag_tag_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $tag = new Tag();
        $tag->nom = $request->nom;

        $tag->save();

        return redirect('/tag')->with('status', 'Le tag a bien été ajouté avec succes.');
    }

    public function updateTag_tag($id)
    {
        $tags = Tag::find($id);

        return view('tag.updateTag', compact('tags'));
    }

    public function updateTag_tag_traitement(Request $request)
    {

        $tags = Tag::find($request->id);

        $tags->nom = $request->input('nom');
        $tags->update();

        return redirect('/tag')->with('status', 'Le tag a bien été modifier avec succes.');

    }

    public function deleteTag_tag($id)
    {
        $tags = Tag::find($id);
        $tags->delete();

        return redirect('/tag')->with('status', 'Le tag a bien été supprimé avec succes.');
    }
}