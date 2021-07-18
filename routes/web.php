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

Route::get('notify', 'API\TestController@test');

Route::get('/','HomeController@index');
Route::get('banking','Frontend\PageController@banking');
Route::get('banking/page/{id}','Frontend\PageController@singlebanking');
Route::get('aboutus','Frontend\PageController@about');

Route::get('events','Frontend\PageController@events');
Route::get('commitemember','Frontend\PageController@commite');
Route::get('boardmember','Frontend\PageController@board');
// routes for state commites
Route::get('state1/commite', 'Frontend\StateCommitteController@state1');
Route::get('state2/commite', 'Frontend\StateCommitteController@state2');
Route::get('bagmati/commite', 'Frontend\StateCommitteController@bagmati');
Route::get('gandaki/commite', 'Frontend\StateCommitteController@gandaki');
Route::get('lumbini/commite', 'Frontend\StateCommitteController@lumbini');
Route::get('karnali/commite', 'Frontend\StateCommitteController@karnali');
Route::get('sudurpaschim/commite', 'Frontend\StateCommitteController@sudurpaschim'); 



Route::get('link','Frontend\PageController@link');
Route::get('garkhanne/project','Frontend\PageController@garikhaneproject');
Route::get('project/idea/bank','Frontend\PageController@projectideabank');
Route::get('garkhanne/project/details/{id}','Frontend\PageController@garikhaneprojectdetail');
Route::get('project/idea/bank/detail/{id}','Frontend\PageController@projectbankdetail');
Route::get('project/idea/bank/pdf/{id}','Frontend\PageController@projectbankpdfdownload');
Route::get('jobs','Frontend\PageController@jobs');
Route::get('reply','Frontend\PageController@reply');
Route::get('pdf','Frontend\PageController@pdf');

Route::get('faq','Frontend\PageController@faq');
Route::get('faq/file/download/{id}','Frontend\PageController@faqdownload');

Route::get('pdf/download/{id}','Frontend\PageController@pdfdownload');
Route::get('notice','Frontend\PageController@notice');
Route::get('notice/detail/{id}','Frontend\PageController@noticedetail');
Route::get('testimonial/{id}','Frontend\PageController@testimonials');
Route::get('testimonial','Frontend\PageController@testimonial');

Route::get('news','Frontend\PageController@news');
Route::get('press','Frontend\PageController@press');
Route::get('press/{id}','Frontend\PageController@pressdetail');
Route::get('news/{id}','Frontend\PageController@newsdetail');
Route::get('gallery/{id}','Frontend\PageController@gallery');
Route::get('image-category','Frontend\PageController@imagecategory');

Route::get('program/{id}','Frontend\PageController@programdetail');
Route::get('entrepreneurship','Frontend\PageController@entrepreneurshipProcess');


Route::get('garikhane', 'Frontend\PageController@garikhaneIntro');
Route::get('garikhane-app-form','Frontend\FormController@karmabhomiform')->middleware('auth');
Route::post('karmabhomi/form/submission','Frontend\FormController@karmabhomiformsubmission')->middleware('auth');
Route::post('karmabhomi/form/submission/{id}','Frontend\FormController@karmabhomiformsubmissionupdate')->middleware('auth');
Route::get('garikhane-form','Frontend\FormController@getKarmabhomiForm')->middleware('auth')->name('karmabhomi_form');

Route::post('enterprenure/form/submission','Frontend\PageController@entreprenureformsubmission');
Route::post('mentor/form/submission','Frontend\PageController@mentorformsubmission');
Route::post('contact/form','Frontend\PageController@contactus');
Route::get('page/{value}/{id}','Frontend\PageController@singlepage');
Route::get('partners','Frontend\PageController@partners');
Route::post('interested/user','Frontend\PageController@userevent');
Route::post('user/event','Frontend\PageController@userevent')->middleware('auth');
     Route::post('user/profile/{id}' , 'Frontend\PageController@userprofile');
     Route::get('user/profile','Frontend\PageController@user');
     Route::get('contactus','Frontend\PageController@contact');
     Route::post('enterprenure/form/submission/{id}','Frontend\PageController@entreprenureformsubmissionupdate')->middleware('auth');
     Route::post('mentor/form/submission/{id}','Frontend\PageController@mentorformsubmissionupdate')->middleware('auth');
