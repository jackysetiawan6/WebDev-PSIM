<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::controller(EventController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
});
