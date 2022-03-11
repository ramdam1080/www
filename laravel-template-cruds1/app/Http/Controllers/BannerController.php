<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index(){
        $banner = banner::all();
        return view("back/pages/tbBanner",compact("banner"));
    }
    public function destroy($id){
        $banner = banner::find($id);
        $banner->delete();
        return redirect()->route("banner.index");
    }
    public function edit($id){
       $banner = banner::find($id); 
       return view("back/pages/fBanner",compact("banner"));
    }
    public function update($id, Request $request){
        $banner = banner::find($id);
        $banner->text = $request->text;
        $banner->save();
        return redirect()->route("banner.index");
    }
}
