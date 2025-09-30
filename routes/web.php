<?php

<<<<<<< HEAD
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/list', AmbienteList::class)->name('ambiente.list');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
=======
use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;
use Illuminate\Support\Facades\Route;

Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/list', SensorList::class)->name('sensor.list');
Route::get('/sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');
>>>>>>> 22d963431113eec93efcf9915758080887d4fafe
