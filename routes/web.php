<?php

use App\Models\User;
use App\Notifications\AdminEmailNotification;
use App\Notifications\PasswordResetNotification;
use App\Notifications\UserEmailNotification;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('routes', function() {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';
});

Route::group(['namespace' => 'Front', 'prefix' => '{locale?}', 'where' => ['locale' => '(?!admin)*[a-z]{2}'],], function() {
    Route::get('/', 'IndexController@index')->name('index');

    // Contact page
    Route::get('kontakt', 'ContactController@index')->name('contact');
    Route::post('kontakt', 'ContactController@form')->name('contact.form');

    Route::group(['prefix'=>'/aktualnosci/', 'as' => 'front.news.'], function() {
        Route::get('/',         'News\IndexController@index')->name('index');
        Route::get('/{slug}',   'News\IndexController@show')->name('show');
    });

    Route::get('technologia', 'Technology\IndexController@index')->name('technology');

    // Inline
    Route::group(['prefix'=>'/inline', 'as' => 'front.inline.'], function() {
        Route::get('/', 'InlineController@index')->name('index');
        Route::get('/loadinline/{inline}', 'InlineController@show')->name('show');
        Route::post('/update/{inline}', 'InlineController@update')->name('update');
    });
});