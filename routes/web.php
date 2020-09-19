<?php

use Illuminate\Support\Facades\Route;


// home
Route::get('/', 'HomeController@index');

// mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('mahasiswa', 'MahasiswaController@tambahProses');




