<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    //
    public function index()
    {
        $titres = Titre::all();
        return view("/back/titres/all",compact("titres"));
    }
    public function create()
    {
        return view("/back/titres/create");
    }
    public function store(Request $request)
    {
        $titre = new Titre;
        $request->validate([
            'h1'=> 'required',
            'h2'=> 'required',
        ]); // store_validated_anchor;
        $titre->h1 = $request->h1;
        $titre->h2 = $request->h2;
        $titre->save(); // store_anchor
        return redirect()->route("titre.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $titre = Titre::find($id);
        return view("/back/titres/show",compact("titre"));
    }
    public function edit($id)
    {
        $titre = Titre::find($id);
        return view("/back/titres/edit",compact("titre"));
    }
    public function update($id, Request $request)
    {
        $titre = Titre::find($id);
        $request->validate([
            'h1'=> 'required',
            'h2'=> 'required',
        ]); // update_validated_anchor;
        $titre->h1 = $request->h1;
        $titre->h2 = $request->h2;
        $titre->save(); // update_anchor
        return redirect()->route("titre.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $titre = Titre::find($id);
        $titre->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
