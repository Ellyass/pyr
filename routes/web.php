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
Route::get('/welcome', function (){
   return view('welcome');
});



Route::get('/','Backend\LoginController@login')->name('nedmin.login');
Route::post('/login/authenticate','Backend\LoginController@authenticate')->name('login.authenticate');
Route::get('/logout','Backend\LoginController@logout')->name('logout');

Route::get('nedmin','Backend\DefaultController@index')->name('anasayfa')->middleware('Admin');

Route::get('nedmin/customer/index','Backend\CustomerController@index')->name('customer.index');
Route::get('nedmin/customer/add','Backend\CustomerController@add')->name('customer.add');
Route::post('nedmin/customer/insert','Backend\CustomerController@insert')->name('customer.insert');
Route::get('nedmin/customer/edit/{id}','Backend\CustomerController@edit')->name('customer.edit');
Route::post('nedmin/customer/edit/post/{id}','Backend\CustomerController@update')->name('customer.update');
Route::post('nedmin/customer/destroy/{id}','Backend\CustomerController@destroy')->name('customer.destroy');

Route::get('nedmin/email/index','Backend\CustomerEmailController@index')->name('email.index');
Route::get('nedmin/email/create','Backend\CustomerEmailController@create')->name('email.create');
Route::post('nedmin/email/create/post','Backend\CustomerEmailController@store')->name('email.post');
Route::get('nedmin/email/edit/{id}','Backend\CustomerEmailController@edit')->name('email.edit');
Route::post('nedmin/email/edit/post/{id}','Backend\CustomerEmailController@update')->name('email.edit.post');
Route::get('email/destroy/{customer_email}','Backend\CustomerEmailController@destroy')->name('email.destroy');

//Route::get('mail','Backend\MailController@index')->name('mail.index');

Route::get('offer/create','Backend\TeklifController@create')->name('offer_create');
Route::get('offers','Backend\TeklifController@index')->name('offer.index');
Route::post('offer/import','Backend\TeklifController@import')->name('offer.import');
Route::post('offer/query','Backend\TeklifController@jquery')->name('offer.jquery');
Route::post('offer/ajax/cron','Backend\TeklifController@ajax_cron')->name('ajax_cron');

Route::get('offer/edit/{id}','Backend\TeklifController@edit')->name('offer.edit');
Route::get('contract/upload/{id}','Backend\TeklifController@contract_upload')->name('contract_upload');
Route::post('offer/update/{id}','Backend\TeklifController@update')->name('offer.update');
Route::get('offer/status/{id}','Backend\TeklifController@status')->name('offer.status');
Route::post('offer/status/up/{id}','Backend\TeklifController@up')->name('status.up');
Route::get('offer/file/{id}','Backend\TeklifController@file')->name('offer.file');
Route::get('offer/report','Backend\TeklifController@report')->name('offer.report');
Route::post('offer/report/post','Backend\TeklifController@reportPost')->name('report.post');
Route::get('offer/delete/{id}','Backend\TeklifController@delete')->name('offer.delete');
Route::post('ikmetrik_pdf','Backend\TeklifController@ikmetrik')->name('ikmetrik.pdf');
Route::post('offers/delete/{id}','Backend\TeklifController@offer_detail_delete')->name('detail_offer_delete');

//Route::get('offer/file/{id}','Backend\TeklifController@file')->name('offer.file');
Route::get('zirve_upload','Backend\ZirveController@index')->name('file.index');
Route::post('zirve_upload/post','Backend\ZirveController@file')->name('file.import');
Route::post('zirve_upload/excell','Backend\ZirveController@excell')->name('excel.export');
Route::get('zirve_upload/report_get','Backend\ZirveController@report_get')->name('excel.report.get');
Route::post('zirve_upload/report_post','Backend\ZirveController@report_post')->name('excel.report.post');
Route::get('zirve_upload/excell_list','Backend\ZirveController@show')->name('excel.show');


