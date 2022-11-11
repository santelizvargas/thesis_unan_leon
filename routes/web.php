<?php

use App\Models\Arduino;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
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
