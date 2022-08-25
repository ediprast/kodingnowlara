<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('Language')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/lang/{lang}', [HomeController::class, 'changeLanguage']);
    Route::get('/works', [WorkController::class, 'index']);
    Route::get('/works/{slug}', [WorkController::class, 'show']);
});
