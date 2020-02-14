<?php

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

Route::group(['namespace'=>'Website', 'as'=>'website.'], function (){
   Route::get('/', 'WebsiteController@home')->name('home');
   Route::get('/shared-hosting','WebsiteController@share')->name('share');
    Route::get('/reseller-hosting','WebsiteController@resell')->name('resell');
    Route::get('/dedicated-hosting','WebsiteController@dedicate')->name('dedicate');
    Route::get('/vps-hosting','WebsiteController@vps')->name('vps');
    Route::get('/domain-registration','WebsiteController@domain_reg')->name('domain_reg');
    Route::get('/domain-transfer','WebsiteController@transfer')->name('transfer');
    Route::get('/personal-domain','WebsiteController@personal')->name('personal');
    Route::get('/how-to-pay','WebsiteController@pay')->name('pay');
    Route::get('/contact','WebsiteController@contact')->name('contact');
    Route::get('/ssl-certificate','WebsiteController@ssl')->name('ssl');
});
