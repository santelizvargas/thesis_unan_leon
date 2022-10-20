<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArduinoController;

Route::get('/', [ArduinoController::class, 'index'])->name('arduinos.index');