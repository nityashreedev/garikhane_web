<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('store_fcm', 'API\Admin\RegisterController@get_fcm');
Route::get('homepage', 'API\HomepageController@homepage');
Route::get('events', 'API\EventController@index');
Route::get('events/detail', 'API\EventController@eventdetail');
Route::get('jobs', 'API\JobController@index');
Route::get('jobs/detail', 'API\JobController@jobdetail');
Route::get('jobs-filter', 'API\JobController@jobFilter');
Route::get('aboutus', 'API\PageController@aboutus');
Route::get('banner', 'API\PageController@banner');
Route::get('popup', 'API\PageController@popup');

Route::get('commite', 'API\PageController@commite');
Route::get('board', 'API\PageController@board');
Route::get('link', 'API\PageController@link');
Route::get('garikhane/intro', 'API\PageController@garikhaneIntro');
Route::get('program', 'API\PageController@program'); 
Route::get('program/detail', 'API\PageController@programdetail');

Route::get('notice', 'API\PageController@notice');
Route::get('news', 'API\PageController@news');
Route::get('news-press/detail', 'API\PageController@newspress');
Route::get('press', 'API\PageController@press');
Route::get('digital-library', 'API\PageController@digitallibrary');

Route::get('gallerycategory', 'API\PageController@gallerycategory');
Route::get('gallery', 'API\PageController@gallery');
Route::get('pdf', 'API\PageController@pdf');
Route::post('downloadfilepdf', 'API\PageController@downloadpdf');
Route::post('downloadfiledigital', 'API\PageController@downloaddigital');

Route::post('contact', 'API\PageController@contact');

Route::get('partner', 'API\PageController@partner');
Route::get('faq', 'API\PageController@faq');
Route::get('faq/file/download', 'API\PageController@faqdownload');

//Route for testing
Route::post('test', 'API\TestController@testform');
Route::post('print-json', 'API\TestController@printjson');
Route::get('notify', 'API\TestController@test');
Route::get('userDeletion', 'API\Admin\SocialLoginController@dataDeletionCallback');


Route::get('location', 'API\PageController@location'); 
Route::get('bank', 'API\PageController@bank');
Route::get('bank/detail', 'API\PageController@bankdetail');
Route::get('garikhanneproject', 'API\ProjectController@garikhanneproject');
Route::get('garikhanneproject/detail', 'API\ProjectController@garikhanneprojectdetail');
Route::get('projectideabank', 'API\ProjectController@projectideabank');
Route::get('projectideabank/detail', 'API\ProjectController@projectideabankdetail');
Route::post('register','API\Admin\RegisterController@register');
Route::post('login','API\Admin\LoginController@login');
Route::post('forget-password','API\Admin\LogoutController@forgetPassword');
Route::get('testimonial', 'API\PageController@testimonial');
Route::get('testimonial/detail', 'API\PageController@testimonialdetail');
// Route::get('pradesh', 'API\PageController@pradesh');
Route::get('redirect/{provider}','API\Admin\SocialLoginController@redirect');
    Route::post('callback','API\Admin\SocialLoginController@callback');

  

Route::group(['middleware' => ['apilogin']], function () {
    Route::post('logout','API\Admin\LogoutController@logout');
    Route::post('change-password','API\Admin\LogoutController@changePassword');
     Route::post('interested','API\EventController@interested');
     
     Route::post('karmabhomiform','API\FormController@karmabhomiform');
     Route::post('karmabhomiformedit','API\FormController@karmabhomiformedit');
      Route::get('karmabhomiuserform','API\FormController@karmabhomiuserform');
      Route::get('getKarmabhomiForm', 'API\FormController@karmabhomiuserform');

    //   Route for notificaitons
     Route::get('notifications', 'API\ProjectController@notifications');
     
     Route::post('entreprenureform','API\FormController@entreprenureform');
     Route::post('entreprenureformedit','API\FormController@entreprenureformedit');
     Route::get('mentoruserform','API\FormController@mentoruserform');
     Route::get('enterprenureuserform','API\FormController@enterprenureuserform');
     
     Route::get('pradesh','API\FormController@pradesh');
     Route::get('district','API\FormController@pradeshdistrict');
     Route::get('municipality','API\FormController@districtvdc');
     
     Route::post('mentorformedit','API\FormController@mentorformedit');
      Route::post('mentorform','API\FormController@mentorform');
      Route::get('formstatus','API\FormController@formstatus');
      Route::post('user/profile','API\Admin\LogoutController@userprofile');
      Route::get('user/profile/detail','API\Admin\LogoutController@userprofiledetail');
      
      Route::post('job/user/apply', 'API\JobController@jobapplyuserstore');
       Route::get('job/provider/joblist', 'API\JobController@getusercreatedjobs');
        Route::post('job/provider/create/job', 'API\JobController@userjobstore');
         Route::post('job/provider/update/job', 'API\JobController@userjobupdate');
          Route::get('job/provider/delete/job', 'API\JobController@userjobdelete');
        Route::get('job/provider/jobinteresteduser', 'API\JobController@jobinteresteduser');
});