Auth::routes();
Route::get('mentor', 'Frontend\FormController@mentorform')->middleware('auth');
    Route::post('pradesh', 'Frontend\FormController@pradeshdistrict')->middleware('auth');
    Route::post('district', 'Frontend\FormController@districtvdc')->middleware('auth');
    Route::get('apply/job', 'Frontend\ProgramController@jobapply')->middleware('auth');
      Route::post('apply/job/store', 'Frontend\ProgramController@storeapplyuser')->middleware('auth');
      
      Route::get('applied/coverletter/{id}/{value}','Frontend\ProgramController@coverletter')->middleware('auth');
       Route::get('job/provider', 'Frontend\ProgramController@getuserjobs')->middleware('auth');
       Route::get('job/provider/create-job', 'Frontend\ProgramController@jobproviderjobcreate')->middleware('auth');
       Route::post('job/provider/create-job/store', 'Frontend\ProgramController@jobstore')->middleware('auth');
       Route::get('job/provider/create-job/edit/{id}', 'Frontend\ProgramController@jobedit')->middleware('auth');
       Route::post('job/provider/create-job/update/{id}', 'Frontend\ProgramController@jobupdate')->middleware('auth');
       Route::get('job/provider/create-job/delete/{id}', 'Frontend\ProgramController@jobdelete')->middleware('auth');
       Route::get('job/provider/jobapplicant/list/{id}', 'Frontend\ProgramController@jobinteresteduser')->middleware('auth');
      
    Route::get('entreprenure', 'Frontend\FormController@entreprenureform')->middleware('auth');
//Route::get('/home', 'dashboardController@index')->name('home');
Route::get('/admin', function () {
    return redirect('/admin/dashboard');

})->middleware('adminlogin');

//  Route::get('/admin/ck', function () {
//     return view('admin.faq.cratedssss');
//  });
Route::get('/home', function () {
    return redirect('/admin/dashboard');
})->middleware('adminlogin');

Route::get('comming', function () {
    return view('newpage.comming');
});
Route::get('commings', function () {
    return view('newpage.comming');
});

Route::get('policies', function(){
    return view('newpage.policies');
});

Route::get('redirect/{provider}','Frontend\SocialLoginController@redirect');
    Route::get('callback/{provider}','Frontend\SocialLoginController@callback');

    Route::get('control', function () {
        return view('auth.adminlogin');
    });
   
   

