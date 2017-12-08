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
//                Aksi
//fungsi yang dijadikan parameter fungsi = callback
Route::get('/', function () {
    return view('welcome');
})->name('root');

//url parameter
//{nim} route params
//{nim?} optional parameter
Route::get('hallo/{nama}/{nim?}', 'CobaController@coba')->name('hallo');

Route::get('named', 'CobaController@named')->name('named');

// Route::get('/a', function () {
//     return "view ".Routes::method();
// });
//
Route::get('/about', function () {
    return "view post";
})->name('kontak');

//supaya tidak mrubah path
//->name('kontak');

Route::get('home/{gas}', 'CobaController@gaspol')->name('gaspol');
Route::get('home', 'CobaController@home')->name('home');
Route::get('about', 'CobaController@about')->name('about');
Route::get('contact', 'CobaController@contact')->name('contact');

























Route::get('/buku/{gaspol}', 'CobaController@buku')->name('buku');

Route::get('/rak', 'CobaController@rak')->name('rak');
