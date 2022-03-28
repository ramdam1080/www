<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::all();
        return view("pages/album",compact("album"));
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
        $user = User::all(); 
        return view("create/createalbum",compact("user"));
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
        
        $album = new Album;
        $user = User::find($request->album); 
        $request->validate([
            "nom"=>"required",
            "description"=>"required",
            "auteur"=>"required",
            "photo"=>"required|integer",
        ]);
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->auteur = $request->auteur;
        $album->photo = $request->photo;
        $user->album++;
        $user->save();
        
        $album->save();
        return redirect()->route("album.index")->with("create","sa a bien été crée");
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
        return view("show/showalbum",compact("album"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
        return view("edit/editalbum",compact("album","user"));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        //
        $request->validate([
            "nom"=>"required",
            "description"=>"required",
            "auteur"=>"required",
            "photo"=>"required|integer",
        ]);
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->auteur = $request->auteur;
        $album->photo = $request->photo;
        $album->save();
        return redirect()->route("album.index")->with("edit","le changement a été fait");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
        $album->delete();
        return redirect()->back()->with("destroy"," sa été suprimer");
    }
}
