<?php

use App\Http\Controllers\HeaderController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\welcomeControllers;
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

Route::get('/', [welcomeControllers::class,"index"]);

//title
Route::get("/title",[TitleController::class,"index"])->name("title.index");
Route::get("/title/edit/{id}",[TitleController::class,"edit"])->name("title.edit");
Route::post("/title/update/{id}",[TitleController::class,"update"])->name("title.update");
Route::get("/title/show/{id}",[TitleController::class,"show"])->name("title.show");
//Fin

//header
Route::get("/header",[HeaderController::class,"index"])->name("header.index");
Route::get("/header/edit/{id}",[HeaderController::class,"edit"])->name("header.edit");
Route::post("/header/update/{id}",[HeaderController::class,"update"])->name("header.update");
Route::get("/header/show/{id}",[HeaderController::class,"show"])->name("header.show");
//fin

//profil
Route::get("/profil",[profilController::class,"index"])->name("profil.index");
Route::get("/profil/edit/{id}",[profilController::class,"edit"])->name("profil.edit");
Route::post("/profil/update/{id}",[profilController::class,"update"])->name("profil.update");