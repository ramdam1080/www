<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer= footer::all();
        return view("back/pages/tableau/footer",compact("footer"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("back/pages/create/createfooter");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $footer = new footer;
        $footer->text1 = $request->text1;
        $footer->text2 = $request->text2;
        $footer->save();
        return redirect()->route("footer.index")->with("edit","le contenue a bien été modifier");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show($id,footer $footer)
    {
        $footer = footer::find($id);
        return view("back/pages/show/showfooter",compact("footer"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($id,footer $footer)
    {
        $footer= footer::find($id);
        return view("back/pages/edit/editfooter",compact("footer"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, footer $footer)
    {
        $footer = footer::find($id);
        $footer->text1 = $request->text1;
        $footer->text2 = $request->text2;
        $footer->save();
        return redirect()->route("footer.index")->with("edit","le contenue a bien été modifier");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,footer $footer)
    {
        //
        $footer = footer::find($id);
        $footer->delete();
        return redirect()->back()->with("destroy","sa a bien été suprimer");
    }
}
