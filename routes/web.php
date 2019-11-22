<?php
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/terms', 'CompanyController@terms')->name('terms');

Route::get('/policy', 'CompanyController@policy')->name('policy');

Route::get('/disclosure', 'CompanyController@disclosure')->name('disclosure');

Route::post('/about', 'CompanyController@getDownload')->name('downlaod');

Route::get('/career', 'CompanyController@career')->name('career');

Route::get('/portfolio','CompanyController@portfolio')->name('portfolio');

Route::get('/investors','CompanyController@investors')->name('investors');

Route::get('/media','CompanyController@media')->name('media');

Route::get('/media/blog/{id}','CompanyController@blog')->name('media');

Route::get('/contact_us', 'CompanyController@contact')->name('contact');

Route::get('profile/{id}/{type}','CompanyController@profile')->name('profile');

Route::get('gallery/{id}','CompanyController@gallery')->name('gallery');

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

Route::post('/contact_us', function (Request $request) {
    Mail::send(new ContactMail($request));
    return redirect()->back()->with(['alert' => ' message sent']);
});


Route::get('/admin/about', 'AdminController@about')->name('adminAbout');

Route::post('/admin/about','AdminController@aboutEdit')->name('adminAboutPost');


Route::get('/admin/terms', 'AdminController@terms')->name('adminAbout');

Route::post('/admin/terms','AdminController@termsEdit')->name('adminAboutPost');

Route::get('/admin/disclosure', 'AdminController@disclosure')->name('adminAbout');

Route::post('/admin/disclosure','AdminController@disclosureEdit')->name('adminAboutPost');

Route::get('/admin/policy', 'AdminController@policy')->name('adminAbout');

Route::post('/admin/policy','AdminController@policyEdit')->name('adminAboutPost');


Route::get('/admin/profile', 'AdminController@profile')->name('profile');

Route::post('/admin/profile','AdminController@profileEdit')->name('profileEdit');


Route::get('/admin/quote', 'AdminController@quote')->name('quote');

Route::post('/admin/quote','AdminController@quoteEdit')->name('quoteEdit');


Route::get('/admin/contact', 'AdminController@contact')->name('quote');

Route::post('/admin/contact','AdminController@contactEdit')->name('quoteEdit');


Route::get('/admin/career', 'AdminController@career')->name('adminCareer');

Route::post('/admin/career', 'AdminController@careerEdit')->name('adminCareerPost');

Route::get('/admin/career/video', 'AdminController@careerVideo')->name('profile');

Route::post('/admin/career/video','AdminController@careerVideoEdit')->name('profileEdit');


Route::get('/admin/portfolio', 'AdminController@portfolio')->name('adminPortfolio');

Route::post('/admin/portfolio', 'AdminController@portfolioEdit')->name('adminPortfolioPost');


Route::get('/admin/history', 'AdminController@history')->name('adminHistory');

Route::post('/admin/history','AdminController@historyEdit')->name('adminHistoryPost');


Route::get('/admin/impact', 'AdminController@impact')->name('adminImpact');

Route::post('/admin/impact','AdminController@impactEdit')->name('adminImpactPost');



Route::get('/admin/vacancies', 'AdminController@vacancies')->name('adminVacancies');

Route::get('/admin/vacancies/new','AdminController@vacancy')->name('adminVacancyPost');

Route::post('/admin/vacancies/new','AdminController@newVacancy')->name('adminVacancyPost');

Route::get('/admin/vacancies/edit/{id}','AdminController@newVacancyEdit')->name('adminVacancyPost'); 

Route::post('/admin/vacancies/edit/{id}','AdminController@postNewVacancyEdit')->name('adminVacancyPost'); 



Route::get('/admin/portfolio/bridge','AdminController@bridgeVacancy')->name('adminPortfolioBridge');

Route::get('/admin/portfolio/anchoria','AdminController@anchoriaVacancy')->name('adminPortfolioBridge');

Route::get('/admin/portfolio/everdon','AdminController@everdonVacancy')->name('adminPortfolioBridge');



Route::get('/admin/services','AdminController@services')->name('adminServices');

Route::get('/admin/services/new','AdminController@newService')->name('adminServices');

Route::post('/admin/services/new','AdminController@addService')->name('adminServices');

Route::get('/admin/services/edit/{id}','AdminController@serviceEdit')->name('adminServices');

Route::post('/admin/services/edit/{id}','AdminController@postServiceEdit')->name('adminServices');

