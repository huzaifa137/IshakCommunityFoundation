<?php

use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SponsorAChildController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\logoutContoller;
use App\Http\Controllers\HomeController;
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

//Website routes
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

    //Admin routes
Route::group(['prefix'=>'Admin','middleware'=>'auth'],function () {

    Route::view('login','dashboard.login');
    Route::view('index','dashboard.index');
    Route::view('control','dashboard.control');
    Route::view('information','dashboard.information')->name('home');
    Route::view('register',[RegisterController::class,'index'])->name('register');
    Route::get('flush',[logoutContoller::class,'logoutuser']);

    //Controllers and models (CRUD OPERTAIONS)

    Route::POST('project',[ProjectController::class,'store']);
    Route::POST('gallery',[GalleryController::class,'store']);
    Route::POST('activity',[ActivitieController::class,'store']);
    Route::POST('sponsor',[SponsorAChildController::class,'store']);
    Route::get('information',[GalleryController::class,'show']);

    Route::get('delete/gallery/{id}',[GalleryController::class,'delete']);
    Route::get('delete/activity/{id}',[ActivitieController::class,'erase']);
    Route::get('delete/sponsor/{id}',[SponsorAChildController::class,'destroy']);
    Route::get('delete/project/{id}',[ProjectController::class,'turnish']);

    Route::get('edit/{id}',[ProjectController::class,'display']);
    Route::get('update/{id}',[GalleryController::class,'display']);
    Route::get('change/{id}',[ActivitieController::class,'display']);
    Route::get('modify/{id}',[SponsorAChildController::class,'display']);


    Route::POST('edit/finalise',[ProjectController::class,'updating']);
    Route::POST('update/galleryupdate',[GalleryController::class,'update']); 
    Route::POST('change/activitychange',[ActivitieController::class,'update']);
    Route::POST('modify/sponsormodify',[SponsorAChildController::class,'update']);   
});


Route::POST('contact',[ContactUsController::class,'store']);

Auth::routes();

Route::get('/register',[RegisterController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

