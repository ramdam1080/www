<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestiControllers extends Controller
{
    public function index(){
        $testi = Testimonial::all();
        return view("back/pages/tbTesti",compact("testi"));
    }
    public function destroy($id){
        $testi =Testimonial::find($id);
        $testi->delete();
        return redirect()->back();
    }
    public function edit($id){
        $testi =Testimonial::find($id);
        return view("back/pages/fTesti",compact("testi"));
    }
    public function update($id, Request $request){
        $testi =Testimonial::find($id);
        $testi->titre = $request->titre;
        $testi->sousTitre = $request->sousTitre;
        $testi->text = $request->text;
        $testi->save();
        return redirect()->route("testi.index");
    }
    //
}
