<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CasestudyController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\ServicesController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\SendMailController;


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

Route::get('/',[HomeController::class, 'index']);

// services routes
Route::get('/services',[ServicesController::class, 'index']);
Route::get('/services/software_solutions',[ServicesController::class, 'index']);
Route::get('/services/graphics_design',[ServicesController::class, 'index']);
Route::get('/services/functional_resume',[ServicesController::class, 'index']);
Route::get('/services/social_media_marketing',[ServicesController::class, 'index']);
Route::get('/services/ui_ux_design',[ServicesController::class, 'index']);
Route::get('/services/brand_identity',[ServicesController::class, 'index']);


Route::get('/projects',[ProjectsController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/casestudy',[CasestudyController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);

