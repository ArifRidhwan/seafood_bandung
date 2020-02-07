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

Route::get('/', function () {
    return redirect('Seafood');
});
Route::get('/menu', function () {
    return view('frontend.menu');
});
Route::get('/galleryfoto', function () {
    return view('frontend.gallery');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/Seafood', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

Route::group(['prefix' => 'admin'], function () {
Route::resource('/gallery','GalleryController');
});





});
