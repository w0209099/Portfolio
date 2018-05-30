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
    return view('Home');
});

Route::get('/About', function () {
    return view('AboutMe');
});

Route::get('/Resume', function () {
    return view('Resume');
});

Route::get('/Work', function () {
    return view('Work');
});

Route::get('/Contact', function () {
    return view('Contact');
});




