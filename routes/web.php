<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampusController;

Route::get('/', [CampusController::class, 'home']);
Route::get('/pengumuman', [CampusController::class, 'pengumuman']);
Route::get('/dosen', [CampusController::class, 'dosen']);
Route::get('/kontak', [CampusController::class, 'kontak']);
