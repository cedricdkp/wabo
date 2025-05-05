<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('accueil');
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/search', function (Illuminate\Http\Request $request) {
    $query = $request->input('query');
    return view('search.results', ['query' => $query, 'results' => []]);
})->name('search');

Route::get('/destination/{slug}', [DestinationController::class, 'show'])->name('destination.show');
Route::get('/evenement/{slug}', [EventController::class, 'show'])->name('event.show');

Route::post('/newsletter', function (Illuminate\Http\Request $request) {
    $request->validate(['email' => 'required|email']);
    \App\Models\Subscriber::create(['email' => $request->email]);
    return redirect()->back()->with('success', 'Inscription à la newsletter réussie !');
})->name('newsletter.subscribe');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Routes d'authentification
Route::get('/connexion', [LoginRegisterController::class, 'showLoginForm'])->name('login');
Route::post('/connexion', [LoginRegisterController::class, 'login']);
Route::get('/inscription', [LoginRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/inscription', [LoginRegisterController::class, 'register']);
Route::post('/deconnexion', [LoginRegisterController::class, 'logout'])->name('logout');

// Routes pour l'authentification Google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

// Routes pour la réinitialisation de mot de passe
Route::get('/mot-de-passe/reinitialiser', [LoginRegisterController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/mot-de-passe/email', [LoginRegisterController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/mot-de-passe/reinitialiser/{token}', [LoginRegisterController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/mot-de-passe/reinitialiser', [LoginRegisterController::class, 'resetPassword'])->name('password.update');

// Route du tableau de bord (protégée)
Route::middleware(['auth'])->group(function () {
    Route::get('/tableau-de-bord', [DashboardController::class, 'index'])->name('dashboard');
});