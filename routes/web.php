<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.dashboard');
});
Route::get('dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('admin', function () {
    return view('dashboard.admin.admin');
})->name('dashboard.admin.admin');
Route::get('pemesanan', function () {
    return view('dashboard.pemesanan.pemesanan');
})->name('dashboard.pemesanan.pemesanan');

Route::get('login', function () {
    return view('login.login');
})->name('login.login');
