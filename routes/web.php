<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Registros;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;
use App\Livewire\Dispositivo\DispositivoList;

Route::get('/ambiente/create', AmbienteCreate::class)->middleware('auth')->name('ambiente.create');
Route::get('/ambiente/list', AmbienteList::class)->middleware('auth')->name('ambiente.list');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->middleware('auth')->name('ambiente.edit');

Route::get('/sensor/create', SensorCreate::class)->middleware('auth')->name('sensor.create');
Route::get('/sensor/list', SensorList::class)->middleware('auth')->name('sensor.list');
Route::get('/sensor/edit/{id}', SensorEdit::class)->middleware('auth')->name('sensor.edit');

Route::get('/dispositivo/list', DispositivoList::class)->middleware('auth')->name('sensor.list');

Route::get('/registros', Registros::class)->middleware('auth')->name('registros');
Route::get('/', Dashboard::class)->middleware('auth')->name('dashboard');
Route::get('/l', Login::class)->name('login');