<?php

Route::get('/','AppController@index')->name('accueil');

Route::get('/news','NewsController@index')->name('news.index');
Route::post('/getAllmessageWidth','MessageController@show')->name('messages.show');
Route::post('/contact/user/{user}','ProfileController@contactUser')->name('Contact.user');

Route::get('reservation/travels/{user}/{travel}','ContactController@showUserTravels')->name('travels.reservation')->middleware('auth');
Route::get('reservation/packs/{user}/{coli}','ContactController@showUserPacks')->name('packs.reservation')->middleware('auth');
Route::post('message/{to}/{from}','ContactController@sendMessage')->name('message.send')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {Route::get('/contact/{user}', 'ContactController@profile')->name('contact');
});

Route::livewire('travels/create','travel-create')->name('travels.create')->middleware('auth');
Route::livewire('packs/create','packs-create')->name('packs.create');
Route::livewire('messages','chat-message')->name('messages.index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/google', 'Auth\LoginController@redirectToProvider')->name('redirect');

Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/facebook', 'facebooklogController@redirect')->name('facebook');

