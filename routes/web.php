<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('frontend.home');
})->name('home');

Route::get('/profil', function () {
    return view('frontend.profil');
})->name('profil');

Route::get('/program', function () {
    return view('frontend.program');
})->name('program');

Route::get('/bkk', function () {
    return view('frontend.bkk');
})->name('bkk');

Route::get('/mitra', function () {
    return view('frontend.mitra');
})->name('mitra');

Route::get('/galeri', function () {
    return view('frontend.galeri');
})->name('galeri');

Route::get('/berita', function () {
    return view('frontend.berita');
})->name('berita');

Route::get('/kontak', function () {
    return view('frontend.kontak');
})->name('kontak');

Route::get('/ppdb', function () {
    return view('frontend.ppdb');
})->name('ppdb');


Route::get('/fasilitas', function () {
    return view('frontend.fasilitas');
})->name('fasilitas');

Route::get('/prestasi', function () {
    return view('frontend.prestasi');
})->name('prestasi');