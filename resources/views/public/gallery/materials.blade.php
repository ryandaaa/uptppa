@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content (Left Column) -->
            <div class="lg:col-span-3">
                <h1 class="text-xl font-bold text-slate-700 dark:text-white mb-8 pb-2 border-b-4 border-primary uppercase">
                    MATERI EDUKASI
                </h1>
                
                <div class="space-y-8">
                    @foreach($materials as $item)
                    <!-- Material Item -->
                    <div class="bg-white dark:bg-slate-800">
                        <a href="{{ route('public.gallery.materials.show', $item->slug) }}" class="block text-primary hover:underline text-lg font-bold mb-4">
                            {{ $item->title }}
                        </a>
                        <div class="flex flex-col md:flex-row gap-6">
                            <!-- Placeholder Icon for Material/PDF -->
                            <div class="w-full md:w-48 h-32 flex-shrink-0 bg-slate-100 flex items-center justify-center border border-slate-200">
                                <span class="material-icons text-red-500 text-5xl">picture_as_pdf</span>
                            </div>

                            <div class="flex-grow">
                                <p class="text-sm text-slate-600 dark:text-slate-300 text-justify leading-relaxed mb-4">
                                     {{ $item->description ?? 'Tidak ada deskripsi.' }}
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-2 pt-2 border-t border-dotted border-slate-300">
                            <span class="text-xs text-slate-500">{{ $item->published_at->format('Y/m/d H:i:s') }}</span>
                            <a href="{{ route('public.gallery.materials.show', $item->slug) }}" class="text-xs px-3 py-1 border border-slate-300 text-slate-600 hover:bg-slate-100 transition rounded-sm">Baca</a>
                        </div>
                    </div>
                    @endforeach

                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $materials->links() }}
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
