<?php

use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GalleryController;
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


Route::view('/', 'index');
Route::view('temp', 'temp');
Route::view('donate', 'donate');
Route::view('sponsor', 'sponsor');
Route::view('aboutus', 'aboutus');
Route::view('gallery', 'gallery');
Route::view('contact', 'contact');
Route::view('projects', 'projects');
Route::view('activities', 'activities');
Route::view('sponsor-a-child', 'sponsor-a-child');

Route::prefix('Admin')->group(function () {
    Route::view('index','dashboard.index');
    Route::view('login','dashboard.login');
    Route::view('register','dashboard.register');
    Route::view('control','dashboard.control');
    Route::view('information','dashboard.information');

    //Controllers and models

    Route::POST('control',[ProjectController::class,'store']);
    Route::POST('control',[GalleryController::class,'store']);
    Route::POST('control',[ActivitieController::class,'store']);
});

Route::POST('contact',[ContactUsController::class,'store']);



