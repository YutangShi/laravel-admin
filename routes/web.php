<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', function () {
        return view('frontend.index');
    });
    
    Route::get('/aboutus', 'IndexController@aboutus');
    Route::get('/courses', 'IndexController@courses');
    Route::get('/services', 'IndexController@services');

    Route::get('/studyabroad', 'IndexController@studyabroad');
    Route::get('/staff', 'IndexController@staff');
    Route::get('/faq', 'IndexController@faq');
    
    Route::get('admin/login', 'backend\Auth\LoginController@getLoginForm');
    Route::post('admin/authenticate', 'backend\Auth\LoginController@authenticate');
});

Route::group(['prefix' => 'admin','middleware' => ['admin']], function () {
 
    Route::get('dashboard', 'backend\AdminController@dashboard');
    Route::post('logout', 'backend\Auth\LoginController@getLogout');
    
    Route::resource('managers', 'ManagerController');
    Route::resource('news', 'NewsController');
    Route::resource('activities', 'activityController');
    Route::resource('courses', 'CourseController');
    Route::resource('banners', 'BannerController');
    Route::resource('team', 'TeamController');
    Route::resource('services', 'ServiceController');
    Route::resource('faqs', 'FaqController');
    Route::resource('aboutuses', 'AboutusController');
});

Auth::routes();


