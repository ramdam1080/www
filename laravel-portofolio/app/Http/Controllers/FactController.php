<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fact = Fact::all();
        return view("back/Pages/tableau/fact",compact("fact"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("back/pages/create/createfact");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factAll = Fact::all();
        $request->validate([
            "pourcent"=>"required|integer",
            "value"=>"required|integer",
        ]);
        if (count($factAll)<4) {
            $fact = new Fact;
            $fact->icone = $request->icone;
            $fact->nombre = $request->nombre;
            $fact->strong = $request->strong;
            $fact->text = $request->text;
            $fact->save();
            return redirect()->route("fact.index")->with("create","sa a bien été crée");
        }else{
            
            return redirect()->route("fact.index")->with("create","vous avez attein le nombre maximum");
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function show($id,Fact $fact)
    {
        //
        $fact = Fact::find($id);
        return view("back/pages/show/showfact",compact("fact"));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Fact $fact)
    {
        $fact = Fact::find($id);
        return view("back/pages/edit/editfact",compact("fact"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        //
        $fact = Fact::find($id);
        $request->validate([
            "pourcent"=>"required|integer",
            "value"=>"required|integer",
        ]);
        $fact->icone = $request->icone;
        $fact->nombre = $request->nombre;
        $fact->strong = $request->strong;
        $fact->text = $request->text;
        $fact->save();
        return redirect()->route("fact.index")->with("edit","sa a bien été modifier");
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Fact $fact)
    {
        $factAll = Fact::all();
        $fact = Fact::find($id);
        if (count($factAll)>1) {
            $fact->delete();
            return redirect()->back()->with("destroy","sa a bien été suprimer");
        }else{
            
            return redirect()->route("route.index")->with("destroy","vous ne pouvez pas suprimer le dernier element");
        }
    }
}
