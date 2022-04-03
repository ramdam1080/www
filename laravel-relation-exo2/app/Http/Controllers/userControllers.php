<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class userControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $profil = Profil::all();
        return view("user",compact("user","profil"));
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
        $profil = new Profil;
        $request->validate([
            "email"=>"required|email",
            "nickname"=>"required",
            "name"=>"required",
            "age"=>"required|integer",
            "phone"=>"required",
        ]);
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        $profil->name = $request->name;
        $profil->age = $request->age;
        $profil->phone = $request->phone;
        $user->save();
        $profil->user_id = $user->id;
        $profil->save();
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
        $user = User::find($id) ;
        $profil = Profil::find($id) ;
        return view("show/showuser",compact("user","profil"));
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
        $profil = Profil::find($id);
        return view("edit/edituser",compact("user","profil"));
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
        $user = User::find($id);
        $profil = Profil::find($id);
        $request->validate([
            "email"=>"required|email",
            "nickname"=>"required",
            "name"=>"required",
            "age"=>"required|integer",
            "phone"=>"required|integer",
        ]);
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        $profil->name = $request->name;
        $profil->age = $request->age;
        $profil->phone = $request->phone;
        $profil->user_id = $user->id;
        $user->save();
        $profil->save();
        return redirect()->route("user.index")->with("edit","sa a bien été modifier");
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
        return redirect()->back()->with("destroy","sa a bien été surpimer");
    }
}
