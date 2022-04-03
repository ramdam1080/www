<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index()
    {
        //
        $role = Role::all();
        return view("back/pages/role",compact("role"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("back/pages/create/createrole");
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
        $role = new role;
        $request->validate([
            "nom"=> "required"
        ]);
        $role->nom = $request->nom;
       
        $role->save();
        return redirect()->route("role.index")->with("create","sa a bien été crée");
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
        $role = Role::find($id);
        return view("back/pages/show/showrole",compact("role"));
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
        $role = Role::find($id);
        return view("back/pages/edit/editrole",compact("role"));
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
        $request->validate([
            "nom"=> "required"
        ]);
        $role = Role::find($id);
        $role->nom = $request->nom;
        
        $role->save();
        return redirect()->route("role.index")->with("edit","sa a bien été crée");
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
        $role = Role::find($id);
        foreach ($role->users as $user) {
            $user->role_id = 1;
            $user->save();
        }
        $role->delete();
        return redirect()->back()->with("destroy","sa a bien été supprimer");
    }
}
