<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeControllers extends Controller
{
    //
    public function index(){
        $equipe = Equipe::all();
        return view("back/pages/equipe",compact("equipe"));
    }
    public function destroy($id){
        $equipe = Equipe::find($id);
        $equipe->delete();
        return redirect()->back()->with("destroy","sa a bien été suprimer");
    }

    public function edit($id){
        $equipe = Equipe::find($id);
        return view("back/pages/editequipe",compact("equipe"));
    }
    public function update($id, Request $request){
        $equipe = Equipe::find($id);
        $equipe->nom = $request->nom;
        $equipe->nombre = $request->nombre;
        $equipe->entraineur = $request->entraineur;
        $equipe->poste = $request->poste;
        $equipe->save();
        return redirect()->route("equipe.index")->with("edit","le changement a été fait");
    }
    public function create(){
        $equipe =  Equipe::all();
        return view("back/pages/createequipe",compact("equipe"));
    }
    public function store( Request $request){
        $equipe = new Equipe;
        $request->validate([
            "nom"=>"required",
            "nombre"=>"required|integer",
            "entraineur"=>"required",
            "poste"=>"required",
            
        ]);
        $equipe->nom = $request->nom;
        $equipe->nombre = $request->nombre;
        $equipe->entraineur= $request->entraineur;
        $equipe->poste= $request->poste;
       
        $equipe->save();
        return redirect()->route("equipe.index")->with("create","cela a bien été crée");

    }
}