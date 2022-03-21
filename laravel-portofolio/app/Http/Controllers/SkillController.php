<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::all();
        return view("back/pages/tableau/skill",compact("skill"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back/pages/create/createskill");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $skill = new Skill;
            $request->validate([
                "pourcent"=>"required|integer",
                "value"=>"required|integer",
            ]);
            $skill->nom = $request->nom;
            $skill->pourcent = $request->pourcent;
            $skill->value = $request->value;
            $skill->save();
            return redirect()->route("skill.index")->with("create","sa a bien été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show($id,Skill $skill)
    {
        $skill = Skill::find($id);
        return view("back/pages/show/showskill",compact("skill"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Skill $skill)
    {
        $skill = Skill::find($id);
        return view("back/pages/edit/editskill",compact("skill"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Skill $skill)
    {
        $skill = Skill::find($id);
        $request->validate([
            "pourcent"=>"required|integer",
            "value"=>"required|integer",
        ]);
        $skill->nom = $request->nom;
        $skill->pourcent = $request->pourcent;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route("skill.index")->with("edit","vous avez bien modifier le contenue");

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Skill $skill)
    {
        $skill = Skill::find($id);
        $skillAll = Skill::all();
        if (count($skillAll)>1) {
            $skill->delete();
            return redirect()->back()->with("destroy","sa a bien été suprimer");
        }else {
            
            return redirect()->back()->with("destroy","vous ne pouvez pas suprimmer quand il reste que 1");
        }
        //
    }
}
