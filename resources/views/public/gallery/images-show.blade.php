@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content (Left Column) -->
            <div class="lg:col-span-3">
                
                <!-- Breadcrumb -->
                <nav class="flex mb-6 text-sm text-slate-500">
                    <a href="{{ route('public.home') }}" class="hover:text-primary">Beranda</a>
                    <span class="mx-2">/</span>
                    <a href="{{ route('public.gallery.images') }}" class="hover:text-primary">Galeri Gambar</a>
                    <span class="mx-2">/</span>
                    <span class="text-slate-800 font-bold truncate">{{ $gallery->title }}</span>
                </nav>

                <!-- Title -->
                <h1 class="text-3xl font-bold text-slate-800 dark:text-white mb-4 leading-tight">
                    {{ $gallery->title }}
                </h1>

                <!-- Meta -->
                <div class="flex items-center gap-4 text-xs text-slate-500 mb-6 pb-6 border-b border-slate-200">
                    <span class="flex items-center gap-1"><span class="material-icons text-sm">calendar_today</span> {{ $gallery->published_at->format('d F Y') }}</span>
                    <span class="flex items-center gap-1"><span class="material-icons text-sm">person</span> Admin UPT PPA</span>
                </div>

                <!-- Featured Image -->
                <div class="mb-8 p-1 border-4 border-slate-100 dark:border-slate-800 rounded-lg shadow-md bg-white">
                    <img src="{{ $gallery->thumbnail_url }}" alt="{{ $gallery->title }}" class="w-full max-h-[500px] object-cover rounded shadow-sm">
                </div>

                <!-- Content Body -->
                <div class="prose prose-slate max-w-none text-slate-700 dark:text-slate-300">
                    <p>
                        {{ $gallery->description }}
                    </p>
                    
                    <!-- Additional Images Grid -->
                    @if(count($gallery->file_urls) > 0)
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-8">
                            @foreach($gallery->file_urls as $imgUrl)
                                <a href="{{ $imgUrl }}" target="_blank" class="block aspect-video overflow-hidden rounded shadow-sm hover:opacity-90 transition border border-slate-200">
                                    <img src="{{ $imgUrl }}" class="w-full h-full object-cover">
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Share Buttons -->
                <div class="mt-8 pt-8 border-t border-slate-200">
                    <h4 class="font-bold text-sm mb-4 uppercase">Bagikan Galeri Ini</h4>
                    <div class="flex gap-2">
                        <button class="bg-blue-600 text-white px-3 py-1 text-sm rounded hover:bg-blue-700">Facebook</button>
                        <button class="bg-sky-500 text-white px-3 py-1 text-sm rounded hover:bg-sky-600">Twitter</button>
                        <button class="bg-green-500 text-white px-3 py-1 text-sm rounded hover:bg-green-600">WhatsApp</button>
                    </div>
                </div>

            </div>

             <!-- Sidebar (Right Column) -->
             <div class="lg:col-span-1">
                @include('components.public.sidebar')
            </div>
        </div>
    </div>
@endsection
