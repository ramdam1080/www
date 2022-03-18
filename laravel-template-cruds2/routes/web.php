<?php

use App\Http\Controllers\ArticleControllers;
use App\Http\Controllers\EquipeControllers;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\VoitureControllers;
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
    return view('welcome');
});

//user
Route::get("/back/pages/user",[UserControllers::class,"index"])->name("user.index");
Route::get("/back/pages/user/{id}",[UserControllers::class,"show"])->name("user.show");
Route::post("/back/pages/user/destroy/{id}",[UserControllers::class,"destroy"])->name("user.destroy");
Route::get("/back/pages/user/edit/{id}",[UserControllers::class,"edit"])->name("user.edit");
Route::post("/back/pages/user/update/{id}",[UserControllers::class,"update"])->name("user.update");
Route::get("/back/pages/user/create",[UserControllers::class,"create"])->name("user.create");
Route::post("/back/pages/user/store",[UserControllers::class,"store"])->name("user.store");
//fin


//voiture
Route::get("back/pages/voiture",[VoitureControllers::class,"index"])->name("voiture.index");
Route::post("back/pages/voiture/destroy/{id}",[VoitureControllers::class,"destroy"])->name("voiture.destroy");
Route::get("back/pages/voiture/edit/{id}",[VoitureControllers::class,"edit"])->name("voiture.edit");
Route::post("back/pages/voiture/update/{id}",[VoitureControllers::class,"update"])->name("voiture.update");
Route::get("/back/pages/voiture/create",[VoitureControllers::class,"create"])->name("voiture.create");
Route::post("/back/pages/voiture/store",[VoitureControllers::class,"store"])->name("voiture.store");
//fin

//equipe
Route::get("back/pages/equipe",[EquipeControllers::class,"index"])->name("equipe.index");
Route::post("back/pages/equipe/destroy/{id}",[EquipeControllers::class,"destroy"])->name("equipe.destroy");
Route::get("back/pages/equipe/edit/{id}",[EquipeControllers::class,"edit"])->name("equipe.edit");
Route::post("back/pages/equipe/update/{id}",[EquipeControllers::class,"update"])->name("equipe.update");
Route::get("/back/pages/equipe/create",[EquipeControllers::class,"create"])->name("equipe.create");
Route::post("/back/pages/equipe/store",[EquipeControllers::class,"store"])->name("equipe.store");
// fin

//article

Route::get("back/pages/article",[ArticleControllers::class,"index"])->name("article.index");
// Route::get("back/pages/article/show",[ArticleControllers::class,"show"])->name("article.show");
Route::post("back/pages/article/destroy/{id}",[ArticleControllers::class,"destroy"])->name("article.destroy");
Route::get("back/pages/article/edit/{id}",[ArticleControllers::class,"edit"])->name("article.edit");
Route::post("back/pages/article/update/{id}",[ArticleControllers::class,"update"])->name("article.update");
Route::get("/back/pages/article/create",[ArticleControllers::class,"create"])->name("article.create");
Route::post("/back/pages/article/store",[ArticleControllers::class,"store"])->name("article.store");

//Fin
