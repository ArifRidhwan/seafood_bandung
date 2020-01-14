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
    return redirect('login');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/menu', function () {
    return view('frontend.menu');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

