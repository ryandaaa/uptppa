@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <h1 class="text-3xl font-bold text-slate-800 dark:text-white mb-8">
            Hasil Pencarian: "<span class="text-primary">{{ $query }}</span>"
        </h1>

        @if($posts->isEmpty() && $galleries->isEmpty())
            <div class="bg-slate-50 dark:bg-slate-800 p-8 rounded-lg text-center">
                <span class="material-icons text-6xl text-slate-300 mb-4">search_off</span>
                <p class="text-slate-600 dark:text-slate-400 text-lg">Maaf, tidak ditemukan hasil untuk kata kunci tersebut.</p>
                <a href="{{ route('public.home') }}" class="inline-block mt-4 text-primary font-bold hover:underline">Kembali ke Beranda</a>
            </div>
        @else
            
            <!-- Posts Results -->
            @if($posts->isNotEmpty())
                <div class="mb-12">
                    <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-6 border-l-4 border-primary pl-4 uppercase">
                        Berita & Artikel ({{ $posts->count() }})
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($posts as $post)
                            <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden hover:shadow-md transition">
                                <a href="{{ $post->category == 'news' ? route('public.publications.news.show', $post->slug) : route('public.publications.articles.show', $post->slug) }}">
                                    <div class="p-6">
                                        <div class="flex items-center gap-2 mb-3">
                                            <span class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs px-2 py-1 rounded uppercase font-bold">
                                                {{ $post->category == 'news' ? 'Berita' : 'Artikel' }}
                                            </span>
                                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                                <span class="material-icons text-[14px]">calendar_today</span>
                                                {{ $post->published_at->format('d M Y') }}
                                            </span>
                                        </div>
                                        <h3 class="font-bold text-lg text-slate-800 dark:text-white mb-2 line-clamp-2 hover:text-primary transition">
                                            {{ $post->title }}
                                        </h3>
                                        <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-3">
                                            {{ Str::limit(strip_tags($post->content), 120) }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Gallery Results -->
            @if($galleries->isNotEmpty())
                <div>
                    <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-6 border-l-4 border-primary pl-4 uppercase">
                        Galeri & Dokumen ({{ $galleries->count() }})
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($galleries as $item)
                            <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden hover:shadow-md transition">
                                @php
                                    $route = '#';
                                    if ($item->type == 'image') $route = route('public.gallery.images.show', $item->slug);
                                    elseif ($item->type == 'video') $route = route('public.gallery.videos.show', $item->slug);
                                    elseif ($item->type == 'document') $route = route('public.gallery.materials.show', $item->slug);
                                @endphp
                                <a href="{{ $route }}">
                                    <!-- Thumbnail -->
                                    <div class="h-40 bg-slate-200 dark:bg-slate-800 relative overflow-hidden group">
                                         @if($item->thumbnail || $item->type == 'image')
                                            <img src="{{ $item->thumbnail ?? $item->file_path }}" alt="{{ $item->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-slate-400">
                                                <span class="material-icons text-4xl">
                                                    @if($item->type == 'video') play_circle
                                                    @elseif($item->type == 'document') description
                                                    @else image @endif
                                                </span>
                                            </div>
                                        @endif
                                        
                                        <!-- Type Badge -->
                                        <div class="absolute top-2 right-2">
                                             <span class="bg-black/50 text-white text-[10px] px-2 py-1 rounded uppercase font-bold">
                                                {{ $item->type }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="p-4">
                                        <h3 class="font-bold text-md text-slate-800 dark:text-white mb-1 line-clamp-2 hover:text-primary transition">
                                            {{ $item->title }}
                                        </h3>
                                         <p class="text-xs text-slate-500">
                                            {{ $item->published_at->format('d M Y') }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        @endif
    </div>
@endsection
