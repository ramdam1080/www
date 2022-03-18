<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    //
    public function index(){
        $user = User::all();
        return view("back/pages/user",compact("user"));
    }
    public function show($id){
        $user = User::find($id);
        return view("back/pages/showuser",compact("user"));
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("destroy","sa a bien été suprimer");

    }
    public function edit($id){
        $user = User::find($id);
        return view("back/pages/edituser",compact("user"));
    }
    public function update($id ,Request $request){
        $user = User::find($id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->pdp = $request->pdp;
        $user->role = $request->role;
        $user->save();
        return redirect()->route("user.index")->with("edit","le changement a bien été effectuer");
    }
    public function create(){
        $user = User::all();
        return view("back/pages/createedit",compact("user"));
    }
    public function store(Request $request){
        $user = new User;
        $request->validate([
            "email" => "required|email",
            "password"=> "required",
            "nom"=> "required",
            "prenom"=> "required",
    ]);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->pdp = $request->pdp;
        $user->role = $request->role;
        $user->save();
        return redirect()->route("user.index")->with("create","cela a bien été crée");
    }

}
