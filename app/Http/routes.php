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
    return view('auth/login');
});
// User Routes
Route::get('Profit', 'ProfitController@Zarobki');
Route::get('Spending', 'SpendingController@Zarobki');
Route::get('insertCash', 'insertCashController@category');
Route::get('/insertCash/store', 'insertCashController@store');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




// Admin routes
Route::get('Admin/Panel', [
    'middleware' => 'auth',
    'uses' => 'Admin\AdminPanelController@index'
]);