<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LibraryMemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/visi-misi', function () {
    return view('visi-misi');
})->middleware(['auth', 'verified'])->name('visi-misi');

Route::get('/struktur', function () {
    return view('struktur');
})->middleware(['auth', 'verified'])->name('struktur');

Route::get('/pegawai', function () {
    return view('pegawai');
})->middleware(['auth', 'verified'])->name('pegawai');

Route::get('/galeri', function () {
    return view('galeri');
})->middleware(['auth', 'verified'])->name('galeri');

// Route::get('/kontak', function () {
//     return view('kontak');
// })->middleware(['auth', 'verified'])->name('kontak');

Route::group(['prefix' => 'kontak'], function () {
    Route::get('/', [LibraryMemberController::class, 'create'])->name('kontak');
    Route::post('/', [LibraryMemberController::class, 'store'])->name('kontak.store');
});

Route::middleware('auth', 'verified', 'role.user')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
