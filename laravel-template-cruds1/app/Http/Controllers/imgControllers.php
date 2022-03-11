<?php

namespace App\Http\Controllers;

use App\Models\img;
use Illuminate\Http\Request;

class imgControllers extends Controller
{
    public function index(){
        $img = img::all();
        return view("back/pages/tbImg",compact("img"));
    }

    public function destroy($id){
        $img = img::find($id);
        $img->delete();
        return redirect()->back();
    }
    public function edit($id){
        $img = img::find($id);
        return view("back/pages/fImg",compact("img"));
    }
    public function update($id,Request $request){
        $img = img::find($id);
        $img->url = $request->url;
        $img->save();
        return redirect()->route('img.index');
    }
    //
}
