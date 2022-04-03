<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        // dd($user[0]->role);
        return view("back/pages/user",compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $role =Role::all();
        return view("back/pages/create/createuser",compact("role"));
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
        $user = new User;
        // $role =Role::all();
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required|integer",
            "email"=>"required|email",
            "mdp"=>"required",
            "date"=>"required|date",
            "genre"=>"required",
            "role_id"=>"required",
        ]);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $request->mdp;
        $user->dtn = $request->dtn;
        $user->genre = $request->genre;
        $user->role_id = $request->id;
        $user->save();
        return redirect()->route("user.index")->with("create","sa a bien été crée");
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
        $user = User::find($id);
        return view("back/pages/show/showuser",compact("user"));
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
        $user = User::find($id);
        $role = Role::all();
        return view("back/pages/edit/edituser",compact("user","role"));
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
        $user = User::find($id);
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required|integer",
            "email"=>"required|email",
            "mdp"=>"required",
            "date"=>"required|date",
            "genre"=>"required",
            "role_id"=>"required",
        ]);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $request->mdp;
        $user->dtn = $request->dtn;
        $user->genre = $request->genre;
        $user->role_id = $request->id;
        $user->save();
        return redirect()->route("user.index")->with("edit","sa a bien été crée");
        //
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
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("destroy","sa a bien été supprimer");
    }
}
