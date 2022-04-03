<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $joueur = Joueur::all();
        return view("back/joueur/index",compact("joueur"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        $equipe =  Equipe::all();
        return view("back/joueur/create",compact("role","equipe"));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $joueur = new Joueur;
        $role = Role::find($request->role);
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "telephone"=>"required",
            "email"=>"required|email",
            "genre"=>"required",
            "origine"=>"required",
            "equipe"=>"required",
            "role"=>"required"
        ]);


        if ($role->joueur->where('equipe_id', $request->equipe)->count() < intval($role->max)) {
            # code...
            $joueur->nom = $request->nom;
            $joueur->prenom = $request->prenom;
            $joueur->age = $request->age;
            $joueur->telephone = $request->telephone;
            $joueur->email = $request->email;
            $joueur->genre = $request->genre;
            $joueur->origine = $request->origine;
            $joueur->equipe_id = $request->equipe;
            $joueur->role_id = $request->role;
            $joueur->save();
            return redirect()->route("joueur.index")->with("create","sa a bien été crée");
        }else{
            return redirect()->back()->with("create","sa na pas été créé il n'y a plus de place pour se post");
        }
        
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $joueur = Joueur::find($id);
        return view("back/joueur/show",compact("joueur"));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $joueur = Joueur::find($id);
        $equipe = Equipe::all();
        $role = Role::all();
        return view("back/joueur/edit",compact("joueur","equipe","role"));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $joueur = Joueur::find($id);
        $role = Role::find($id);
        
        if ($role->joueur->where('equipe_id', $request->equipe)->count() < intval($role->max)){
            $joueur->nom = $request->nom;
            $joueur->prenom = $request->prenom;
            $joueur->age = $request->age;
            $joueur->telephone = $request->telephone;
            $joueur->email = $request->email;
            $joueur->genre = $request->genre;
            $joueur->origine = $request->origine;
            $joueur->equipe_id = $request->equipe;
            $joueur->save();
        $joueur->role_id = $request->role;
        $role->save();
        $joueur->save();
        return redirect()->route("joueur.index")->with("edit","sa a bien été modifier");
    }else {
        return redirect()->back()->with("edit","sa na pas été modifier il n'y a plus de place pour se post");
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $joueur = Joueur::find($id);
        $joueur->delete();
        return redirect()->back()->with("destroy","sa a bien été suprimer");
    }
}
