<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/test_query_builder', [HomeController::class, 'test_query_builder']);
Route::get('/test_eloquent', [HomeController::class, 'test_eloquent']);
Route::get('/add', [HomeController::class, 'tambah']);
Route::post('/save', [HomeController::class, 'simpan']);
Route::get('/makanan', [HomeController::class, 'view_makanan']);