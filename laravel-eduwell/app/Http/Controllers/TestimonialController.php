<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function create()
    {
        return view("/back/testimonials/create");
    }
    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $request->validate([
            'p'=> 'required',
            'h4'=> 'required',
            'span'=> 'required',
        ]); // store_validated_anchor;
        $testimonial->p = $request->p;
        $testimonial->h4 = $request->h4;
        $testimonial->span = $request->span;
        $testimonial->save(); // store_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/show",compact("testimonial"));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit",compact("testimonial"));
    }
    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);
        $request->validate([
            'p'=> 'required',
            'h4'=> 'required',
            'span'=> 'required',
        ]); // update_validated_anchor;
        $testimonial->p = $request->p;
        $testimonial->h4 = $request->h4;
        $testimonial->span = $request->span;
        $testimonial->save(); // update_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
