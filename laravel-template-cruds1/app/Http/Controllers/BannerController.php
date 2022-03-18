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
        return redirect()->route("banner.index")->with("destroy","sa a bien été suprimmer");
    }
    public function edit($id){
       $banner = banner::find($id); 
       return view("back/pages/fBanner",compact("banner"));
    }
    public function update($id, Request $request){
        $banner = banner::find($id);
        $banner->text = $request->text;
        $banner->save();
        return redirect()->route("banner.index")->with("edit","cela a bien été changer");
    }
    public function create(){
        $banner = banner::all();
        return view("back/pages/createbanner",compact("banner"));
    }
    public function store(Request $request){
        $banner = new banner;
        $request->validate([
            "text"=>"required"
        ]);
        $banner->text = $request->text;
        $banner->save();
        return redirect()->route("banner.index")->with("create","cela a bien été crée");
        
    }
}
