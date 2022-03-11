<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactControllers extends Controller
{
    //
    public function index(){
        $contact = contact::all();
        return view("back/pages/tbContact",compact("contact"));
    }
    public function destroy($id){
        $contact = contact::find($id);
        $contact->delete();
        return redirect()->back();
    }
    public function edit($id){
        // $contact = contact::find($id);
        $contact = contact::find($id);
        return view("back/pages/fContact",compact("contact"));
    }
    public function update($id,Request $request){
        $contact = contact::find($id);
        $contact->titre = $request->titre;
        $contact->sousTitre = $request->sousTitre;
        $contact->btn = $request->btn;
        $contact->save();
        return redirect()->route("contact.index");
    }
}
