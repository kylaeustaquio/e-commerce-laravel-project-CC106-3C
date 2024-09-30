<?php

use illuminate\Support\Facades\Route;
use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthDashboard;

// Authentication Routes
Route::get('/login', AuthLogin::class)->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('livewire.auth.auth-dashboard'); 


Route::get('/', function () {
    return view('livewire.homepage'); // Home page
})->name('homepage');



Route::get('/dashboard', function () {
    return view('livewire.auth.auth-login'); // Login page
})->name('dashboard');   



Route::get('/login', function () {
    return view('livewire.auth.auth-dashboard'); // Dashboard page
})->name('login');    



Route::get('/signup', function () {
    return view('livewire.auth.auth-signup'); // Signup page
})->name('signup'); 


Route::get('/order', function () {
    return view('livewire.auth.auth-order'); // order page
})->name('order');    
