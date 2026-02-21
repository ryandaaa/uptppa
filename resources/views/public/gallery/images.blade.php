@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content (Left Column) -->
            <div class="lg:col-span-3">
                <h1 class="text-xl font-bold text-slate-700 dark:text-white mb-8 pb-2 border-b-4 border-primary uppercase">
                    GALERI GAMBAR
                </h1>
                
                <div class="space-y-8">
                    @foreach($images as $item)
                    <!-- Gallery Item -->
                    <div class="bg-white dark:bg-slate-800">
                        <a href="{{ route('public.gallery.images.show', $item->slug) }}" class="block text-primary hover:underline text-lg font-bold mb-4">
                            {{ $item->title }}
                        </a>
                        <div class="flex flex-col md:flex-row gap-6">
                            <img src="{{ $item->thumbnail_url }}" alt="Gallery Thumbnail" class="w-full md:w-48 h-32 object-cover flex-shrink-0">
                            <div class="flex-grow">
                                <p class="text-sm text-slate-600 dark:text-slate-300 text-justify leading-relaxed mb-4">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-2 pt-2 border-t border-dotted border-slate-300">
                            <span class="text-xs text-slate-500">{{ $item->published_at->format('Y/m/d H:i:s') }}</span>
                            <a href="{{ route('public.gallery.images.show', $item->slug) }}" class="text-xs px-3 py-1 border border-slate-300 text-slate-600 hover:bg-slate-100 transition rounded-sm">Lihat</a>
                        </div>
                    </div>
                    @endforeach

                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $images->links() }}
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
