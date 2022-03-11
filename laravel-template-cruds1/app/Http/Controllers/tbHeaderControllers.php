<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class tbHeaderControllers extends Controller
{
    //
    public function index(){
        $header = Header::all();
        return view("back/pages/tbHeader",compact("header"));
    }
    public function destroy($id){
        $header = Header::find($id);
        $header->delete();
        return redirect()->back();
    }
    public function edit($id){
        $header = Header::find($id);
        return view("back/pages/fHeader",compact("header"));
    }
    public function update($id,Request $request){
        $header = Header::find($id);
        $header->lien = $request->lien;
        $header->updated_at = now();
        $header->save();
        return redirect()->route("header.index");
    }
}
