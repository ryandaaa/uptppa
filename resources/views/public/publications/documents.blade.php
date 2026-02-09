@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content (Left Column) -->
            <div class="lg:col-span-3">
                <h1 class="text-xl font-bold text-slate-700 dark:text-white mb-8 pb-2 border-b-4 border-primary uppercase">
                    DOKUMEN
                </h1>
                
                <div class="space-y-6">
                    <!-- Document Item 1 -->
                    <div class="bg-white dark:bg-slate-800 border-2 border-dashed border-slate-200 dark:border-slate-700 p-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-4 w-full">
                            <div class="w-12 h-14 bg-red-600 flex items-center justify-center shadow-sm flex-shrink-0 relative">
                                <span class="text-white font-bold text-[10px] transform -rotate-90 absolute">.PDF</span>
                                <div class="absolute top-0 right-0 w-4 h-4 bg-white/20" style="clip-path: polygon(100% 0, 0 0, 100% 100%);"></div>
                            </div>
                            <h4 class="font-bold text-slate-700 dark:text-slate-200 text-sm uppercase">SOP UPTPPA</h4>
                        </div>
                        <button class="border border-slate-300 px-4 py-2 text-xs text-slate-600 hover:bg-primary hover:text-white hover:border-primary transition rounded-sm uppercase whitespace-nowrap">
                            Download
                        </button>
                    </div>

                    <!-- Document Item 2 -->
                    <div class="bg-white dark:bg-slate-800 border-2 border-dashed border-slate-200 dark:border-slate-700 p-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-4 w-full">
                            <div class="w-12 h-14 bg-red-600 flex items-center justify-center shadow-sm flex-shrink-0 relative">
                                <span class="text-white font-bold text-[10px] transform -rotate-90 absolute">.PDF</span>
                                <div class="absolute top-0 right-0 w-4 h-4 bg-white/20" style="clip-path: polygon(100% 0, 0 0, 100% 100%);"></div>
                            </div>
                            <h4 class="font-bold text-slate-700 dark:text-slate-200 text-sm uppercase">PERGUB UPTD</h4>
                        </div>
                        <button class="border border-slate-300 px-4 py-2 text-xs text-slate-600 hover:bg-primary hover:text-white hover:border-primary transition rounded-sm uppercase whitespace-nowrap">
                            Download
                        </button>
                    </div>

                    <!-- Document Item 3 -->
                    <div class="bg-white dark:bg-slate-800 border-2 border-dashed border-slate-200 dark:border-slate-700 p-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-4 w-full">
                            <div class="w-12 h-14 bg-red-600 flex items-center justify-center shadow-sm flex-shrink-0 relative">
                                <span class="text-white font-bold text-[10px] transform -rotate-90 absolute">.PDF</span>
                                <div class="absolute top-0 right-0 w-4 h-4 bg-white/20" style="clip-path: polygon(100% 0, 0 0, 100% 100%);"></div>
                            </div>
                            <h4 class="font-bold text-slate-700 dark:text-slate-200 text-sm uppercase">STANDAR PELAYANAN UPT PPA</h4>
                        </div>
                        <button class="border border-slate-300 px-4 py-2 text-xs text-slate-600 hover:bg-primary hover:text-white hover:border-primary transition rounded-sm uppercase whitespace-nowrap">
                            Download
                        </button>
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
