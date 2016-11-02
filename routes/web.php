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
    Route::get('/aboutus', function () {
        return view('frontend.aboutus');
    });
    Route::get('/courses', function () {
        return view('frontend.courses');
    });
    Route::get('/services', function () {
        return view('frontend.services');
    });
    Route::get('/studyabroad', function () {
        return view('frontend.studyabroad');
    });
    Route::get('/staff', function () {
        return view('frontend.staff');
    });
    Route::get('/faq', function () {
        return view('frontend.faq');
    });
    
    
    /*
    Route::get('admin/register', 'backend\Auth\RegisterController@getRegisterForm');
    Route::post('admin/saveregister', 'backend\Auth\RegisterController@saveRegisterForm');
    
    // USER 
    Route::get('user/login', 'frontend\Auth\LoginController@getLoginForm');
    Route::post('user/authenticate', 'frontend\Auth\LoginController@authenticate');
    
    Route::get('user/register', 'frontend\Auth\RegisterController@getRegisterForm');
    Route::post('user/saveregister', 'frontend\Auth\RegisterController@saveRegisterForm');
    */
});

/*
Route::group(['middleware' => ['user']], function () {
    Route::post('user/logout', 'frontend\Auth\LoginController@getLogout');
    Route::get('user/dashboard', 'frontend\UserController@dashboard');
    Route::get('user/dashboard1/', function () {
        return view('frontend.dashboard');
    });
});
*/

Route::group(['prefix' => 'admin','middleware' => ['admin']], function () {
    
// ADMIN
    Route::get('login', 'backend\Auth\LoginController@getLoginForm');
    Route::post('authenticate', 'backend\Auth\LoginController@authenticate');
    Route::get('dashboard', 'backend\AdminController@dashboard');
    Route::post('logout', 'backend\Auth\LoginController@getLogout');
    
    Route::resource('managers', 'ManagerController');
    Route::resource('news', 'NewsController');
    Route::resource('activities', 'activityController');
    Route::resource('courses', 'CourseController');
    Route::resource('banners', 'BannerController');
    Route::resource('team', 'TeamController');
});

Auth::routes();