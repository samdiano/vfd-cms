<?php

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

Route::get('/about', 'CompanyController@about')->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/investors', function () {
    return view('investors');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/career', function () {
    return view('careers');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});



Route::get('/admin/pages/about', function () {
    return view('admin.pages.about');
});

Route::get('/admin/pages/career', function () {
    return view('admin.pages.career');
});

Route::get('/admin/pages/investors', function () {
    return view('admin.pages.investors');
});

Route::get('/admin/pages/media', function () {
    return view('admin.pages.media');
});

Route::get('/admin/pages/portfolio', function () {
    return view('admin.pages.portfolio');
});


Route::get('/admin/about', 'AdminController@about')->name('adminAbout');

Route::post('/admin/about','AdminController@aboutEdit')->name('adminAboutPost');

Route::get('/admin/history', 'AdminController@history')->name('adminHistory');

Route::post('/admin/history','AdminController@historyEdit')->name('adminHistoryPost');

Route::get('/admin/impact', 'AdminController@impact')->name('adminImpact');

Route::post('/admin/impact','AdminController@impactEdit')->name('adminImpactPost');


Auth::routes();

// Route::get('/home', 'HomeController@home')->name('home');
Route::get('/admin', 'HomeController@index')->name('admin');
