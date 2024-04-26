<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/about', function() {return view('my-about');});
Route::get('/books/terpinjam/1', function() {return view("halaman buku");});
Route::get('/hallo', function() {return view('hallo', ['nama' => 'IK2', 'alamat' => 'jl. tharmin 35A', 'title' => 'Hallo']);});
Route::get('/login', function() {
    $nama  = 'Bambang';
    $lampu = 1;
    $kelas = env('KELAS', 'Data kelas tidak ada');
    $nilai = "B";
    $perulangan_for = 100;
    $hobi_banyak =
        [
        'Bermain Bola',
        'Bermain Air',
        'Bermain Badminton',
        'Membaca',
        'Memasak',
        'Bermain musik',
        ];
    return view('admin.login', [
    'nama' => $nama,
    'kelas' => $kelas,
    'lampu' => $lampu,
    "nilai" => $nilai,
    'limit' => $perulangan_for,
    'hobbies' => $hobi_banyak,
    ]);
});
