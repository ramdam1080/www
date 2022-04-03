<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipe = Equipe::all();
        $roles = Role::all();
        // dd($equipe[0]->joueur[0]->role);
        return view("back/equipe/index",compact("equipe","roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $equipe = Equipe::all();
        return view("back/equipe/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "nom"=>"required",
            "ville"=>"required",
            "pays"=>"required",
        ]);

        $equipe = new Equipe;
        $joueur = new Joueur;
        $role = new Role;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->save();
        // $joueur->nom = $request->joueur;
        // $joueur->prenom = $request->prenom;
        // $joueur->age = $request->age;
        // $joueur->telephone = $request->telephone;
        // $joueur->email = $request->email;
        // $joueur->genre = $request->genre;
        // $joueur->origine = $request->origine;
        // $joueur->equipe_id = $equipe->id;
        // $joueur->save();
        // $role->name = $request->role;
        // $joueur->role_id = $role->id;
        // $role->save();
        // $joueur->save();
        return redirect()->route("equipe.index")->with("create","sa a bien été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        //
        return view("back/equipe/show",compact("equipe"));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        //
        return view("back/equipe/edit",compact("equipe"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        //
        $request->validate([
            "nom"=>"required",
            "ville"=>"required",
            "pays"=>"required",
        ]);

        // $joueur = Joueur::find($id);
        // $role = Role::find($id);
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->save();
        // $joueur->nom = $request->nom;
        // $joueur->prenom = $request->prenom;
        // $joueur->age = $request->age;
        // $joueur->telephone = $request->telephone;
        // $joueur->email = $request->email;
        // $joueur->genre = $request->genre;
        // $joueur->origine = $request->origine;
        // $joueur->equipe_id = $equipe->id;
        // $joueur->save();
        // $role->name = $request->role;
        // $joueur->role_id = $role->id;
        // $role->save();
        // $joueur->save();
        return redirect()->route("equipe.index")->with("edit","sa a bien été crée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        //
        $equipe->delete();
        return redirect()->back()->with("destroy","sa a bien été suprimer");
    }
}
