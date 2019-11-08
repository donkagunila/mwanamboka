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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/contact-us', 'SiteController@contact')->name('contact');
Route::get('/about-us', 'SiteController@about')->name('about');
Route::get('/services', 'SiteController@service')->name('service');
Route::get('/gallery', 'SiteController@gallery')->name('gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
