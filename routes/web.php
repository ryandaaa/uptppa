<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Auth\LoginController;

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Routes (Protected)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class)->except(['show']);
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class)->except(['show']);
});

Route::name('public.')->group(function () {
    Route::get('/', [PublicController::class, 'index'])->name('home');

    // Profil Routes
    Route::prefix('profil')->name('profile.')->group(function () {
        Route::get('/', function () {
            return redirect()->route('public.profile.about');
        })->name('index');

        Route::get('/tentang', function () {
            return view('public.profile.tentang');
        })->name('about');

        Route::get('/struktur', function () {
            return view('public.profile.struktur');
        })->name('structure');
    });
    // Keep the old named route for compatibility if needed, but it's better to update nav
    // For now, I'll map 'profile' to 'profile.index' in the nav.

    // Layanan Routes
    Route::prefix('layanan')->name('services.')->group(function () {
        Route::get('/', function () {
            return view('public.services.index');
        })->name('index');
        
        Route::get('/lapak', function () {
            return view('public.services.index'); // Placeholder
        })->name('lapak');
    });

    // Publikasi Routes
    Route::prefix('publikasi')->name('publications.')->group(function () {
        Route::get('/berita', [PublicController::class, 'news'])->name('news');
        Route::get('/berita/{slug}', [PublicController::class, 'newsShow'])->name('news.show');

        Route::get('/artikel', [PublicController::class, 'articles'])->name('articles');
        Route::get('/artikel/{slug}', [PublicController::class, 'articlesShow'])->name('articles.show');

        Route::get('/dokumen', [PublicController::class, 'documents'])->name('documents');
    });

    // Galeri Routes
    Route::prefix('galeri')->name('gallery.')->group(function () {
        Route::get('/', function () {
            return redirect()->route('public.gallery.images');
        })->name('index');

        Route::get('/gambar', [PublicController::class, 'galleryImages'])->name('images');
        Route::get('/gambar/{slug}', [PublicController::class, 'galleryImagesShow'])->name('images.show');
    });

    // These routes were moved out of the 'galeri' prefix group and renamed
    Route::get('/gallery/materials', [PublicController::class, 'galleryMaterials'])->name('gallery.materials');
    Route::get('/gallery/materials/{slug}', [PublicController::class, 'galleryMaterialsShow'])->name('gallery.materials.show');

    // Search
    Route::get('/search', [PublicController::class, 'search'])->name('search');

    // Menu "Pengaduan" (Direct Link) is usually separate or part of Layanan. 
    // The prompt asked for "Layanan UPTPPA" dropdown.
    // I will keep the direct /pengaduan route for the CTA buttons.
    Route::get('/pengaduan', function () {
        return view('public.complaint.index');
    })->name('complaint');
});
