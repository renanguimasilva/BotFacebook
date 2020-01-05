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
    $text = (new \CodeBot\Message\Text(1))->message('oi');
    dd($text);
    return view('welcome');
});


Route::prefix('webhook')
    ->group(function() {
        Route::get('bot', 'BotController@subscribe');
        Route::post('bot', 'BotController@receiveMessage');
    });
