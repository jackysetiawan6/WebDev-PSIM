<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\IncidentController;
use Illuminate\Support\Facades\Route;

Route::controller(EventController::class)->group(function () {
    Route::get('/', 'index')->name('event.index');
});

Route::controller(IncidentController::class)->group(function () {
    Route::get('/incident', 'index')->name('incident.index');
});