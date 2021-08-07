<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('frontend/welcome');
});
Route::post('help/message','frontend\FrontendController@store');
Route::get('/','frontend\FrontendController@index');
Route::get('/design/details/{id}','frontend\FrontendController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('help/message', 'HomeController@help');
Route::resource('items','Backend\ItemController');
Route::resource('services','ServiceController');
Route::resource('teams','TeamController');
