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
    Route::get('/email-hosting','WebsiteController@email')->name('email');
    Route::get('/wordpress-hosting','WebsiteController@wordpress')->name('wordpress');
    Route::get('/domain-registration','WebsiteController@domain_reg')->name('domain_reg');
    Route::get('/domain-transfer','WebsiteController@transfer')->name('transfer');
    Route::get('/personal-domain','WebsiteController@personal')->name('personal');
    Route::get('/how-to-pay','WebsiteController@pay')->name('pay');
    Route::get('/contact','WebsiteController@contact')->name('contact');
    Route::get('/ssl-certificate','WebsiteController@ssl')->name('ssl');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login',function(){

    return view('admin.login');
})->name('loginpage');


Route::group(['middleware'=>'auth'],function(){
    Route::resource('/admin/post','AdminPostController');
    Route::resource('/admin/category','AdminCategoryController');

    Route::get('/admin/home',function(){
        return view('admin.home');
    });
});

Route::group(['as'=>'blog.'],function(){
    Route::get('blog/index','blogController@index')->name('index');
    Route::get('blog/{id}/post','blogController@post')->name('post');
    Route::get('blog/{id}/category','blogController@category')->name('category');
    Route::get('hithere',function(){
        return "i must finish it today";
    });

});