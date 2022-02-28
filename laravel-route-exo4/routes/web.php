<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pages/{fruit}', function ($fruit) {
    return view('page/about',compact("fruit"));
});
Route::get('/pages/{nom}/{prenom}/{age}', function ($nom,$prenom,$age) {
    return view('page/contact',compact("nom","prenom","age"));
});
Route::get('/coding',function(){
    $prenom = ["moha","ilies","adil","marcyl","calvin","alexksy"];
    class Obj {
        function __construct($x,$y,$z)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
    };
    $personne = new Obj("moha","ramdam","21");
    $tb = [$personne1 = new Obj("ilies","jsp",25),$personne2 = new Obj("calvin","jsp",15)];
    
    
    return view("coding",compact("prenom","personne","tb"));
});

Route::get("/",function(){
    return view("welcome");
});