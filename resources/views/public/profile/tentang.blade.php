@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content (Left Column) -->
            <div class="lg:col-span-3">
                <h1 class="text-3xl md:text-4xl font-black text-primary mb-8 pb-4 border-b-2 border-slate-200 uppercase tracking-tight">
                    TENTANG UPT PPA PROVINSI RIAU
                </h1>
                
                <!-- Immersive Mobile Hero Image -->
                <div class="w-[100vw] -mx-6 md:w-full md:mx-0 mb-8 relative h-64 md:h-96 overflow-hidden md:rounded-xl shadow-lg group">
                    <img src="https://image2url.com/r2/default/images/1770640175651-5e59b628-587f-4747-bdb9-1d35943ad54f.jpeg" alt="Kantor UPT PPA Riau" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">                    </div>
                </div>
                
                <div class="prose prose-slate max-w-none text-slate-700 dark:text-slate-300">
                    <p class="text-justify leading-relaxed mb-6">
                        Standar Layanan PPA dimaksudkan sebagai pedoman bagi UPTD PPA dalam menyelenggarakan fungsi layanan PPA kepada Penerima Manfaat secara cepat, akurat, komprehensif, dan terintegrasi.
                    </p>
                    <p class="text-justify leading-relaxed mb-6">
                        UPT PPA mempunyai tugas melaksanakan sebagian kegiatan teknis operasional dan/atau kegiatan teknis penunjang Dinas Pemberdayaan Perempuan dan Perlindungan Anak di bidang perlindungan perempuan dan anak.
                    </p>

                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mt-8 mb-4">Fungsi UPT PPA</h3>
                    <ol class="list-decimal list-outside pl-6 space-y-3">
                        <li class="pl-2">
                            Pelaksanaan penerimaan pengaduan masyarakat mengenai tindak kekerasan terhadap perempuan dan anak.
                        </li>
                        <li class="pl-2">
                            Pelaksanaan penjangkauan korban kekerasan terhadap perempuan dan anak.
                        </li>
                        <li class="pl-2">
                            Pelaksanaan pengelolaan kasus kekerasan terhadap perempuan dan anak.
                        </li>
                        <li class="pl-2">
                            Pelaksanaan penampungan sementara bagi korban yang membutuhkan perlindungan.
                        </li>
                        <li class="pl-2">
                            Pelaksanaan mediasi
                        </li>
                        <li class="pl-2">
                            Pendampingan Korban
                        </li>
                    </ol>
                </div>
            </div>

            <!-- Sidebar (Right Column) -->
            <div class="lg:col-span-1">
                @include('components.public.sidebar')
            </div>
        </div>
    </div>
@endsection