Route::group(['middleware' => ['auth','adminlogin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('form/karmabhomi/reply/{id}', 'FormController@karmabhomireply');
    Route::post('karmabhomi/{id}/status', 'FormController@karmabhomistatus');
    Route::post('form/karmabhomi/reply/message', 'FormController@karmabhomireplymessage'); 
    Route::get('excel/karmabhomi/download','DashboardController@karmabhomiexcel');  
    Route::get('karmabhomi/view/{id}', 'DashboardController@karmabhomipdf');
    Route::get('karmabhomi/download/{id}', 'DashboardController@karmabhomidownload');
    Route::post('karmabhomi/{id}/delete', 'FormController@karmabhomidelete');

    //Route for notifications
    Route::get('notification', 'NotificationController@index');
    Route::get('notification/{id}/delete', 'NotificationController@destroy');
    
    Route::get('garikhanePageDetails','GarikhanePageController@index')->name('garikhane.page');
    Route::post('create/garikhanePage', 'GarikhanePageController@store')->name('create.garikhane.page');
    Route::put('update/garikhanePage/{id}', 'GarikhanePageController@update')->name('update.garikhane.page');

    // Route for entrepreneurship process page
    Route::get('entrepreneurshipPageDetails','EntrepreneurshipProcessController@index')->name('entrepreneurship.page');
    Route::post('create/entrepreneurship', 'EntrepreneurshipProcessController@store')->name('create.entrepreneurship.page');
    Route::put('update/entrepreneurship/{id}', 'EntrepreneurshipProcessController@update')->name('update.entrepreneurship.page');


     
    Route::get('form/reply/{id}', 'FormController@entrreply');
    Route::post('entreprenure/{id}/status', 'FormController@entrstatus');
    Route::post('mentors/{id}/status', 'FormController@mentorstatus');
    Route::post('form/reply/message', 'FormController@entrreplymessage');
    Route::get('mentorform/reply/{id}', 'FormController@mentorreply');
    Route::get('citizen/download/{name}', 'FormController@citizendownload');
    Route::post('mentorform/reply/message', 'FormController@mentorreplymessage');
    Route::get('view/file/{id}', 'FormController@viewpdf');
    Route::get('excel/mentor/download','DashboardController@mentorexcel');
    Route::get('excel/enterprenure/download','DashboardController@entreprenureexcel');  

    Route::get('dashboard', 'DashboardController@index');
    Route::get('user/setting', 'DashboardController@usersetting');
     Route::get('contact/enquire', 'DashboardController@contactinquire');
     Route::get('contact/view/{id}', 'DashboardController@viewContact')->name('view.contact');
      Route::get('contact/enquire/{id}', 'DashboardController@contactinquiredelete');
       Route::get('contact/csv', 'DashboardController@contactinquirecsv');
    Route::get('entreprenure/form/submission', 'DashboardController@entreprenurelist');
     Route::get('karmabhomi/form/submission', 'DashboardController@karmabhomilist');
    Route::get('mentor/form/submission', 'DashboardController@mentorlist');
    Route::get('entreprenure/view/{id}', 'DashboardController@entreprenurepdf');
    Route::get('entreprenure/download/{id}', 'DashboardController@entrdownload');
    Route::get('mentor/download/{id}', 'DashboardController@mentordownload');
    Route::get('mentor/view/{id}', 'DashboardController@mentorpdf');
    Route::post('user/setting/{id}', 'DashboardController@usersettingupdate');
    Route::get('users', 'UserController@index');
    Route::get('users/create', 'UserController@create');
    Route::post('users/store' , 'UserController@store');
    Route::get('users/{id}/edit', 'UserController@edit');
    Route::post('users/update/{id}', 'UserController@update');
    Route::delete('users/{id}/delete', 'UserController@delete');
  
    Route::get('changeStatus','UserController@changestatus');

    Route::get('menu','MenuController@menu')->name('menu');
    Route::get('/wmenuindex', array('as' => 'wmenuindex','uses'=>'MenuController@wmenuindex'));

Route::post('/addcustommenur', array('as' => 'addcustommenur','uses'=>'MenuController@addcustommenu'));
Route::post('/deleteitemmenur', array('as' => 'deleteitemmenur','uses'=>'MenuController@deleteitemmenu'));
Route::post('/deletemenugr', array('as' => 'deletemenugr','uses'=>'MenuController@deletemenug'));
Route::post('/createnewmenur ', array('as' => 'createnewmenur ','uses'=>'MenuController@createnewmenu'));
Route::post('/generatemenucontrolr', array('as' => 'generatemenucontrolr','uses'=>'MenuController@generatemenucontrol'));
Route::post('/updateitemr', array('as' => 'updateitemr','uses'=>'MenuController@updateitem'));
Route::get('/addcustommenur', array('as' => 'addcustommenur','uses'=>'MenuController@addcustommenu'));
Route::get('/deleteitemmenur', array('as' => 'deleteitemmenur','uses'=>'MenuController@deleteitemmenu'));
Route::get('/deletemenugr', array('as' => 'deletemenugr','uses'=>'MenuController@deletemenug'));
Route::get('/createnewmenur ', array('as' => 'createnewmenur ','uses'=>'MenuController@createnewmenu'));
Route::get('/generatemenucontrolr', array('as' => 'generatemenucontrolr','uses'=>'MenuController@generatemenucontrol'));
Route::post('/updateitemr', array('as' => 'updateitemr','uses'=>'MenuController@updateitem'));



Route::get('location/create','LocationController@create');
    Route::get('locations','LocationController@index');
    Route::get('location/{id}/delete','LocationController@delete');
    Route::post('location/store/{id}', 'LocationController@update');
    Route::post('location/store', 'LocationController@store');
    
    Route::get('invite', 'InviteController@create');
    Route::get('invited-user', 'InviteController@index');
    Route::post('invite/store' , 'InviteController@store');
    Route::delete('invite/{id}/delete', 'InviteController@delete');

    Route::get('banner', 'BannerController@index');
    Route::get('banner/create','BannerController@create');
    Route::get('banner/{id}/edit','BannerController@edit');
    Route::post('banner/store' ,'BannerController@store');
    Route::post('banner/store/{id}','BannerController@update');
    Route::get('banner/{id}/delete', 'BannerController@delete');
    
    
    Route::get('faq', 'FAQController@index');
    Route::get('faq/create','FAQController@create');
    Route::get('faq/{id}/edit','FAQController@edit');
    Route::post('faq/store' ,'FAQController@store');
    Route::post('faq/store/{id}','FAQController@update');
    Route::get('faq/{id}/delete', 'FAQController@delete');
    
     Route::get('popup', 'PopupController@index');
    Route::get('popup/create','PopupController@create');
    Route::get('popup/{id}/edit','PopupController@edit');
    Route::post('popup/store' ,'PopupController@store');
    Route::post('popup/store/{id}','PopupController@update');
    Route::get('popup/{id}/delete', 'PopupController@delete');
     Route::get('popup/status', 'PopupController@status')->name('popup.update.status');
    
    Route::get('digital-library', 'DigitalLibraryController@index');
    Route::get('digital-library/create','DigitalLibraryController@create');
    Route::get('digital-library/{id}/edit','DigitalLibraryController@edit');
    Route::post('digital-library/store' ,'DigitalLibraryController@store');
    Route::post('digital-library/store/{id}','DigitalLibraryController@update');
    Route::get('digital-library/{id}/delete', 'DigitalLibraryController@delete');
    
    Route::get('gallery', 'GalleryController@index');
    Route::get('gallery/create','GalleryController@create');
    Route::get('gallery/{id}/edit','GalleryController@edit');
    Route::post('gallery/store' ,'GalleryController@store');
    Route::post('gallery/store/{id}','GalleryController@update');
    Route::get('gallery/{id}/delete', 'GalleryController@delete');
    
    Route::get('imagecategory', 'ImageCategoryController@index');
    Route::get('imagecategory/create','ImageCategoryController@create');
    Route::get('imagecategory/{id}/edit','ImageCategoryController@edit');
    Route::post('imagecategory/store' ,'ImageCategoryController@store');
    Route::post('imagecategory/store/{id}','ImageCategoryController@update');
    Route::get('imagecategory/{id}/delete', 'ImageCategoryController@delete');
    
    Route::get('notice', 'NoticeController@index');
    Route::get('notice/create','NoticeController@create');
    Route::get('notice/{id}/edit','NoticeController@edit');
    Route::post('notice/store' ,'NoticeController@store');
    Route::post('notice/store/{id}','NoticeController@update');
    Route::get('notice/{id}/delete', 'NoticeController@delete');
    Route::post('notice/{id}/status', 'NoticeController@status');
    Route::get('notice/{id}/notify', 'NoticeController@notifyUsers');
    
    Route::get('pdf', 'PdfController@index');
    Route::get('pdf/{id}/edit','PdfController@edit');
    Route::post('pdf/store' ,'PdfController@store');
    Route::post('pdf/store/{id}','PdfController@update');
    Route::get('pdf/{id}/delete', 'PdfController@delete');
    
    Route::get('link', 'LinkController@index');
    Route::post('link/store' ,'LinkController@store');
    Route::get('link/{id}/edit','LinkController@edit');
    Route::post('link/store/{id}','LinkController@update');
    Route::get('link/{id}/delete', 'LinkController@delete');
    
    Route::get('news', 'NewsController@index');
    Route::get('news/create','NewsController@create');
    Route::get('news/{id}/edit','NewsController@edit');
    Route::post('news/store' ,'NewsController@store');
    Route::post('news/store/{id}','NewsController@update');
    Route::get('news/{id}/delete', 'NewsController@delete');
    Route::post('news/{id}/status', 'Newscontroller@status');
    Route::get('news/{id}/notify', 'NewsController@notifyUsers');
    
    Route::get('commite', 'CommiteController@index');
    Route::get('commite/create','CommiteController@create');
    Route::get('commite/{id}/edit','CommiteController@edit');
    Route::post('commite/store' ,'CommiteController@store');
    Route::post('commite/store/{id}','CommiteController@update');
    Route::get('commite/{id}/delete', 'CommiteController@delete');

    Route::get('garikhanne/project', 'GariKhanneProjectController@index');
    Route::get('garikhanne/project/create','GariKhanneProjectController@create');
    Route::get('garikhanne/project/{id}/edit','GariKhanneProjectController@edit');
    Route::post('garikhanne/project/store' ,'GariKhanneProjectController@store');
    Route::post('garikhanne/project/store/{id}','GariKhanneProjectController@update');
    Route::get('garikhanne/project/{id}/delete', 'GariKhanneProjectController@delete');

    Route::get('testimonial', 'TestimonialController@index');
    Route::get('testimonial/create','TestimonialController@create');
    Route::get('testimonial/{id}/edit','TestimonialController@edit');
    Route::post('testimonial/store' ,'TestimonialController@store');
    Route::post('testimonial/store/{id}','TestimonialController@update');
    Route::get('testimonial/{id}/delete', 'TestimonialController@delete');

    Route::get('partner', 'PartnerController@index');
    Route::get('partner/create','PartnerController@create');
    Route::get('partner/{id}/edit','PartnerController@edit');
    Route::post('partner/store' ,'PartnerController@store');
    Route::post('partner/store/{id}','PartnerController@update');
    Route::get('partner/{id}/delete', 'PartnerController@delete');
    
    Route::get('service', 'ServiceController@index');
    Route::get('service/create','ServiceController@create');
    Route::get('service/{id}/edit','ServiceController@edit');
    Route::post('service/store' ,'ServiceController@store');
    Route::post('service/store/{id}','ServiceController@update');
    Route::get('service/{id}/delete', 'ServiceController@delete');

    Route::get('job', 'JobController@index');
    Route::get('job/create','JobController@create');
    Route::get('job/{id}/edit','JobController@edit');
    Route::post('job/store' ,'JobController@store');
    Route::post('job/store/{id}','JobController@update');
    Route::get('job/{id}/delete', 'JobController@delete');
     Route::get('job/intersted/{id}','JobController@interested');
     Route::post('job/{id}/status', 'JobController@status');
     Route::post('job/{id}/publish', 'JobController@publish');
     Route::get('job/{id}/notify', 'JobController@notifyUser');
     

    Route::get('event', 'EventController@index');
    Route::get('event/create','EventController@create');
    Route::get('event/{id}/edit','EventController@edit');
    Route::post('event/store' ,'EventController@store');
    Route::post('event/store/{id}','EventController@update');
    Route::get('event/{id}/delete', 'EventController@delete');
    Route::get('event/intersted/{id}','EventController@interested');
    Route::post('event/{id}/status', 'EventController@status');
    Route::get('event/{id}/notify', 'EventController@notifyUser');

    Route::get('project/idea/bank', 'ProjectBankController@index');
    Route::get('project/idea/bank/create','ProjectBankController@create');
    Route::get('project/idea/bank/{id}/edit','ProjectBankController@edit');
    Route::post('project/idea/bank/store' ,'ProjectBankController@store');
    Route::post('project/idea/bank/store/{id}','ProjectBankController@update');
    Route::get('project/idea/bank/{id}/delete', 'ProjectBankController@delete');

    Route::get('banking', 'BankingController@index');
    Route::get('banking/create','BankingController@create');
    Route::get('banking/{id}/edit','BankingController@edit');
    Route::post('banking/store' ,'BankingController@store');
    Route::post('banking/store/{id}','BankingController@update');
    Route::get('banking/{id}/delete', 'BankingController@delete');

    Route::get('setting', 'SettingController@index');
    Route::get('setting/{id}/edit','SettingController@edit');
    Route::post('setting/store' ,'SettingController@store');
    Route::post('setting/store/{id}','SettingController@update');


});
