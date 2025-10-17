<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// halaman utama (pakai controller)
Route::get('/', [SiteController::class, 'index'])->name('home');

// halaman-halaman lain
Route::get('/home', function () {
    return view('site.home');
});

Route::get('/layanan', function () {
    return view('site.layanan');
});

Route::get('/struktur', function () {
    return view('site.struktur');
});

Route::get('/visi-misi', function () {
    return view('site.visi-misi');
});

Route::get('/login', function () {
    return view('site.login');
});
