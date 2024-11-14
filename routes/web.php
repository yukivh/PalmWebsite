<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class, 'showHome']);
Route::get('/howartikel', [UserController::class, 'showHowArtikel']);

// In routes home
Route::get('/home', function () {
    return view('home');
})->name('home');

// In routes artikel
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

// In routes login
Route::get('/login', function () {
    return view('login');
})->name('login');
