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
Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('registration', function()
{
    return View::make('pages.registration');
});

Route::get('profile', function()
{
    return View::make('pages.profile');
});

Route::get('bulk', function()
{
    return View::make('pages.bulk');
});

Route::get('workxp', function()
{
    return View::make('pages.workXp');
});



