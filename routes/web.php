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

Route::get('/', 'CompanyController@index')->name('welcome');

Route::get('/about', 'CompanyController@about')->name('about');

Route::get('/career', 'CompanyController@career')->name('career');

Route::get('/portfolio','CompanyController@portfolio')->name('portfolio');

Route::get('/investors','CompanyController@investors')->name('investors');

Route::get('/media','CompanyController@media')->name('media');

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


Route::get('/admin/financial-information','AdminController@financialInfo')->name('financialInfo');

Route::get('/admin/financial-information/new','AdminController@financialInfoNew')->name('financialInfo');

Route::post('/admin/financial-information/new','AdminController@postFinancialInfoNew')->name('adminVacancyPost');


Route::get('/admin/conference','AdminController@conference')->name('conference');

Route::get('/admin/conference/new','AdminController@conferenceNew')->name('conferenceNew');

Route::post('/admin/conference/new','AdminController@postConferenceNew')->name('postConferenceNew');


Route::get('/admin/blog','AdminController@blog')->name('blog');

Route::get('/admin/blog/new','AdminController@blogNew')->name('blogNew');

Route::post('/admin/blog/new','AdminController@postBlogNew')->name('postBlogNew');


Route::get('/admin/gallery','AdminController@gallery')->name('gallery');

Route::get('/admin/gallery/new','AdminController@galleryNew')->name('galleryNew');

Route::post('/admin/gallery/new','AdminController@postGalleryNew')->name('postGalleryNew');


Route::get('/admin/press','AdminController@press')->name('press');

Route::get('/admin/press/new','AdminController@pressNew')->name('pressNew');

Route::post('/admin/press/new','AdminController@postPressNew')->name('postPressNew');


Route::get('/admin/subsidiaries','AdminController@subsidiary')->name('subsidiary');

Route::get('/admin/subsidiaries/new','AdminController@subsidiaryNew')->name('subsidiaryNew');

Route::post('/admin/subsidiaries/new','AdminController@postSubsidiaryNew')->name('postSubsidiaryNew');


Route::get('/admin/governance','AdminController@governance')->name('governance');

Route::get('/admin/governance/directors','AdminController@directors')->name('governance');

Route::get('/admin/governance/portfolios','AdminController@port')->name('governance');

Route::get('/admin/governance/management','AdminController@management')->name('governance');


Route::get('/admin/governance/new','AdminController@govenranceNew')->name('governanceNew');

Route::post('/admin/governance/new','AdminController@postGovernanceNew')->name('postGovernanceNew');



Route::get('/admin/faq','AdminController@faq')->name('faq');

Route::get('/admin/faq/general','AdminController@generalFaq')->name('faq');

Route::get('/admin/faq/career','AdminController@careerFaq')->name('faq');

Route::get('/admin/faq/investor','AdminController@investorFaq')->name('faq');

Route::get('/admin/faq/new','AdminController@faqNew')->name('faqNew');

Route::post('/admin/faq/new','AdminController@postFaqNew')->name('faqNew');


Auth::routes();

// Route::get('/home', 'HomeController@home')->name('home');
Route::get('/admin', 'HomeController@index')->name('admin');
