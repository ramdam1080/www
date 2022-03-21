<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('back/pages/tableau/testimonial',compact("testimonial"));
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back/pages/create/createtestimonial");
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
        $testimonial = new Testimonial;
        $testimonial->img = $request->file("img")->hashName();
        $testimonial->paragraphe = $request->paragraphe;
        $testimonial->h3 = $request->h3;
        $testimonial->h4 = $request->h4;
        $testimonial->data = $request->data;
        $testimonial->save();
        $request->file("img")->storePublicly("img","public");
        return redirect()->route("testimonial.index")->with("create","sa a bien été crée");

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function show($id,Testimonial $Testimonial)
    {
        $testimonial = Testimonial::find($id);
        return view("back/pages/show/showtestimonial",compact("testimonial"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Testimonial $Testimonial)
    {
        //
        $testimonial = Testimonial::find($id);
        return view("back/pages/edit/edittestimonial",compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Testimonial $Testimonial)
    {
        //
        $testimonial = Testimonial::find($id);
        $testimonial->img = $request->file("img")->hashName();
        $testimonial->paragraphe = $request->paragraphe;
        $testimonial->h3 = $request->h3;
        $testimonial->h4 = $request->h4;
        $testimonial->data = $request->data;
        $testimonial->save();
        $request->file("img")->storePublicly("img","public");
        return redirect()->route("testimonial.index")->with("edit","sa a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Testimonial $Testimonial)
    {
        //
        $testimonial = Testimonial::find($id);
        $testimonialAll = Testimonial::all();
        if (count($testimonialAll)>1) {
            $Testimonial->delete();
            return redirect()->back()->with("destroy","sa a bien été suprimé");
        }else{
            return redirect()->back()->with("destroy","sa na pas été surpimer il n y a pas asser de contenue");
            
        }

    }
}