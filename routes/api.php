<?php

use App\Http\Controllers\RegistrosController;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro', [RegistrosController::class, 'store']);