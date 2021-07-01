<?php

use App\Jop;
use App\Project;
use Illuminate\Http\Request;
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

/*Route::get('/', function () {
    return view('front.index');
});*/


Route::get('about-us', function () {
    $projects = Project::latest()->paginate();
    return view('front.about',compact('projects'));
});
Route::get('our-vision', function () {
    return view('front.our_vision_mission');
});

Route::get('our-partner-sister-companies', function () {
    return view('front.our_partener');
});
Route::get('what-we-offer', function () {
    return view('front.weoffer');
});


Route::get('/', 'HomeController@index');





Route::name('front.')->namespace('Front')->group(function () {
    Route::resource('job-openings', 'JopController');
    Route::post('apply', 'JopController@apply')->name('apply');
    Route::get('general-gallery', 'GalleryController@index')->name('general-gallery');
    Route::get('portfolios', 'ProjectController@index')->name('portfolios');

    


    Route::resource('blog', 'NewsController');
    Route::get('blogdetails/{id}','NewsController@blogdetails')->name('blogdetails');
    Route::post('savecomments/{id}','NewsController@savecomments')->name('savecomments');
    Route::resource('services', 'ServicesController');
    Route::get('showservice/{name}','ServicesController@showservice')->name('showservice');
    Route::resource('contact', 'ContactController');
    Route::post('savecontact','ContactController@savecontact')->name('savecontact');
    Route::resource('allfaqs', 'FaqsController');

});


///////////////////////////////////////////////////////////////////////


//Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::name('dashboard.')->middleware(['auth'])->namespace('Dashboard')->group(function () {


    Route::resource('projects', 'ProjectController');
    Route::resource('galleries', 'GalleryController');
    Route::resource('countries', 'CountryController');
    Route::resource('types', 'TypeController');
    Route::resource('jops', 'JopController');
    Route::get('applies/{id}', 'JopController@applies')->name('applies');

    //news routes
    Route::resource('news', 'NewsController')->except(['show']);
    Route::get('newscomments/{id}', 'NewsController@newscomments')->name('newscomments');
    Route::get('comments', 'NewsController@comments')->name('comments');
    //services routes
    Route::resource('services', 'ServicesController')->except(['show']);
    //services servicesdetails
    Route::resource('servicesdetails', 'ServicesDetailsController')->except(['show']);
     //services contactUs
     Route::resource('contactUs', 'ContactUsController')->except(['show']);
          //services settings
     Route::resource('settings', 'SettingssController')->except(['show']);

      //services faqs
      Route::resource('faqs', 'FaqsController')->except(['show']);
});
