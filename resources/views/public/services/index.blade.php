@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content (Left Column) -->
            <div class="lg:col-span-3">
                <h1 class="text-3xl md:text-4xl font-black text-primary mb-8 pb-4 border-b-2 border-slate-200 uppercase tracking-tight">
                    LAYANAN UPT PPA
                </h1>
                
                <!-- Document Viewer Placeholder -->
                <div class="mb-12">
                    <h3 class="font-bold text-lg mb-4 text-slate-800 dark:text-slate-200 uppercase">Maklumat Pelayanan</h3>
                    <div class="w-full h-[500px] bg-slate-200 dark:bg-slate-700 flex items-center justify-center border-2 border-slate-300 dark:border-slate-600 rounded">
                        <div class="text-center p-6">
                            <span class="material-icons text-6xl text-slate-400 mb-4">description</span>
                            <p class="text-slate-500 font-bold">Dokumen Maklumat Pelayanan</p>
                            <p class="text-xs text-slate-400">(Image/PDF Viewer Placeholder)</p>
                        </div>
                    </div>
                </div>

                <!-- Services List (Mobile Snap / Desktop Grid) -->
                <div class="mb-12">
                    <h3 class="font-bold text-lg mb-6 text-slate-800 dark:text-slate-200 uppercase border-l-4 border-primary pl-4">
                        Jenis Layanan
                    </h3>
                    
                    <!-- Container: Mobile horizontal snap, Desktop grid -->
                    <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-6 md:grid md:grid-cols-2 md:gap-6 md:overflow-visible md:pb-0">
                        
                        <!-- Service Item 1 -->
                        <div class="min-w-[85vw] md:min-w-0 snap-center bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-icons text-6xl text-primary">campaign</span>
                            </div>
                            <h4 class="font-bold text-lg text-primary mb-3 relative z-10 flex items-center gap-2">
                                <span class="bg-primary/10 text-primary w-8 h-8 rounded-full flex items-center justify-center text-sm">1</span>
                                Pengaduan Kekerasan
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-sm relative z-10">
                                Layanan penerimaan laporan dan pengaduan dari masyarakat mengenai adanya tindak kekerasan terhadap perempuan dan anak.
                            </p>
                        </div>
                        
                        <!-- Service Item 2 -->
                        <div class="min-w-[85vw] md:min-w-0 snap-center bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                             <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-icons text-6xl text-blue-500">fmd_good</span>
                            </div>
                            <h4 class="font-bold text-lg text-blue-600 mb-3 relative z-10 flex items-center gap-2">
                                <span class="bg-blue-100 text-blue-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">2</span>
                                Penjangkauan Korban
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-sm relative z-10">
                                Layanan mendatangi korban untuk memberikan perlindungan darurat dan pendampingan awal.
                            </p>
                        </div>

                        <!-- Service Item 3 -->
                        <div class="min-w-[85vw] md:min-w-0 snap-center bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                             <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-icons text-6xl text-green-500">folder_shared</span>
                            </div>
                            <h4 class="font-bold text-lg text-green-600 mb-3 relative z-10 flex items-center gap-2">
                                <span class="bg-green-100 text-green-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">3</span>
                                Pengelolaan Kasus
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-sm relative z-10">
                                Layanan manajemen kasus secara komprehensif mulai dari identifikasi, asesmen, hingga pemulihan.
                            </p>
                        </div>

                        <!-- Service Item 4 -->
                        <div class="min-w-[85vw] md:min-w-0 snap-center bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                             <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-icons text-6xl text-orange-500">home</span>
                            </div>
                            <h4 class="font-bold text-lg text-orange-600 mb-3 relative z-10 flex items-center gap-2">
                                <span class="bg-orange-100 text-orange-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">4</span>
                                Penampungan Sementara
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-sm relative z-10">
                                Layanan rumah aman (shelter) bagi korban yang membutuhkan perlindungan fisik dari pelaku.
                            </p>
                        </div>

                        <!-- Service Item 5 -->
                        <div class="min-w-[85vw] md:min-w-0 snap-center bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                             <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-icons text-6xl text-purple-500">handshake</span>
                            </div>
                            <h4 class="font-bold text-lg text-purple-600 mb-3 relative z-10 flex items-center gap-2">
                                <span class="bg-purple-100 text-purple-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">5</span>
                                Mediasi
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-sm relative z-10">
                                Layanan penyelesaian masalah melalui jalur non-litigasi dengan kesepakatan kedua belah pihak.
                            </p>
                        </div>

                         <!-- Service Item 6 -->
                         <div class="min-w-[85vw] md:min-w-0 snap-center bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                             <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-icons text-6xl text-teal-500">gavel</span>
                            </div>
                            <h4 class="font-bold text-lg text-teal-600 mb-3 relative z-10 flex items-center gap-2">
                                <span class="bg-teal-100 text-teal-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">6</span>
                                Pendampingan
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-sm relative z-10">
                                Layanan pendampingan hukum, psikologis, dan rohani bagi korban.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SOP Link -->
                <div class="bg-primary/10 p-6 rounded border border-primary/20 flex flex-col md:flex-row items-center justify-between gap-4">
                    <div>
                        <h4 class="font-bold text-primary text-lg">SOP Penanganan Kasus</h4>
                        <p class="text-xs text-slate-600 dark:text-slate-400">Standar Operasional Prosedur Penanganan Kasus di UPT PPA</p>
                    </div>
                    <a href="#" class="bg-primary hover:bg-orange-700 text-white font-bold py-2 px-6 rounded transition flex items-center gap-2">
                        <span class="material-icons text-sm">download</span> UNDUH SOP
                    </a>
                </div>

            </div>

             <!-- Sidebar (Right Column) -->
             <div class="lg:col-span-1">
                @include('components.public.sidebar')
            </div>
        </div>
    </div>
@endsection
