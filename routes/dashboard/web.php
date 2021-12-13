<?php

Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
            Route::get('/index' ,'DashboardController@index')->name('index');
            Route::resource('users' ,'UserController')->except(['show']); // من غير show

             //category routes
             Route::resource('categories', 'CategoryController')->except(['show']);

               //product routes
            Route::resource('products', 'ProductController')->except(['show']);


           });
    });

