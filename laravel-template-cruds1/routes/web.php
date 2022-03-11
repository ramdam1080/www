<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\contactControllers;
use App\Http\Controllers\footerControllers;
use App\Http\Controllers\imgControllers;
use App\Http\Controllers\sectionController;
use App\Http\Controllers\tbHeaderControllers;
use App\Http\Controllers\TestiControllers;
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

Route::get('/',[welcomeControllers::class,"index"]);


Route::get('/tbheader',[tbHeaderControllers::class,"index"])->name("header.index");
Route::post('/tbheader/destroy/{id}',[tbHeaderControllers::class,"destroy"])->name("header.destroy");
Route::get("/header/edit/{id}",[tbHeaderControllers::class,"edit"])->name("header.edit");
Route::post("/header/update/{id}",[tbHeaderControllers::class,"update"])->name("header.update");

Route::get('/tbimg',[imgControllers::class,"index"])->name("img.index");
Route::post('/tbimg/destroy/{id}',[imgControllers::class,"destroy"])->name("img.destroy");
Route::get('/tbimg/edit/{id}',[imgControllers::class,"edit"])->name("img.edit");
Route::post('/tbimg/update/{id}',[imgControllers::class,"update"])->name("img.update");

Route::get('/tbbanner',[BannerController::class,"index"])->name("banner.index");
Route::post('/tbbanner/destroy/{id}',[BannerController::class,"destroy"])->name("banner.destroy");
Route::get('/tbbanner/edit/{id}',[BannerController::class,"edit"])->name("banner.edit");
Route::post('/tbbanner/update/{id}',[BannerController::class,"update"])->name("banner.update");

Route::get('/tbbusproj',[sectionController::class,"index"])->name("section.index");
Route::post('/tbbusproj/destroy/{id}',[sectionController::class,"destroy"])->name("section.destroy");
Route::get('/tbbusproj/edit/{id}',[sectionController::class,"edit"])->name("section.edit");
Route::post('/tbbusproj/update/{id}',[sectionController::class,"update"])->name("section.update");


Route::get('/tbTesti',[TestiControllers::class,"index"])->name("testi.index");
Route::post('/tbTesti/destroy/{id}',[TestiControllers::class,"destroy"])->name("testi.destroy");
Route::get('/tbTesti/edit/{id}',[TestiControllers::class,"edit"])->name("testi.edit");
Route::post('/tbTesti/update/{id}',[TestiControllers::class,"update"])->name("testi.update");


Route::get('/tbContact',[contactControllers::class,"index"])->name("contact.index");
Route::post('/tbContact/destroy/{id}',[contactControllers::class,"destroy"])->name("contact.destroy");
Route::get('/tbContact/edit/{id}',[contactControllers::class,"edit"])->name("contact.edit");
Route::post('/tbContact/update/{id}',[contactControllers::class,"update"])->name("contact.update");

Route::get('/tbFooter',[footerControllers::class,"index"])->name("footer.index");
Route::post('/tbfooter/destroy/{id}',[footerControllers::class,"destroy"])->name("footer.destroy");
Route::get('/tbfooter/edit/{id}',[footerControllers::class,"edit"])->name("footer.edit");
Route::post('/tbfooter/update/{id}',[footerControllers::class,"update"])->name("footer.update");