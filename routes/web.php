<?php

use Illuminate\Support\Facades\Route;
use App\Models\ChargingStation;
use App\Http\Controllers\ChargingStationController;
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

Route::get('/stations', [ChargingStationController::class,'index']);

Route::get('/stations/{chargingStation}', [ChargingStationController::class,'show']);

Route::post('/stations', [ChargingStationController::class,'store']);

Route::put('/stations/{chargingStation}', [ChargingStationController::class,'update']);

Route::delete('/stations/{chargingStation}', [ChargingStationController::class,'destroy']);
