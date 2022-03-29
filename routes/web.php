<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\TemperatureControllerTest;
use App\Http\Controllers\SenderThingspeakController;
use App\Http\Controllers\GuzzleController;
use App\Http\Controllers\PostsController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('temperature', App\Http\Controllers\TemperatureController::class);
Route::resource('temperature-test', App\Http\Controllers\TemperatureControllerTest::class);
Route::resource('reciever', App\Http\Controllers\ReceiverThingspeakController::class);
Route::resource('guzzle', App\Http\Controllers\GuzzleController::class);
Route::get('/post','GuzzleController@getRemoteData');
Route::get('/post', 'App\Http\Controllers\GuzzleController@index');


