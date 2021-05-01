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
use \App\Notifications\TelegramNotification;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'PortfolioController@index');
Route::post('/send_message', 'PortfolioController@sendMessage');

Route::post('/', function () {
    Auth::user()->notify(new TelegramNotification());
});
