<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', MatakuliahController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('jurusan', JurusanController::class);
