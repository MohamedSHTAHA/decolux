<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');









Route::name('dashboard.')->middleware(['auth'])->namespace('Dashboard')->group(function () {


    Route::resource('projects', 'ProjectController');
    Route::resource('galleries', 'GalleryController');

    //news routes
    Route::resource('news', 'NewsController')->except(['show']);
    Route::get('newscomments/{id}', 'NewsController@newscomments')->name('newscomments');
    Route::get('comments', 'NewsController@comments')->name('comments');
    //services routes
    Route::resource('services', 'ServicesController')->except(['show']);
    //services servicesdetails
    Route::resource('servicesdetails', 'ServicesDetailsController')->except(['show']);
});
