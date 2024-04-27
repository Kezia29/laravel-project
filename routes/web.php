<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/add', [KategoriController::class, 'add']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);
Route::post('/kategori/save', [KategoriController::class, 'save']);

