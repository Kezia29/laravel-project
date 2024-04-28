<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DetailTransactionController; 
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController; 
use App\Http\Controllers\StuffController; use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index']);

Route::get('transaction', [TransactionController::class, 'index']); 
Route::get('transaction/add', [TransactionController::class, 'create']);

Route::get('customer', [CustomerController::class, 'index']); 
Route::get('customer/add', [CustomerController::class, 'create']);
Route::post('customer', [CustomerController::class, 'store']); 
Route::get('customer/{customer}', [CustomerController::class, 'destroy']);

Route::get('category', [CategoryController::class, 'index']); 
Route::get('category/add', [CategoryController::class, 'create']);

Route::get('user', [UserController::class, 'index']); 
Route::get('user/add', [UserController::class, 'create']);

Route::get('stuff', [StuffController::class, 'index']); 
Route::get('stuff/add', [StuffController::class, 'create']);

Route::get('/template', function(){ return view('home');});

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/add', [KategoriController::class, 'add']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);
Route::post('/kategori/save', [KategoriController::class, 'save']);

