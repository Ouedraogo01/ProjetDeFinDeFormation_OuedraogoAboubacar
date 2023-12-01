<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class PostController extends Controller
{
    public function liste_post()
    {
        $posts = Post::all();
        $tags = Tag::all();
        return view('post.post', compact('tags', 'posts'));
    }

    public function ajouterPost_post()
    {
        $tags = Tag::all();
        $posts = Post::all();

        return view('post.ajouterPost', compact('tags', 'posts'));
    }

    public function ajouterPost_post_traitement(Request $request)
    {

        $post = new Post();
        $post->titre = $request->titre;
        $post->content = $request->content;
        $post->save();

        $tags = $request->tags;

        $post->tags()->attach($tags);

        return redirect('/post')->with('status', 'Le post a bien été ajouté avec succes.');
    }

    public function updatePost_post($id)
    {
        $posts = Post::find($id);
        $tags = Tag::all();

        return view('post.updatePost', compact('tags', 'posts'));
    }

    public function updatePost_post_traitement(Request $request)
    {

        $post = Post::find($request->id);

        $post->titre = $request->input('titre');
        $post->content = $request->input('content');
        $post->update();

        return redirect('/post')->with('status', 'Le post a bien été modifier avec succes.');

    }

    public function deletePost_post($id)
    {
        $posts = Post::find($id);
        $posts->delete();

        return redirect('/post')->with('status', 'Le post a bien été supprimé avec succes.');
    }
}