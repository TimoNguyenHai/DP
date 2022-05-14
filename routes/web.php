<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\HeaterController;
use App\Http\Controllers\PumpController;
use App\Http\Controllers\LightController;
use App\Http\Controllers\VentilationController;
use App\Http\Controllers\ValveSoilController;


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


Route::post('/manualTemperature-storedata', [App\Http\Controllers\TemperatureController::class, 'createManualTemperature'])->name('manualTemperature.storedata');
Route::post('/automationTemperature-storedata', [App\Http\Controllers\TemperatureController::class, 'createAutomationTemperature'])->name('automationTemperature.storedata');
Route::post('/onManualTemperature-storedata', [App\Http\Controllers\TemperatureController::class, 'onManualTemperature'])->name('onManualTemperature.storedata');
Route::post('/offManualTemperature-storedata', [App\Http\Controllers\TemperatureController::class, 'offManualTemperature'])->name('offManualTemperature.storedata');


Route::post('/manualHeater-storedata', [App\Http\Controllers\HeaterController::class, 'manualHeater'])->name('manualHeater.storedata');
Route::post('/automationHeater-storedata', [App\Http\Controllers\HeaterController::class, 'automationHeater'])->name('automationHeater.storedata');
Route::post('/onManualHeater-storedata', [App\Http\Controllers\HeaterController::class, 'onManualHeater'])->name('onManualHeater.storedata');
Route::post('/offManualHeater-storedata', [App\Http\Controllers\HeaterController::class, 'offManualHeater'])->name('offManualHeater.storedata');


Route::post('/manualVentilation-storedata', [App\Http\Controllers\VentilationController::class, 'manualVentilation'])->name('manualVentilation.storedata');
Route::post('/automationVentilation-storedata', [App\Http\Controllers\VentilationController::class, 'automationVentilation'])->name('automationVentilation.storedata');
Route::post('/onManualVentilation-storedata', [App\Http\Controllers\VentilationController::class, 'onManualVentilation'])->name('onManualVentilation.storedata');
Route::post('/offManualVentilation-storedata', [App\Http\Controllers\VentilationController::class, 'offManualVentilation'])->name('offManualVentilation.storedata');


Route::post('/manualLight-storedata', [App\Http\Controllers\LightController::class, 'manualLight'])->name('manualLight.storedata');
Route::post('/automationLight-storedata', [App\Http\Controllers\LightController::class, 'automationLight'])->name('automationLight.storedata');
Route::post('/onManualLight-storedata', [App\Http\Controllers\LightController::class, 'onManualLight'])->name('onManualLight.storedata');
Route::post('/offManualLight-storedata', [App\Http\Controllers\LightController::class, 'offManualLight'])->name('offManualLight.storedata');


Route::post('/manualPump-storedata', [App\Http\Controllers\PumpController::class, 'manualPump'])->name('manualPump.storedata');
Route::post('/automationPump-storedata', [App\Http\Controllers\PumpController::class, 'automationPump'])->name('automationPump.storedata');
Route::post('/onManualPump-storedata', [App\Http\Controllers\PumpController::class, 'onManualPump'])->name('onManualPump.storedata');
Route::post('/offManualPump-storedata', [App\Http\Controllers\PumpController::class, 'offManualPump'])->name('offManualPump.storedata');

Route::post('/manualValveSoil-storedata', [App\Http\Controllers\ValveSoilController::class, 'manualValveSoil'])->name('manualValveSoil.storedata');
Route::post('/automationValveSoil-storedata', [App\Http\Controllers\ValveSoilController::class, 'automationValveSoil'])->name('automationValveSoil.storedata');
Route::post('/onManualValveSoil-storedata', [App\Http\Controllers\ValveSoilController::class, 'onManualValveSoil'])->name('onManualValveSoil.storedata');
Route::post('/offManualValveSoil-storedata', [App\Http\Controllers\ValveSoilController::class, 'offManualValveSoil'])->name('offManualValveSoil.storedata');


Route::resource('overview', App\Http\Controllers\OverviewController::class);
Route::resource('pump', App\Http\Controllers\PumpController::class);
Route::resource('light', App\Http\Controllers\LightController::class);
Route::resource('ventilation', App\Http\Controllers\VentilationController::class);
Route::resource('heater', App\Http\Controllers\HeaterController::class);
Route::resource('valve', App\Http\Controllers\ValveSoilController::class);

Route::resource('reciever', App\Http\Controllers\ReceiverThingspeakController::class);
Route::resource('guzzle', App\Http\Controllers\GuzzleController::class);
Route::get('/post','GuzzleController@getRemoteData');
Route::get('/post', 'App\Http\Controllers\GuzzleController@index');


