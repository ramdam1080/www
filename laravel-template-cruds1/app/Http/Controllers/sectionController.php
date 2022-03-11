<?php

namespace App\Http\Controllers;

use App\Models\BusinesProjet;
use Illuminate\Http\Request;

class sectionController extends Controller
{
    public function index(){
        $section = BusinesProjet::all();
        return view("back/pages/tbBusinesProjet",compact("section"));
    }
    public function destroy($id){
        $section = BusinesProjet::find($id);
        $section->delete();
        return redirect()->back();
    }
    public function edit($id){
        $section = BusinesProjet::find($id);
        return view('back/pages/fBusinesProjet',compact("section"));
    }
    public function update($id,Request $request){
        $section = BusinesProjet::find($id);
        $section->sousTitre = $request->sousTitre;
        $section->titre = $request->titre;
        $section->text = $request->text;
        $section->text2 = $request->text2;
        $section->lien = $request->lien;
        $section->save();
        return redirect()->route("section.index");
    }
    //
}
