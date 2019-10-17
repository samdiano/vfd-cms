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

Route::get('/career', 'CompanyController@career')->name('career');

Route::get('/portfolio','CompanyController@portfolio')->name('portfolio');

Route::get('/investors', function () {
    return view('investors');
});

Route::get('/media', function () {
    return view('media');
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

Route::get('/admin/portfolio-vacancies', function () {
    return view('admin.vacancies.portfolio-vacancies');
});


Route::get('/admin/about', 'AdminController@about')->name('adminAbout');

Route::post('/admin/about','AdminController@aboutEdit')->name('adminAboutPost');

Route::get('/admin/career', 'AdminController@career')->name('adminCareer');

Route::post('/admin/career', 'AdminController@careerEdit')->name('adminCareerPost');

Route::get('/admin/portfolio', 'AdminController@portfolio')->name('adminPortfolio');

Route::post('/admin/portfolio', 'AdminController@portfolioEdit')->name('adminPortfolioPost');

Route::get('/admin/history', 'AdminController@history')->name('adminHistory');

Route::post('/admin/history','AdminController@historyEdit')->name('adminHistoryPost');

Route::get('/admin/impact', 'AdminController@impact')->name('adminImpact');

Route::post('/admin/impact','AdminController@impactEdit')->name('adminImpactPost');

Route::get('/admin/vacancies', 'AdminController@vacancies')->name('adminVacancies');

Route::get('/admin/vacancies/new','AdminController@vacancy')->name('adminVacancyPost');

Route::post('/admin/vacancies/new','AdminController@newVacancy')->name('adminVacancyPost');

Route::get('/admin/portfolio/bridge','AdminController@bridgeVacancy')->name('adminPortfolioBridge');

Route::get('/admin/portfolio/anchoria','AdminController@anchoriaVacancy')->name('adminPortfolioBridge');

Route::get('/admin/portfolio/everdon','AdminController@everdonVacancy')->name('adminPortfolioBridge');

Route::get('/admin/services','AdminController@services')->name('adminServices');

Route::get('/admin/services/new','AdminController@newService')->name('adminServices');

Route::post('/admin/services/new','AdminController@addService')->name('adminServices');

Route::get('/admin/products','AdminController@products')->name('adminServices');

Route::get('/admin/products/new','AdminController@newProduct')->name('adminServices');

Route::post('/admin/products/new','AdminController@addProsuct')->name('adminServices');

Route::get('/admin/portfolio/dynasty','AdminController@dynastyVacancy')->name('adminPortfolioBridge');

Route::get('/admin/portfolio/microfinance','AdminController@microfinanceVacancy')->name('adminPortfolioBridge');

Route::get('/admin/portfolio/vacancies/new','AdminController@portfolioVacancy')->name('adminVacancyPost');

Route::post('/admin/portfolio/vacancies/new','AdminController@newPortfolioVacancy')->name('adminVacancyPost');


Auth::routes();

// Route::get('/home', 'HomeController@home')->name('home');
Route::get('/admin', 'HomeController@index')->name('admin');
