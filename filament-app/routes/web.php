<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Hapus atau beri komentar pada bagian route yang lama, lalu ganti dengan ini:
Route::get('/', [PostController::class, 'index'])->name('filamentblog.home');