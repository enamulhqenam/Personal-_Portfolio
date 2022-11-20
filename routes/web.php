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
Route::get('/portfolio/about/list',[AboutController::class,'index']);
Route::get('/portfolio/about/create',[AboutController::class,'create']);
Route::post('/portfolio/about/store',[AboutController::class,'store']);
Route::get('/portfolio/about/show',[AboutController::class,'Show']);
Route::post('/portfolio/about/update',[AboutController::class,'update']);
Route::get('/portfolio/about/edit/{id}',[AboutController::class,'edit']);

/* ----------Fact Route------------ */
Route::get('/portfolio/fact/list',[FactsController::class,'index']);
Route::get('/portfolio/fact/create',[FactsController::class,'create']);
Route::post('/portfolio/fact/store',[FactsController::class,'store']);
Route::get('/portfolio/fact/show',[FactsController::class,'Show']);
Route::post('/portfolio/fact/update',[FactsController::class,'update']);
Route::get('/portfolio/fact/edit/{id}',[FactsController::class,'edit']);

/* ----------Skill Route------------ */
Route::get('/portfolio/skill/list',[SkillsController::class,'index']);
Route::get('/portfolio/skill/create',[SkillsController::class,'create']);
Route::post('/portfolio/skill/store',[SkillsController::class,'store']);
Route::get('/portfolio/skill/show',[SkillsController::class,'Show']);
Route::post('/portfolio/skill/update',[SkillsController::class,'update']);
Route::get('/portfolio/skill/edit/{id}',[SkillsController::class,'edit']);

/* ----------resume Route------------ */
Route::get('/portfolio/resume/list',[ResumeController::class,'index']);
Route::get('/portfolio/resume/create',[ResumeController::class,'create']);
Route::post('/portfolio/resume/store',[ResumeController::class,'store']);
Route::get('/portfolio/resume/show',[ResumeController::class,'Show']);
Route::post('/portfolio/resume/update',[ResumeController::class,'update']);
Route::get('/portfolio/resume/edit/{id}',[ResumeController::class,'edit']);

/* ----------Education Route------------ */
Route::get('/portfolio/education/list',[EducationController::class,'index']);
Route::get('/portfolio/education/create',[EducationController::class,'create']);
Route::post('/portfolio/education/store',[EducationController::class,'store']);
Route::get('/portfolio/education/show',[EducationController::class,'Show']);
Route::post('/portfolio/education/update',[EducationController::class,'update']);
Route::get('/portfolio/education/edit/{id}',[EducationController::class,'edit']);

/* ----------Experience Route------------ */
Route::get('/portfolio/experience/list',[ProfessionalExperienceController::class,'index']);
Route::get('/portfolio/experience/create',[ProfessionalExperienceController::class,'create']);
Route::post('/portfolio/experience/store',[ProfessionalExperienceController::class,'store']);
Route::get('/portfolio/experience/show',[ProfessionalExperienceController::class,'Show']);
Route::post('/portfolio/experience/update',[ProfessionalExperienceController::class,'update']);
Route::get('/portfolio/experience/edit/{id}',[ProfessionalExperienceController::class,'edit']);

/* ----------Portfolio Route------------ */
Route::get('/portfolio/portfolio/list',[PortfolioController::class,'index']);
Route::get('/portfolio/portfolio/create',[PortfolioController::class,'create']);
Route::post('/portfolio/portfolio/store',[PortfolioController::class,'store']);
Route::get('/portfolio/portfolio/show',[PortfolioController::class,'Show']);
Route::post('/portfolio/portfolio/update',[PortfolioController::class,'update']);
Route::get('/portfolio/portfolio/edit/{id}',[PortfolioController::class,'edit']);

/* ----------Service Route------------ */
Route::get('/portfolio/service/list',[ServicesController::class,'index']);
Route::get('/portfolio/service/create',[ServicesController::class,'create']);
Route::post('/portfolio/service/store',[ServicesController::class,'store']);
Route::get('/portfolio/service/show',[ServicesController::class,'Show']);
Route::post('/portfolio/service/update',[ServicesController::class,'update']);
Route::get('/portfolio/service/edit/{id}',[ServicesController::class,'edit']);

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