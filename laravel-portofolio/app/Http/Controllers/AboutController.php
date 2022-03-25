<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view("back/pages/tableau/about",compact("about"));
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back/pages/create/createabout");
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
        //
        $aboutAll = About::all();
        if (count($aboutAll)<8) {
            # code...
            $about = new About;
            $about->icone = $aboutAll[0]->icone;
            $about->strong = $request->strong;
            $about->span = $request->span;
            $about->save();
            return redirect()->route("about.index")->with("create","la creation a été faite");
        }else{
            return redirect()->route("about.index")->with("create","la creation n'a pas été faite aucun contenue ne peut se rajouter vue qu'il est deja au max de sa capacité");
            
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show($id,About $about)
    {
        //
        $about = About::find($id);
        
        return view("back/pages/show/showabout",compact("about"));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id,About $about)
    {
        // dd($about);
        $about = About::find($id);
        return view("back/pages/edit/editabout",compact("about"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $about = About::find($id);
        $about->strong = $request->strong;
        $about->span = $request->span;
        $about->save();
        return redirect()->route("about.index")->with("edit","sa a bien été modifier");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,About $about)
    {
        $about = About::find($id);
        $aboutAll = About::all();
        if (count($aboutAll)>1) {
            $about->delete();
            return redirect()->back()->with("destroy","sa a bien été suprimer");
        }else{
            return redirect()->route("about.index")->with("destroy","vous ne pouvez pas suprimmer tout le contenue");
            
        }
        //
    }
}
