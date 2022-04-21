<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }
    public function create()
    {
        return view("/back/banners/create");
    }
    public function store(Request $request)
    {
        $banner = new Banner;
        $request->validate([
            'img'=> 'required',
            'button'=> 'required',
        ]); // store_validated_anchor;
        $banner->img = $request->img;
        $banner->button = $request->button;
        $banner->save(); // store_anchor
        return redirect()->route("banner.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/show",compact("banner"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $request->validate([
            'img'=> 'required',
            'button'=> 'required',
        ]); // update_validated_anchor;
        $banner->img = $request->img;
        $banner->button = $request->button;
        $banner->save(); // update_anchor
        return redirect()->route("banner.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
