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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Profit', 'ProfitController@Zarobki');


Route::get('Spending', 'SpendingController@Zarobki');
Route::get('insertCash', 'insertCashController@category');

Route::get('/insertCash/store', 'insertCashController@store');
