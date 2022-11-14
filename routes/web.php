<?php

use App\Models\Arduino;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/', function () {
    $arduinos = Arduino::all();
    return view('dashboard', [
        "arduinos" => $arduinos
    ]);
});
