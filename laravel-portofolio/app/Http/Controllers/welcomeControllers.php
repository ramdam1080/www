<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Filter;
use App\Models\footer;
use App\Models\Header;
use App\Models\Img;
use App\Models\nav;
use App\Models\portfolio;
use App\Models\Profil;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Title;
use Illuminate\Http\Request;

class welcomeControllers extends Controller
{
    public function index(){
        $title =  Title::all();
        $filter = Filter::all();
        $header = Header::all();
        $nav = nav::all();
        $img = Profil::all();
        $about = About::all();
        $facts = Fact::all();
        $skill = Skill::all();
        $portfolio = portfolio::all();
        $testimonial = Testimonial::all();
        $footer = footer::all();
        return view("welcome",compact("title","header","nav","img","about","facts","skill","filter","portfolio","testimonial","footer"));
    }
}
