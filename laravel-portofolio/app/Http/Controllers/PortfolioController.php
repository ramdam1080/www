<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = portfolio::all();
        return view('back/pages/tableau/portfolio',compact("portfolio"));
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back/pages/create/createportfolio");
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
        $portfolio = new portfolio;
        $portfolio->img = $request->file("img")->hashName();
        $portfolio->filter = $request->filter;
        $portfolio->icone1 = $request->icone1;
        $portfolio->icone2 = $request->icone2;
        $portfolio->save();
        $request->file("img")->storePublicly("img","public");
        return redirect()->route("portfolio.index")->with("create","sa a bien été crée");

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id,portfolio $portfolio)
    {
        $portfolio = portfolio::find($id);
        return view("back/pages/show/showportfolio",compact("portfolio"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id,portfolio $portfolio)
    {
        //
        $portfolio = portfolio::find($id);
        return view("back/pages/edit/editportfolio",compact("portfolio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, portfolio $portfolio)
    {
        //
        $portfolio = portfolio::find($id);
        $portfolio->img = $request->file("img")->hashName();
        $portfolio->filter = $request->filter;
        $portfolio->icone1 = $request->icone1;
        $portfolio->icone2 = $request->icone2;
        $portfolio->save();
        $request->file("img")->storePublicly("img","public");
        return redirect()->route("portfolio.index")->with("edit","sa a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,portfolio $portfolio)
    {
        //
        $portfolio = portfolio::find($id);
        $portfolioAll = portfolio::all();
        if (count($portfolioAll)>1) {
            $portfolio->delete();
            return redirect()->back()->with("destroy","sa a bien été suprimé");
        }else{
            return redirect()->back()->with("destroy","sa na pas été surpimer il n y a pas asser de contenue");
            
        }

    }
}
