<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcome_email;

Route::get('/','AppController@index')->name('accueil');
Route::get('/howItWork','AppController@howItWork')->name('howItWork');

Route::post('/getAllmessageWidth','MessageController@show')->name('messages.show');
Route::post('/contact/user/{user}','ProfileController@contactUser')->name('Contact.user');

Route::post('message/{to}/{from}','ContactController@sendMessage')->name('message.send')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/contact/{user}', 'ContactController@profile')->name('contact');
    Route::get('coli-form','postController@coliForm')->name('packs.create');
    Route::post('coli-form','postController@createColi')->name('post.colis.create');
    Route::get('post/{post}/{user}','postController@bookingPost')->name('post.booking')->middleware('verified');
    Route::post('booking/{post}/{user}','postController@booking');
    Route::get('booking-confirmation/{user}/{post}','postController@bookingConfirm')->name('confirm');
});

Route::get('travel-form','postController@travelForm')->name('travels.create')->middleware('auth');
Route::post('travel-form','postController@createTravel')->name('post.travels.create');
Route::get('/news','postController@index')->name('news.index');

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

//Route::get('/{any}', 'profileController@index')->where('any', '.*');
