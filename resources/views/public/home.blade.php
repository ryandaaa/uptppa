@extends('layouts.public')

@section('content')
    @include('components.public.hero-section')
    
    @include('components.public.info-cards')




    <section class="bg-white dark:bg-slate-800 py-12">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <div class="border-4 border-slate-200 dark:border-slate-700 p-2 inline-block w-full max-w-3xl bg-yellow-50 dark:bg-slate-900 rounded-lg shadow-2xl">
                <!-- Image with slight margin (handled by parent padding p-3) -->
                <img alt="Layanan Pengaduan Infographic" class="w-full h-auto rounded shadow-sm" src="https://image2url.com/r2/default/images/1770640003958-77330c87-2ebf-41ce-b2db-cc3b38aa046a.jpeg"/>
                
                <div class="px-8 py-8 text-slate-800 dark:text-slate-100">
                    <h4 class="text-2xl font-black text-secondary mb-2 uppercase tracking-wide">Layanan Pengaduan</h4>
                    <p class="text-lg font-bold mb-6 text-slate-600 dark:text-slate-300">Kekerasan Terhadap Perempuan dan Anak</p>
                    
                    <div class="bg-white dark:bg-slate-800 p-6 border-2 border-primary inline-block shadow-lg rounded-xl">
                        <p class="mb-2 font-bold text-base">SCAN QR CODE UNTUK MELAPORKAN</p>
                        <img alt="QR Code" class="mx-auto my-4 w-32 h-32 border-4 border-white shadow-md rounded-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVuBoGN5jvKnbiaZeGd6NuWOnjgSgXUK92lub0VkzO7lQCgUxSTe93mkLB8zflI_oKuWoeDIr30S_33CavbjvnaiNgcTUWYhllrLyuCJ8TCqomEjgSgpAx4H97MM2rsgH65pjv8RL7le15IXr3T2n_D-Taoy958hiSbCmJqBvawO4zDQYYc0VQdMJkTbwLkpmLSKse3tZR1odLuHm6C2gb4iwIgGmWhIgZ-gRna02Kb9nZh9OxpAsgjDF3_e8QbNByuSoy9M19Y16X"/>
                        <a href="https://uptppa.riau.go.id/info-cepat.html" class="text-sm text-primary dark:text-quaternary font-bold underline hover:text-green-600 transition block mt-2">https://uptppa.riau.go.id/info-cepat.html</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="md:col-span-2">
            <h3 class="text-2xl font-black border-b-4 border-primary pb-2 mb-8 uppercase flex items-center">
                <span class="material-icons mr-2 text-primary">article</span> Artikel
            </h3>
            <div class="space-y-8">
                @foreach($latestArticles as $article)
                <!-- Article Item -->
                <div class="flex flex-col sm:flex-row gap-6 pb-8 border-b border-slate-200 dark:border-slate-700">
                    <img alt="Thumbnail Artikel" class="w-full sm:w-48 h-32 object-cover border border-slate-300" src="{{ $article->image_url }}"/>
                    <div>
                        <a href="{{ route('public.publications.articles.show', $article->slug) }}">
                            <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-3 hover:text-primary transition leading-tight">{{ $article->title }}</h3>
                        </a>
                        <div class="text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">{{ Str::limit(strip_tags($article->content), 150) }}</div>
                        <a href="{{ route('public.publications.articles.show', $article->slug) }}" class="inline-flex items-center text-primary font-bold hover:underline">Baca Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-8">
                <a href="{{ route('public.publications.articles') }}" class="inline-block bg-slate-100 dark:bg-slate-700 px-6 py-2 text-sm font-bold border border-slate-300 dark:border-slate-600 hover:bg-primary hover:text-white hover:border-primary transition">SEMUA ARTIKEL</a>
            </div>
        </div>

        <div class="md:col-span-1">
            <h3 class="text-2xl font-black border-b-4 border-primary pb-2 mb-8 uppercase flex items-center">
                <span class="material-icons mr-2 text-primary">feed</span> Berita
            </h3>
            <div class="space-y-6">
                @foreach($latestNews as $item)
                <div class="p-4 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
                    <h4 class="font-bold text-sm text-primary dark:text-quaternary mb-3 hover:underline cursor-pointer uppercase">
                        <a href="{{ route('public.publications.news.show', $item->slug) }}">{{ $item->title }}</a>
                    </h4>
                    <div class="flex gap-4">
                        <img alt="News thumb" class="w-16 h-16 object-cover flex-shrink-0" src="{{ $item->image_url }}"/>
                        <div class="text-xs text-slate-600 dark:text-slate-400 leading-tight">{!! Str::limit(strip_tags($item->content), 80) !!}</div>
                    </div>
                    <div class="mt-4 flex justify-between items-center pt-3 border-t border-slate-200 dark:border-slate-700">
                        <span class="text-[10px] text-slate-500 font-mono">{{ $item->published_at->format('Y/m/d H:i:s') }}</span>
                        <a class="text-[10px] font-bold px-2 py-1 bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 uppercase" href="{{ route('public.publications.news.show', $item->slug) }}">Baca</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-6">
                <a href="{{ route('public.publications.news') }}" class="block w-full text-center bg-slate-100 dark:bg-slate-700 px-6 py-2 text-sm font-bold border border-slate-300 dark:border-slate-600 hover:bg-primary hover:text-white hover:border-primary transition">SEMUA BERITA</a>
            </div>
        </div>
    </main>
@endsection