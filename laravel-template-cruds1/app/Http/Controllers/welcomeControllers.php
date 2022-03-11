<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\BusinesProjet;
use App\Models\contact;
use App\Models\Footer;
use App\Models\Header;
use App\Models\img;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\ViewException;

class welcomeControllers extends Controller
{
    //
    public function index(){
        $header = Header::all();
        $img = img::all();
        $banner = banner::all();
        $section = BusinesProjet::all();
        $testi = Testimonial::all();
        $contact = contact::all();
        $footer = Footer::all();
       

        return View("welcome",compact("header","img","banner","section","testi","contact","footer"));
    }
}
