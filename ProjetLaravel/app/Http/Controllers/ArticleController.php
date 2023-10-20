<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->get();
        return view("welcome")->with("articles", $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("articles.edit");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            'description' => 'bail|required',
            'emplacement' =>  'bail|required|string|max:30|min:5',

        ]);

        $article = Article::create([
            "name" => $request->name,
            "description" => $request->description,
            "emplacement" => $request->emplacement,
            "idOrganisateur" => $request->user()->id,
        ]);

        $article->save();
        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("articles.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view("articles.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $rules = [
            'name' => 'bail|required|string|max:255',
            "description" => 'bail|required',
            "emplacement" => 'bail|required|string|max:30|min:5'
        ];
    
        $this->validate($request, $rules);
    
        // 3. On met à jour les informations du Post
        $post->update([
            "name" => $request->title,
            "description" => $request->content,
            "emplacement" => $request->emplacement,
        ]);
    
        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("articles.show", $post));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        // On les informations du $post de la table "posts"
        $article->delete();

        // Redirection route "posts.index"
        return redirect(route('articles.index'));
    }
}