Route::get('nedmin/masraf','Backend\CostController@index')->name('muhasebe.index');
Route::get('nedmin/masraf/create','Backend\CostController@create')->name('cost.create');
Route::post('nedmin/masraf/create/post','Backend\CostController@insert')->name('cost.create.post');
Route::post('nedmin/masraf/controll/post/{id}','Backend\CostController@controll')->name('cost.controll');
Route::get('nedmin/masraf/report','Backend\CosReportController@index')->name('cos.report.index');
Route::post('nedmin/masraf/report/post','Backend\CosReportController@show')->name('cos.report.post');
Route::post('cost_delete','Backend\CostController@delete')->name('cost.delete');

Route::get('nedmin/masraf/personell','Backend\CostController@new')->name('cost.personel.create');
Route::post('nedmin/masraf/personell/post','Backend\CostController@newPost')->name('cost.personel.create.post');


Route::get('nedmin/form/{id}','Backend\CostController@form')->name('form');
Route::get('nedmin/form/create/{id}','Backend\CostController@form_create')->name('form.create');
Route::post('nedmin/form/create/post','Backend\CostController@add')->name('form.create.post');
Route::get('nedmin/form/show/{id}','Backend\CostController@show')->name('form.show');
Route::get('nedmin/form/form/edit/{id}','Backend\CostController@form_edit')->name('form.edit');
Route::post('nedmin/form/update/post/{id}','Backend\CostController@form_update')->name('form.update');

Route::get('office','Backend\OfficeController@index')->name('office.index');
Route::get('office/create/{id}','Backend\OfficeController@create')->name('office.create');
Route::post('office/create/post','Backend\OfficeController@insert')->name('office.insert');
Route::post('office/mounth/create/post','Backend\OfficeController@add')->name('office.mounth');


Route::get('target_create','Backend\TargetController@index')->name('target.index');
Route::post('target_create/post','Backend\TargetController@target_create')->name('target_create');
Route::get('target_create/personel_show/{id}','Backend\TargetController@show')->name('personel.show');
Route::post('target_create/detail','Backend\TargetController@detail')->name('personel_detail');





Route::get('users_index','Backend\UsersController@index')->name('users.index');
Route::get('users_index2/{id}','Backend\UsersController@login')->name('users.index2');



Route::get('documention_index','Backend\DocumentController@index')->name('document.index');
Route::get('pdf_index','Backend\DocumentController@pdf')->name('pdf.index');
Route::post('pdf_ikmetrik','Backend\DocumentController@ikmetrik_pdf_data')->name('pdf.ikmetrik');
Route::post('pdf_kvkk','Backend\DocumentController@kvkk_pdf_data')->name('pdf.kvkk');
Route::get('pdf_egitim','Backend\DocumentController@egitim_pdf_data')->name('pdf.egitim');
Route::post('pdf_danismanlik','Backend\DocumentController@danismanlik_pdf_data')->name('pdf.danismanlik');
Route::post('pdf_tesvik','Backend\DocumentController@tesvik_pdf_data')->name('pdf.tesvik');
Route::post('pdf_bordrolama','Backend\DocumentController@bordrolama_pdf_data')->name('pdf.bordrolama');
Route::post('pdf_iys','Backend\DocumentController@iys_pdf_data')->name('pdf.iys');
Route::post('pdf_performans','Backend\DocumentController@pdf_performans')->name('pdf.performans');


Route::get('cron_30dk','Backend\CronController@cron_30dk')->name('cron_30dk');
Route::get('cron_one_week','Backend\CronController@cron_one_week')->name('cron_one_week');
Route::get('cron_two_week','Backend\CronController@cron_two_week')->name('cron_two_week');

Route::get('notification','Backend\NotificationController@index')->name('notification.index');


Route::get('ikmetrik_notification','Backend\IkmetrikController@index')->name('ikmetrik.index');
Route::post('ikmetrik_create','Backend\IkmetrikController@demo_create')->name('ikmetrik.create');
Route::get('ikmetrik_demo_delete/{id}','Backend\IkmetrikController@delete')->name('demo.delete');



Route::get('ikmetrik_cron','Backend\IkmetrikCronController@cron_30dk')->name('cron');



Route::get('mailchimp','MailChimpController@index');
Route::post('mailchimpDelete','MailChimpController@mailchimpDelete')->name('mailchimpDelete');

Route::get('mailsend','MailSendController@index');
Route::post('mailsendpost','MailSendController@mailSend')->name('sendpost');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

\Illuminate\Support\Facades\Auth::routes();