Route::get('/admin/services/delete/{id}','AdminController@postServiceDelete')->name('postFaqDelete');


Route::get('/admin/values','AdminController@values')->name('adminServices');

Route::get('/admin/values/new','AdminController@newValue')->name('adminServices');

Route::post('/admin/values/new','AdminController@addValue')->name('adminServices');

Route::get('/admin/values/delete/{id}','AdminController@postValueDelete')->name('postFaqDelete');




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

Route::get('/admin/financial-information/edit/{id}','AdminController@financialInfoEdit')->name('adminVacancyPost'); 

Route::post('/admin/financial-information/edit/{id}','AdminController@postFinancialInfoEdit')->name('adminVacancyPost'); 

Route::get('/admin/financial-information/delete/{id}','AdminController@postFinancialInfoDelete')->name('adminVacancyPost'); 


Route::get('/admin/conference','AdminController@conference')->name('conference');

Route::get('/admin/conference/new','AdminController@conferenceNew')->name('conferenceNew');

Route::post('/admin/conference/new','AdminController@postConferenceNew')->name('postConferenceNew');

Route::get('/admin/conference/edit/{id}','AdminController@conferenceEdit')->name('adminVacancyPost'); 

Route::post('/admin/conference/edit/{id}','AdminController@postConferenceEdit')->name('adminVacancyPost'); 

Route::get('/admin/conference/delete/{id}','AdminController@postConferenceDelete')->name('adminVacancyPost'); 



Route::get('/admin/blog','AdminController@blog')->name('blog');

Route::get('/admin/blog/new','AdminController@blogNew')->name('blogNew');

Route::post('/admin/blog/new','AdminController@postBlogNew')->name('postBlogNew');

Route::get('/admin/blog/edit/{id}','AdminController@blogEdit')->name('adminVacancyPost'); 

Route::post('/admin/blog/edit/{id}','AdminController@postBlogEdit')->name('adminVacancyPost'); 


Route::get('/admin/blog/delete/{id}','AdminController@postBlogDelete')->name('postBlogDelete');



Route::get('/admin/gallery','AdminController@gallery')->name('gallery');

Route::get('/admin/gallery/new','AdminController@galleryNew')->name('galleryNew');

Route::post('/admin/gallery/new','AdminController@postGalleryNew')->name('postGalleryNew');

Route::get('/admin/gallery/edit/{id}','AdminController@galleryEdit')->name('adminVacancyPost'); 

Route::post('/admin/gallery/edit/{id}','AdminController@postGalleryEdit')->name('adminVacancyPost'); 

Route::get('/admin/gallery/delete/{id}','AdminController@postGalleryDelete')->name('postFaqDelete');



Route::get('/admin/videos','AdminController@video')->name('gallery');

Route::get('/admin/videos/new','AdminController@videoNew')->name('galleryNew');

Route::post('/admin/videos/new','AdminController@postVideoNew')->name('postGalleryNew');

Route::get('/admin/videos/edit/{id}','AdminController@videoEdit')->name('adminVacancyPost'); 

Route::post('/admin/videos/edit/{id}','AdminController@postVideoEdit')->name('adminVacancyPost'); 

Route::get('/admin/videos/delete/{id}','AdminController@postVideoDelete')->name('postFaqDelete');


Route::get('/admin/press','AdminController@press')->name('press');

Route::get('/admin/press/new','AdminController@pressNew')->name('pressNew');

Route::post('/admin/press/new','AdminController@postPressNew')->name('postPressNew');

Route::get('/admin/press/edit/{id}','AdminController@pressEdit')->name('adminVacancyPost'); 

Route::post('/admin/press/edit/{id}','AdminController@postPressEdit')->name('adminVacancyPost'); 

Route::get('/admin/press/delete/{id}','AdminController@postPressDelete')->name('adminVacancyPost'); 




Route::get('/admin/subsidiaries','AdminController@subsidiary')->name('subsidiary');

Route::get('/admin/subsidiaries/new','AdminController@subsidiaryNew')->name('subsidiaryNew');

Route::post('/admin/subsidiaries/new','AdminController@postSubsidiaryNew')->name('postSubsidiaryNew');

Route::get('/admin/subsidiaries/edit/{id}','AdminController@newSubsidiaryEdit')->name('adminVacancyPost'); 

Route::post('/admin/subsidiaries/edit/{id}','AdminController@postNewSubsidiaryEdit')->name('adminVacancyPost'); 

