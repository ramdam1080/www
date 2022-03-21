<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\welcomeControllers;
use App\Models\footer;
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
Route::get("/profil/show/{id}",[profilController::class,"show"])->name("profil.show");
//fin

//about
Route::get("/about",[AboutController::class,"index"])->name("about.index");
Route::post("/about/destroy/{id}",[AboutController::class,"destroy"])->name("about.destroy");
Route::get("/about/edit/{id}",[AboutController::class,"edit"])->name("about.edit");
Route::post("/about/update/{id}",[AboutController::class,"update"])->name("about.update");
Route::get("/about/create",[AboutController::class,"create"])->name("about.create");
Route::post("/about/store",[AboutController::class,"store"])->name("about.store");
Route::get("/about/show/{id}",[AboutController::class,"show"])->name("about.show");

//fin

//fact
Route::get("/fact",[FactController::class,"index"])->name("fact.index");
Route::post("/fact/destroy/{id}",[FactController::class,"destroy"])->name("fact.destroy");
Route::get("/fact/edit/{id}",[FactController::class,"edit"])->name("fact.edit");
Route::post("/fact/update/{id}",[FactController::class,"update"])->name("fact.update");
Route::get("/fact/create",[FactController::class,"create"])->name("fact.create");
Route::post("/fact/store",[FactController::class,"store"])->name("fact.store");
Route::get("/fact/show/{id}",[FactController::class,"show"])->name("fact.show");

//fin

//skill
Route::get("/skill",[SkillController::class,"index"])->name("skill.index");
Route::post("/skill/destroy/{id}",[SkillController::class,"destroy"])->name("skill.destroy");
Route::get("/skill/edit/{id}",[SkillController::class,"edit"])->name("skill.edit");
Route::post("/skill/update/{id}",[SkillController::class,"update"])->name("skill.update");
Route::get("/skill/create",[SkillController::class,"create"])->name("skill.create");
Route::post("/skill/store",[SkillController::class,"store"])->name("skill.store");
Route::get("/skill/show/{id}",[SkillController::class,"show"])->name("skill.show");

//fin

//filter
Route::get("/filter",[FilterController::class,"index"])->name("filter.index");
Route::post("/filter/destroy/{id}",[FilterController::class,"destroy"])->name("filter.destroy");
Route::get("/filter/edit/{id}",[FilterController::class,"edit"])->name("filter.edit");
Route::post("/filter/update/{id}",[FilterController::class,"update"])->name("filter.update");
Route::get("/filter/create",[FilterController::class,"create"])->name("filter.create");
Route::post("/filter/store",[FilterController::class,"store"])->name("filter.store");
Route::get("/filter/show/{id}",[FilterController::class,"show"])->name("filter.show");

//fin

//portfolio
Route::get("/portfolio",[PortfolioController::class,"index"])->name("portfolio.index");
Route::post("/portfolio/destroy/{id}",[PortfolioController::class,"destroy"])->name("portfolio.destroy");
Route::get("/portfolio/edit/{id}",[PortfolioController::class,"edit"])->name("portfolio.edit");
Route::post("/portfolio/update/{id}",[PortfolioController::class,"update"])->name("portfolio.update");
Route::get("/portfolio/create",[PortfolioController::class,"create"])->name("portfolio.create");
Route::post("/portfolio/store",[PortfolioController::class,"store"])->name("portfolio.store");
Route::get("/portfolio/show/{id}",[PortfolioController::class,"show"])->name("portfolio.show");

//fin

//testimonial
Route::get("/testimonial",[TestimonialController::class,"index"])->name("testimonial.index");
Route::post("/testimonial/destroy/{id}",[TestimonialController::class,"destroy"])->name("testimonial.destroy");
Route::get("/testimonial/edit/{id}",[TestimonialController::class,"edit"])->name("testimonial.edit");
Route::post("/testimonial/update/{id}",[TestimonialController::class,"update"])->name("testimonial.update");
Route::get("/testimonial/create",[TestimonialController::class,"create"])->name("testimonial.create");
Route::post("/testimonial/store",[TestimonialController::class,"store"])->name("testimonial.store");
Route::get("/testimonial/show/{id}",[TestimonialController::class,"show"])->name("testimonial.show");
//fin

//footer
Route::get("/footer",[FooterController::class,"index"])->name("footer.index");
Route::post("/footer/destroy/{id}",[FooterController::class,"destroy"])->name("footer.destroy");
Route::get("/footer/edit/{id}",[FooterController::class,"edit"])->name("footer.edit");
Route::post("/footer/update/{id}",[FooterController::class,"update"])->name("footer.update");
Route::get("/footer/create",[FooterController::class,"create"])->name("footer.create");
Route::post("/footer/store",[FooterController::class,"store"])->name("footer.store");
Route::get("/footer/show/{id}",[FooterController::class,"show"])->name("footer.show");


//fin