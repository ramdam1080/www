<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleControllers extends Controller
{
    //
    public function index(){
        $article = Article::all();
        return view("back/pages/article",compact("article"));
    }
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with("destroy","sa a bien été suprimer");
    }

    public function edit($id){
        $article = Article::find($id);
        return view("back/pages/editarticle",compact("article"));
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->date = $request->date;
        $article->save();
        return redirect()->route("article.index")->with("edit","le changement a été fait");
    }
    public function create(){
        $article =  Article::all();
        return view("back/pages/createarticle",compact("article"));
    }
    public function store( Request $request){
        $article = new Article;
        $request->validate([
            "nom"=>"required",
            "description"=>"required",
            "auteur"=>"required",
            "date"=>"required",
            
        ]);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->auteur= $request->auteur;
        $article->date= $request->date;
       
        $article->save();
        return redirect()->route("article.index")->with("create","cela a bien été crée");

    }
}
