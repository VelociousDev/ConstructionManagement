<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\users\UserController;
use App\Http\Controllers\users\SiteController;
use App\Http\Controllers\SettingsController;


Route::get('/', [LoginController::class, 'checkAuth']);
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
Route::post('/loginf', [LoginController::class, 'loginfunc']);
Route::get('/logout', [LoginController::class, 'logout']);
// routes for application
Route::get('/users', [UserController::class, 'index']);
Route::get('/sites', [SiteController::class, 'index']);


// routes for settings
Route::get('/changetheme/{color}', [SettingsController::class, 'changetheme']);
Route::get('/menutheme/{themecolor}', [SettingsController::class, 'menutheme']);