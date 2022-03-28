<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photo = Photo::all();
        $photos = Photo::orderBy('updated_at','DESC')->get();
        return view("pages/photo",compact("photo","photos"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $album = Album::all();
        return view ("create/createphoto",compact("album"));
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
        $album = Album::find($request->photo);
        $request->validate([
            "nom"=>"required",
            "lien"=>"required",
            "album"=>"required",
        ]);
        $photo = new Photo;
        $photo->nom = $request->nom;
        $photo->lien = $request->lien;
        $photo->album = $request->album;
        $album->photo++;
        $album->save();
        $photo->save();
        return redirect()->route("photo.index")->with("create","sa a bien été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('show/showphoto',compact("photo"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
        return view("edit/editphoto",compact("photo"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            "nom"=>"required",
            "lien"=>"required",
            "album"=>"required",
        ]);
        $photo->nom = $request->nom;
        $photo->lien = $request->lien;
        $photo->album = $request->album;
        $photo->updated_at= now();
        $photo->save();
        return redirect()->route("photo.index")->with("edit","sa a bien été modifier");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->back()->with("destroy","ces bien suprimer");
        //
    }
    public function favori($id){
        $favori = Photo::find($id);

        if ($favori->favori === "non") {
            $favori->favori = "favori";
            $favori->save();
        }else{
            $favori->favori = "non";
            $favori->save();
        };
        return redirect()->back();            
    }
}
