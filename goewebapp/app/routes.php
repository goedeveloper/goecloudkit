<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/', function()
{
	return View::make('commingsoon');
});


Route::get('about', function()
{
	return View::make('about');
});

Route::get ('myaccount', array('as' => 'myaccount', 'uses' => 'PagesController@myaccount'));
Route::get ('myaccount/accountsetting', array('as' => 'accountsetting', 'uses' => 'PagesController@accountsetting'));
Route::post('myaccount/profile', array('before'=>'csrf','', 'uses' => 'PagesController@postProfile'));
Route::post('myaccount/changepassword', array('before'=>'csrf','as' => 'changepassword', 'uses' => 'PagesController@changepassword'));

Route::get ('register', array('as' => 'getregister', 'uses' => 'PagesController@register'));
Route::post('register', array('as' => 'postregister', 'uses' => 'PagesController@postRegister'));

Route::get ('login', array('https' => false, 'as' =>'userlogin' , 'uses' => 'PagesController@getlogin'));
Route::post('login', array('https' => false, 'before'=>'csrf','as' =>'postuserlogin', 'uses' => 'PagesController@postlogin'));

Route::get('logout', array('as' => 'frontlogout', 'uses' => 'PagesController@logout'));

/*
Route::get ('accountsetting', array('as' => 'accountsetting', 'uses' => 'AccountSetting@accountsetting'));
*/

