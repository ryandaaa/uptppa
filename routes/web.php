<?php

use Illuminate\Support\Facades\Route;

Route::name('public.')->group(function () {
    Route::get('/', function () {
        return view('public.home');
    })->name('home');

    Route::get('/profil', function () {
        return view('public.profile.index');
    })->name('profile');

    Route::get('/layanan', function () {
        return view('public.services.index');
    })->name('services');

    Route::get('/publikasi', function () {
        return view('public.publications.index');
    })->name('publications');

    Route::get('/galeri', function () {
        return view('public.gallery.index');
    })->name('gallery');
});
