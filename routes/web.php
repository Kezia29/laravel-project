<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/add', [HomeController::class, 'tambah']);
Route::post('/save', [HomeController::class, 'simpan']);