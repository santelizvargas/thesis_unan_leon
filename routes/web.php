<?php

use App\Models\Arduino;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArduinoController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    $arduinos = Arduino::all();
    return view('dashboard', [
        "arduinos" => $arduinos
    ]);
});

Route::get('/', [ArduinoController::class, 'index'])->name('arduinos.index');
