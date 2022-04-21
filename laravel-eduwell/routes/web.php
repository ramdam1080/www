<?php

use App\Http\Controllers\TitreController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Titre;
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
    $titre = Titre::all();
    $services = Service::all();
    $testimonial = Testimonial::all();
    $banner = Banner::all();
    
        return view('welcome' , compact('services','titre','testimonial','banner'));

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/back/admin', function () {
    $titre = Titre::all();
    $services = Service::all();
    $testimonial = Testimonial::all();
    $banners = Banner::all();
    return view('/back/admin' ,compact('services','titre','testimonial','banners'));
})->name('back.admin');

require __DIR__.'/auth.php';
Route::resource('/back/titre', TitreController::class);
Route::resource('/back/banner', BannerController::class);
Route::resource('/back/service', ServiceController::class);
Route::resource('/back/testimonial', TestimonialController::class);

Route::get('/back/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/back/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/back/contacts/{id}/update', [ContactController::class, 'update'])->name('contact.update');
