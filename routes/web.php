<?php

Route::get('/','AppController@index')->name('accueil');
Route::get('/news','NewsController@index')->name('news.index');
Route::livewire('/contact-user/{user}', 'contact-page')->name('Contact.index');
Route::post('/contact/user/{user}','ProfileController@contactUser')->name('Contact.user');
Route::get('/reservation/{action}/{annonce}/{user_id}','MessageController@show')->name('reservation');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/contact/{user}', 'ContactController@profile')->name('contact');

});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/google', 'Auth\LoginController@redirectToProvider')->name('redirect');

Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/facebook', 'facebooklogController@redirect')->name('facebook');

Route::get('/facebook/callback', 'facebooklogController@callback');

//Route::get('admin', 'Admin\UsersController@index')->middleware('auth')->name('admin');

Route::resource('packs', 'ColiController')->only('create','index','show', 'store');

Route::resource('travels', 'TravelController')->only('create','show', 'update', 'store');

Route::resource('profile', 'ProfileController')->only('index', 'edit','show','destroy');

Route::resource('comment', 'CommentController')->only('create','show', 'update', 'store');

Route::resource('message', 'MessageController')->only('create','show', 'update', 'store');
