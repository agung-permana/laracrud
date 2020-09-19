<?php

use Illuminate\Support\Facades\Route;


// home
Route::get('/', 'HomeController@index');

// mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('mahasiswa', 'MahasiswaController@tambahProses');
Route::get('mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::put('mahasiswa/{id}', 'MahasiswaController@editProses');
Route::delete('mahasiswa/{id}', 'MahasiswaController@hapus');




