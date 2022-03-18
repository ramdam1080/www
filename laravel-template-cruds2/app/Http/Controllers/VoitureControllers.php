<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VoitureControllers extends Controller
{
    //
    public function index(){
        $voiture =  Voiture::all();
        return view("back/pages/voiture",compact("voiture"));
    }
    public function destroy($id){
        $voiture =  Voiture::find($id);
        $voiture->delete();
        return redirect()->back()->with("destroy","ces bien suprimmer");
    }
    public function edit($id){
        $voiture =  Voiture::find($id);
        return view("back/pages/editvoiture",compact("voiture"));
    }
    public function update($id, Request $request){
        $voiture =  Voiture::find($id);
        $voiture->marque = $request->marque;
        $voiture->anne = $request->anne;
        $voiture->couleur = $request->couleur;
        $voiture->prix= $request->prix;
        $voiture->reduc= $request->reduc;
        $voiture->save();
        return redirect()->route("voiture.index")->with("edit","cela a bien été changer");

    }
    public function create(){
        $voiture =  Voiture::all();
        return view("back/pages/createvoiture",compact("voiture"));
    }
    public function store( Request $request){
        $voiture = new Voiture;
        $request->validate([
            "marque"=>"required",
            "anne"=>"required",
            "couleur"=>"required",
            "prix"=>"required|integer",
            "reduc"=>"required|integer",
        ]);
        $voiture->marque = $request->marque;
        $voiture->anne = $request->anne;
        $voiture->couleur = $request->couleur;
        $voiture->prix= $request->prix;
        $voiture->reduc= $request->reduc;
        $voiture->save();
        return redirect()->route("voiture.index")->with("create","cela a bien été crée");

    }
}
