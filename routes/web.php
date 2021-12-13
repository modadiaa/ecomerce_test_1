



<?php


/*Route::get('/' , 'FrontendController@index');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');*/


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){
    Route::prefix('/')->name('')->middleware(['auth'])->group(function () {

        Route::get('/' , 'FrontendController@index');

        Auth::routes(['register' => false]);

        Route::get('/home', 'HomeController@index')->name('home');

       });
});




