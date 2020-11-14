<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

Route::get('/','AppController@index')->name('accueil');
Route::get('/howItWork','AppController@howItWork')->name('howItWork');
Route::view('/whoAreWe', '/pages/whoAreWe')->name('whoAreWe');
Route::view('/AGB', '/pages/agb')->name('AGB');
Route::view('/confidentialityCharter', '/pages/confidentialityCharter')->name('confidentialityCharter');
Route::view('/contactUs', '/pages/contactUs')->name('contactUs');
Route::view('/faq', '/pages/faq')->name('faq');
Route::view('/impressum', '/pages/impressum')->name('impressum');
Route::view('/principes', '/pages/principes')->name('principes');
Route::view('/termsOfservice', '/pages/termsOfservice')->name('termsOfservice');

Route::post('/getAllmessageWidth','MessageController@show')->name('messages.show');
Route::post('/contact/user/{user}','ProfileController@contactUser')->name('Contact.user');

Route::post('message/{to}/{from}','ContactController@sendMessage')->name('message.send')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/contact/{user}', 'ContactController@profile')->name('contact');
    Route::get('coli-form','postController@coliForm')->name('packs.create');
    Route::post('coli-form','postController@createColi')->name('post.colis.create');
    //travel
    Route::get('post/{post}/{user}','postController@bookingPost')->name('post.booking')->middleware('verified');
    Route::post('booking/{post}/{user}','postController@booking');
    Route::get('booking-confirmation/{user}/{post}','postController@bookingConfirm')->name('confirm');
    //coli
    Route::post('bookingPack/{post}/{user}','postController@bookingPack');
});

Route::get('travel-form','postController@travelForm')->name('travels.create')->middleware('auth');
Route::post('travel-form','postController@createTravel')->name('post.travels.create');

//news page
Route::get('/news','postController@index')->name('news.index');
Route::get('/travels','postController@travels');
Route::get('/packs','postController@packs');

Route::get('/message', 'ContactController@getChat')->name('message')->middleware('auth');
Route::get('/contacts', 'ContactController@get');
Route::get('/conversation/{id}', 'ContactController@getMessagesFor');
Route::post('/conversation/send', 'ContactController@send');

Auth::routes(['verify' => true]);

//notifications
Route::post('resetAllunreadNotifications', 'NotificationsController@update')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');

Route::get('/google', 'Auth\LoginController@redirectToProvider')->name('google');

Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/facebook', 'facebooklogController@redirect')->name('facebook');

Route::get('/{any}', 'profileController@show')->where('any', '.*');
