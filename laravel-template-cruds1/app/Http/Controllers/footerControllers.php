<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class footerControllers extends Controller
{
    public function index (){
        $footer=Footer::all();
        return view("back/pages/tbFooter",compact("footer"));
    }
    public function destroy ($id){
        $footer=Footer::find($id);
        $footer->delete();
        return redirect()->back();
    }
    public function edit ($id){
        $footer=Footer::find($id);
        return view("back/pages/fFooter",compact("footer"));
    }
    public function update ($id, Request $request){
        $footer=Footer::find($id);
        $footer->titre = $request->titre ;
        $footer->icone1 = $request->icone1 ;
        $footer->icone2 = $request->icone2 ;
        $footer->icone3 = $request->icone3 ;
        $footer->text = $request->text ;
        $footer->save();
        return redirect()->route("footer.index");
    }
    //
}
