<?php


Route::view('/', 'welcome')->name('home');
Route::view('/about-us', 'about')->name('about');
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/cookies', 'cookies')->name('cookies');
Route::view('/terms', 'terms')->name('terms');
Route::view('/contact', 'contact')->name('contact');
Route::view('/payment-plan', 'payment-plan')->name('payment-plan');
Auth::routes();
Route::post('register','UserController@userRegister')->name('userRegister');




Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');;
Route::view('/writer', 'writer')->middleware('auth:writer');

Route::get('auth/callback/{provider}', 'SocialAuthController@callback');
Route::get('auth/redirect/{provider}', 'SocialAuthController@redirect');