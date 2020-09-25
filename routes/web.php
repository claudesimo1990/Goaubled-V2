<?php

Route::get('/','AppController@index')->name('accueil');

Route::post('/getAllmessageWidth','MessageController@show')->name('messages.show');
Route::post('/contact/user/{user}','ProfileController@contactUser')->name('Contact.user');

Route::post('message/{to}/{from}','ContactController@sendMessage')->name('message.send')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/contact/{user}', 'ContactController@profile')->name('contact');
});

Route::get('coli-form','postController@coliForm')->name('packs.create')->middleware('auth');
Route::post('coli-form','postController@createColi')->name('post.colis.create');
Route::get('post/{post}/{user}','postController@bookingPost')->name('post.booking')->middleware('auth');

Route::get('travel-form','postController@travelForm')->name('travels.create')->middleware('auth');
Route::post('travel-form','postController@createTravel')->name('post.travels.create');
Route::get('/news','postController@listeNews')->name('news.index');

Route::livewire('messages','chat-message')->name('messages.index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');

Route::get('/google', 'Auth\LoginController@redirectToProvider')->name('google');

Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/facebook', 'facebooklogController@redirect')->name('facebook');
