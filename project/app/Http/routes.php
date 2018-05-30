<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', 'frontendController@index');

Route::get('back', 'HomeController@index');

Route::resource('user', 'UserController');

Route::resource('template', 'TemplateController');

Route::resource('pages', 'PagesController');

Route::resource('articles', 'ArticlesController');

Route::resource('content', 'ContentController');

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('site', function (){

    $css = DB::table('templates')->where('Template_active', "true" )->pluck('Template_content');
    //flash($css);
    //Session::flash('msg', 'Changes Saved.' );

    //return redirect('/');
    return redirect('/')->with('message', $css[0]);
    //return $css;
});


