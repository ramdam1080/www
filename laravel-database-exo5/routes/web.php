<?php

use App\Models\Article;
use App\Models\equipe;
use App\Models\Portofolio;
use App\Models\User;
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

Route::get('/', function () {
    $user = User::all();
    // $nom = User::where("nom","Ramona Ferry")->get();
    // $find = User::find(5);
    // dd($user,$user[0],$user[count($user) -1],$nom,$find,count($user));
    

    
    return view('welcome',compact("user"));
});

Route::get('/{u}', function ($u) {
    if($u === "article"){
    $a = Article::all();
    return view('pages/article',compact("a"));
}else if($u === "equipe"){
    
    $e = equipe::all();
    return view('pages/equipe',compact("e"));
}else{
    $p = Portofolio::all();
    return view('pages/portofolio',compact("p"));
}
}

);
