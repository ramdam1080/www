<?php

namespace App\Http\Controllers;

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
        $user = User::all();
        return view("user",compact("user"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create/createuser");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required|integer",
            "naissance"=>"required|date",
            "email"=>"required|email",
            "password"=>"required",
            "album"=>"required|integer",
        ]);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->naissance = $request->naissance;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->album = $request->album;
        $user->save();
        return redirect()->route("user.index")->with("create","sa a bien été crée");
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view("show/showuser",compact("user"));
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("edit/edituser",compact("user"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required|integer",
            "naissance"=>"required|date",
            "email"=>"required|email",
            "password"=>"required",
            "album"=>"required|integer",
        ]);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->naissance = $request->naissance;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->album = $request->album;
        $user->save();
        return redirect()->route("user.index")->with("edit","sa a bien été changer");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->back()->with("destroy","ces bien suprimmer");
    }
}
