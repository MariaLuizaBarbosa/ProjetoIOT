<?php

use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\SensorController;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro', [RegistrosController::class, 'store']);

Route::get('sensor', [SensorController::class, 'show']);
Route::get('sensor/update', [SensorController::class, 'update']);