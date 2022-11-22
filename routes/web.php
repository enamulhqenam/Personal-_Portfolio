<?php

use App\Models\About;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfessionalExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactInformationController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

/* ----------About Route------------ */
Route::resource('/about', AboutController::class);

/* ----------Fact Route------------ */

Route::resource('/fact', FactsController::class);


/* ----------Skill Route------------ */
Route::resource('/skill', SkillsController::class);


/* ----------summary Route------------ */
Route::resource('/resume/summary',ResumeController::class,);

/* ----------Education Route------------ */
Route::resource('/resume/education',EducationController::class);

/* ----------Experience Route------------ */
Route::resource('/resume/experrience',ProfessionalExperienceController::class);

/* ----------Portfolio Route------------ */
Route::resource('/portfolio',PortfolioController::class);

/* ----------Service Route------------ */
Route::resource('/service',ServicesController::class);

/* ----------Testimonials Route------------ */
Route::get('/portfolio/testimonial/list',[TestimonialsController::class,'index']);
Route::get('/portfolio/testimonial/create',[TestimonialsController::class,'create']);
Route::post('/portfolio/testimonial/store',[TestimonialsController::class,'store']);
Route::get('/portfolio/testimonial/show',[TestimonialsController::class,'Show']);
Route::post('/portfolio/testimonial/update',[TestimonialsController::class,'update']);
Route::get('/portfolio/testimonial/edit/{id}',[TestimonialsController::class,'edit']);

/* ----------Contact Route------------ */
Route::get('/portfolio/contact/list',[AboutController::class,'index']);
Route::get('/portfolio/contact/create',[AboutController::class,'create']);
Route::post('/portfolio/contact/store',[AboutController::class,'store']);
Route::get('/portfolio/contact/show',[AboutController::class,'Show']);
Route::post('/portfolio/contact/update',[AboutController::class,'update']);
Route::get('/portfolio/contact/edit/{id}',[AboutController::class,'edit']);

/* ----------Contact Route------------ */
Route::get('/portfolio/contact/list',[ContactController::class,'index']);
Route::get('/portfolio/contact/create',[ContactController::class,'create']);
Route::post('/portfolio/contact/store',[ContactController::class,'store']);
Route::get('/portfolio/contact/show',[ContactController::class,'Show']);
Route::post('/portfolio/contact/update',[ContactController::class,'update']);
Route::get('/portfolio/contact/edit/{id}',[ContactController::class,'edit']);

/* ----------Contact information Route------------ */
Route::get('/portfolio/contactinformation/list',[ContactInformationController::class,'index']);
Route::get('/portfolio/contactinformation/create',[ContactInformationController::class,'create']);
Route::post('/portfolio/contactinformation/store',[ContactInformationController::class,'store']);
Route::get('/portfolio/contactinformation/show',[ContactInformationController::class,'Show']);
Route::post('/portfolio/contactinformation/update',[ContactInformationController::class,'update']);
Route::get('/portfolio/contactinformation/edit/{id}',[ContactInformationController::class,'edit']);