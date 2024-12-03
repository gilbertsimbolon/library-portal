<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LibraryMemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StrukturImage;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/galeri', function () {
    return view('galeri');
})->middleware(['auth', 'verified'])->name('galeri');

Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi')->middleware('auth', 'verified');

Route::get('struktur', [StrukturImage::class, 'index'])->name('struktur')->middleware('auth', 'verified');

Route::get('pegawai', [EmployeeController::class, 'index'])->name('pegawai')->middleware('auth', 'verified');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');
    Route::get('/struktur', [StrukturImage::class, 'index'])->name('struktur');
    Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');
    Route::get('/kontak', [LibraryMemberController::class, 'create'])->name('kontak');
    Route::post('/kontak', [LibraryMemberController::class, 'store'])->name('kontak.store');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
