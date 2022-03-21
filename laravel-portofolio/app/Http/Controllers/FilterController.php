<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filter = Filter::all();
        return view("back/pages/tableau/filter",compact("filter"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back/pages/create/createfilter");
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
        //
        $filter = new Filter;
        $filter->filter = $request->filter;
        $filter->class = $request->class;
        $filter->data = $request->data;
        $filter->save();
        return redirect()->route("filter.index")->with("create","sa a bien été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function show($id,Filter $filter)
    {
        $filter = Filter::find($id);
        return view("back/pages/show/showfilter",compact("filter"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Filter $filter)
    {
        $filter = Filter::find($id);
        return view("back/Pages/edit/editfilter",compact("filter"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Filter $filter)
    {
        //
        $filter = Filter::find($id);
        $filter->filter = $request->filter;
        $filter->class = $request->class;
        $filter->data = $request->data;
        $filter->save();
        return redirect()->route("filter.index")->with("edit","sa a bien été modifier");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Filter $filter)
    {
        $filter = Filter::find($id);
        $filter->delete();
        return redirect()->back()->with("destroy", " sa a bien été surpimer");
        //
    }
}
