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
Route::resource('/About', AboutController::class);

/* ----------Fact Route------------ */

Route::resource('/Fact', FactsController::class);


/* ----------Skill Route------------ */
Route::resource('/Skill', SkillsController::class);


/* ----------summary Route------------ */
Route::resource('/Resume/summary',ResumeController::class,);

/* ----------Education Route------------ */
Route::resource('/Resume/education',EducationController::class);

/* ----------Experience Route------------ */
Route::resource('/Resume/experrience',ProfessionalExperienceController::class);

/* ----------Portfolio Route------------ */
Route::resource('/Portfolio',PortfolioController::class);

/* ----------Service Route------------ */
Route::resource('/Service',ServicesController::class);

/* ----------Testimonials Route------------ */
Route::resource('/Testimonial',TestimonialsController::class);

/* ----------Contact Route------------ */
Route::resource('/Contact/form',ContactController::class);

/* ----------Contact information Route------------ */
Route::resource('/Contact/information',ContactInformationController::class);