Route::get('/admin/subsidiaries/delete/{id}','AdminController@postSubsidiaryDelete')->name('postFaqDelete');



Route::get('/admin/governance','AdminController@governance')->name('governance');

Route::get('/admin/governance/directors/edit/{id}','AdminController@directorsEdit')->name('adminVacancyPost'); 

Route::post('/admin/governance/directors/edit/{id}','AdminController@postDirectorsEdit')->name('adminVacancyPost'); 

Route::get('/admin/governance/directors','AdminController@directors')->name('governance');

Route::get('/admin/governance/directors/delete/{id}','AdminController@postDirectorsDelete')->name('postFaqDelete');

Route::post('/admin/governance/directors/rank/{id}','AdminController@postDirectorsRank')->name('postFaqDelete');


Route::get('/admin/governance/portfolios','AdminController@port')->name('governance');

Route::get('/admin/governance/portfolios/edit/{id}','AdminController@portEdit')->name('adminVacancyPost'); 

Route::post('/admin/governance/portfolios/edit/{id}','AdminController@postPortEdit')->name('adminVacancyPost'); 

Route::get('/admin/governance/portfolios/delete/{id}','AdminController@postPortDelete')->name('postFaqDelete');

Route::post('/admin/governance/portfolios/rank/{id}','AdminController@postPortRank')->name('postFaqDelete');



Route::get('/admin/governance/management','AdminController@management')->name('governance');

Route::get('/admin/governance/management/edit/{id}','AdminController@managementEdit')->name('adminVacancyPost'); 

Route::post('/admin/governance/management/edit/{id}','AdminController@postManagementEdit')->name('adminVacancyPost'); 


Route::get('/admin/governance/management/delete/{id}','AdminController@postManagementDelete')->name('postFaqDelete');

Route::post('/admin/governance/management/rank/{id}','AdminController@postManagementRank')->name('postFaqDelete');




Route::get('/admin/governance/new','AdminController@govenranceNew')->name('governanceNew');

Route::post('/admin/governance/new','AdminController@postGovernanceNew')->name('postGovernanceNew');





Route::get('/admin/faq','AdminController@faq')->name('faq');

Route::get('/admin/faq/general','AdminController@generalFaq')->name('faq');

Route::get('/admin/faq/career','AdminController@careerFaq')->name('faq');

Route::get('/admin/faq/investor','AdminController@investorFaq')->name('faq');

Route::get('/admin/faq/new','AdminController@faqNew')->name('faqNew');

Route::post('/admin/faq/new','AdminController@postFaqNew')->name('faqNew');

Route::get('/admin/faq/edit/general/{id}','AdminController@faqGeneralEdit')->name('adminVacancyPost'); 

Route::get('/admin/faq/edit/career/{id}','AdminController@faqCareerEdit')->name('adminVacancyPost'); 

Route::get('/admin/faq/edit/investor/{id}','AdminController@faqInvestorEdit')->name('adminVacancyPost'); 

Route::post('/admin/faq/edit/{id}','AdminController@postFaqEdit')->name('adminVacancyPost'); 

Route::get('/admin/faq/delete/{id}','AdminController@postFaqDelete')->name('postFaqDelete');


Route::get('/admin/culture','AdminController@culture')->name('culture');

Route::get('/admin/culture/edit','AdminController@cultureEdit')->name('culture');

Route::post('/admin/culture/edit','AdminController@culturePostEdit')->name('culture');

Route::get('/admin/mission','AdminController@mission')->name('culture');

Route::post('/admin/mission','AdminController@postMission')->name('culture');

Route::get('/admin/vision','AdminController@vision')->name('culture');

Route::post('/admin/vision','AdminController@postVision')->name('culture');



Route::get('/admin/subscribers','AdminController@subscribers')->name('subscribers');
Route::get('export', 'AdminController@export');


Route::get('/admin/banner/about', 'AdminController@aboutBanner')->name('banner');

Route::get('/admin/banner/landing', 'AdminController@landingBanner')->name('banner');

Route::get('/admin/banner/contact', 'AdminController@contactBanner')->name('banner');

Route::get('/admin/banner/career', 'AdminController@careerBanner')->name('banner');

Route::get('/admin/banner/investor', 'AdminController@investorBanner')->name('banner');

Route::get('/admin/banner/media', 'AdminController@mediaBanner')->name('banner');

Route::get('/admin/banner/portfolio', 'AdminController@portfolioBanner')->name('banner');

Route::post('/admin/banner','AdminController@postBanner')->name('baner');




Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
