<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/Apropos', function () {
    return view('Apropos');
})->name('Apropos');

Route::get('/sites', function () {
    return view('sites');
})->name('sites');

Route::get('/evenements', function () {
    return view('evenements');
})->name('evenements');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/user_dashboard', function () {
    return view('user_dashboard');
});

Route::get('/stat', function () {
    return view('stat');
});




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/destination/{slug}', [DestinationController::class, 'show'])->name('destination.show');
Route::get('/evenement/{slug}', [EventController::class, 'show'])->name('event.show');


