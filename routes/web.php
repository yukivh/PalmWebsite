<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DetailArtikelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', [UserController::class, 'showArtikel']);
Route::get('/change_profile', [UserController::class, 'showChangeProfile']);
Route::get('/form_artikel', [UserController::class, 'showArtikelForm']);
Route::get('/home', [UserController::class, 'showHome']);
Route::get('/howartikel', [UserController::class, 'showHowArtikel']);
Route::get('/isi_artikel', [UserController::class, 'showIsiArtikel']);
Route::get('/login', [UserController::class, 'showLogin']);
Route::get('/profile', [UserController::class, 'showProfile']);
Route::get('/register', [UserController::class, 'showRegister']);
Route::get('/successlogin', [UserController::class, 'showSuccess']);

// In routes home
Route::get('/home', function () {
    return view('home');
})->name('home');

// In routes artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');

// Route untuk menampilkan halaman detail artikel
Route::get('/artikel/{id}', [DetailArtikelController::class, 'show'])->name('isi_artikel');


// In routes login
Route::get('/login', function () {
    return view('login');
})->name('login');

// In routes features
Route::get('/features', function () {
    return view('home');
})->name('features');

// In route register
Route::get('/register', function () {
    return view('register');
})->name('register');

// In route cara artikel
Route::get('/howartikel', function () {
    return view('howartikel');
})->name('howartikel');

// In route change profile
Route::get('/change_profile', function () {
    return view('change_profile');
})->name('change_profile');

