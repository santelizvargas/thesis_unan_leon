<?php

use App\Models\Arduino;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    $arduinos = Arduino::all();
    return view('dashboard', [
        "arduinos" => $arduinos
    ]);
});
