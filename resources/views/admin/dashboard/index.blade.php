@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header_title', 'Dashboard')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-text-main-light dark:text-text-main-dark tracking-tight">Dashboard Overview</h1>
        <p class="text-text-muted-light dark:text-text-muted-dark mt-1">Welcome back, here's what's happening today.</p>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        
        <div class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-6 shadow-card hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-4">
                <div class="p-2 bg-purple-50 dark:bg-purple-900/20 rounded-lg text-purple-600 dark:text-purple-400">
                    <span class="material-icons-outlined text-xl">newspaper</span>
                </div>
            </div>
            <div>
                <p class="text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1">Total Artikel & Berita</p>
                <h3 class="text-3xl font-bold text-text-main-light dark:text-text-main-dark">{{ $stats['posts'] }}</h3>
            </div>
        </div>

        <div class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-6 shadow-card hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-4">
                <div class="p-2 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg text-emerald-600 dark:text-emerald-400">
                    <span class="material-icons-outlined text-xl">collections</span>
                </div>
            </div>
            <div>
                <p class="text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1">Item Galeri Publik</p>
                <h3 class="text-3xl font-bold text-text-main-light dark:text-text-main-dark">{{ $stats['gallery'] }}</h3>
            </div>
        </div>

        <div class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-6 shadow-card hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-4">
                <div class="p-2 bg-blue-50 dark:bg-blue-900/20 rounded-lg text-blue-600 dark:text-blue-400">
                    <span class="material-icons-outlined text-xl">group</span>
                </div>
            </div>
            <div>
                <p class="text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1">Admin Aktif</p>
                <h3 class="text-3xl font-bold text-text-main-light dark:text-text-main-dark">{{ $stats['users'] }}</h3>
            </div>
        </div>

    </div>

    <!-- Welcome Card -->
    <div class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-12 text-center shadow-card flex flex-col items-center justify-center min-h-[400px]">
        <div class="w-16 h-16 rounded-full bg-primary-light dark:bg-primary/20 flex items-center justify-center mb-6 animate-fade-in-up">
            <span class="material-icons-outlined text-3xl text-primary">waving_hand</span>
        </div>
        <h2 class="text-2xl md:text-3xl font-bold text-text-main-light dark:text-text-main-dark mb-3">Selamat Datang di Admin Panel UPT PPA!</h2>
        <p class="text-text-muted-light dark:text-text-muted-dark max-w-xl mx-auto mb-8 leading-relaxed">
            Gunakan navigasi di sebelah kiri untuk mengelola Berita, Artikel, serta Galeri foto dan video yang akan ditampilkan ke publik.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-primary hover:bg-primary-hover text-white font-medium rounded-lg transition-all shadow-sm hover:shadow-md focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:focus:ring-offset-surface-dark">
                <span class="material-icons-outlined text-sm">add</span>
                Kelola Berita Baru
            </a>
            <a href="{{ route('admin.gallery.index') }}" class="inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark text-text-main-light dark:text-text-main-dark hover:bg-gray-50 dark:hover:bg-white/5 font-medium rounded-lg transition-all shadow-subtle">
                <span class="material-icons-outlined text-sm">photo_library</span>
                Kelola Galeri
            </a>
        </div>
    </div>
@endsection
