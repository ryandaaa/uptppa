<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>UPT PPA Provinsi Riau</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#c2410c",
                        secondary: "#1e293b",
                        tertiary: "#fdba74",
                        quaternary: "#fff7ed",
                        "background-light": "#F3F4F6",
                        "background-dark": "#111827",
                    },
                    fontFamily: {
                        display: ["Arial", "Helvetica", "sans-serif"],
                        serif: ["Times New Roman", "serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0px",
                    },
                },
            },
        };
    </script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #c2410c 0%, #7c2d12 100%);
            position: relative;
            overflow: hidden;
        }
        .hero-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 24px 24px;
        }
        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .classic-shadow {
            box-shadow: 2px 2px 0px rgba(0,0,0,0.1);
        }
        /* Simulate 90% browser zoom as requested */
        body {
            zoom: 90%;
        }
    </style>
</head>
<body class="bg-gray-200 dark:bg-gray-900 text-slate-800 dark:text-slate-200 md:py-8">

    <!-- Floating Card Container -->
    <div class="max-w-[1280px] mx-auto bg-white dark:bg-slate-950 shadow-[0_0_40px_rgba(0,0,0,0.1)] border-4 border-slate-300 dark:border-slate-700 relative min-h-screen md:min-h-0 overflow-hidden">
        
        <header class="bg-white dark:bg-slate-900 border-b-4 border-primary py-4">
            <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-6">
                <img alt="Logo Riau" class="h-24 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTx30gpNpsioteP8p7oFIMfWalaUGJZ2S92OssJfvEtUzDdjYmfSdjdd8JAScVC3a2aWQ1BcptTZPyusZbPvFzjk-dR6Fi_h2lPUj67pYrfgguq4hagPqfCUbmWJC5d3CRx_CPclPK1upjJmeG5WP7FUsioAl1JlLDJ9MtVvq8UaOf4ioXmZHgGQ1Qk_1asbWiaZlycRBzBG3rpe1cAlPC0Pd2wVdcpBqV0lO-Ey1mfDLR5t2c46j_54N2d04SkuSwXJAo7Y3w8JGl"/>
                <div class="text-center md:text-left">
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white uppercase tracking-tight leading-tight">
                        Unit Pelaksana Teknis Perlindungan<br/>
                        Perempuan dan Anak (UPT PPA)
                    </h1>
                    <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">PROVINSI RIAU</p>
                    <p class="text-xs text-slate-500 dark:text-slate-500 italic mt-1">Jl. Diponegoro No. 36A (Komplek Gedung Dharma Wanita), Kota Pekanbaru</p>
                </div>
            </div>
        </header>
        <nav class="bg-primary sticky top-0 z-50 shadow-md">
            <div class="container mx-auto px-6 md:px-12">
                <ul class="flex flex-wrap text-sm font-bold text-white uppercase tracking-wide">
                    <li class="nav-item px-4 py-3 border-r border-white/20 {{ request()->routeIs('public.home') ? 'bg-white/20' : '' }}">
                        <a href="{{ route('public.home') }}">Beranda</a>
                    </li>
                    <li class="nav-item px-4 py-3 border-r border-white/20 group relative {{ request()->routeIs('public.profile') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="{{ route('public.profile') }}">Profil <span class="material-icons text-xs ml-1">expand_more</span></a>
                    </li>
                    <li class="nav-item px-4 py-3 border-r border-white/20 {{ request()->routeIs('public.services') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="{{ route('public.services') }}">Layanan UPT PPA <span class="material-icons text-xs ml-1">expand_more</span></a>
                    </li>
                    <li class="nav-item px-4 py-3 border-r border-white/20 {{ request()->routeIs('public.publications') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="{{ route('public.publications') }}">Publikasi <span class="material-icons text-xs ml-1">expand_more</span></a>
                    </li>
                    <li class="nav-item px-4 py-3 {{ request()->routeIs('public.gallery') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="{{ route('public.gallery') }}">Gallery <span class="material-icons text-xs ml-1">expand_more</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    
        @yield('content')
    
        <footer class="bg-primary text-white pt-12">
            <div class="container mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 pb-12">
                <div>
                    <h4 class="text-lg font-bold mb-6 uppercase border-b border-white/30 pb-2">Hubungi Kami</h4>
                    <div class="space-y-4 text-sm">
                        <p class="flex items-start gap-3">
                            <span class="material-icons text-white/70">location_on</span>
                            Jl. Diponegoro No. 36A (Komplek Gedung Dharma Wanita), Kota Pekanbaru
                        </p>
                        <p class="flex items-center gap-3">
                            <span class="material-icons text-white/70">call</span>
                            Telepon: +62 811-5201-515
                        </p>
                        <p class="text-white/80 italic">Anda juga bisa meninggalkan pesan/laporan/pengaduan melalui aplikasi Whatsapp dengan meng-klik tautan berikut:</p>
                        <div class="space-y-2">
                            <button class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 flex items-center justify-center gap-2">
                                <span class="material-icons text-sm">message</span> WA: +62 811-5201-515
                            </button>
                            <button class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 flex items-center justify-center gap-2">
                                <span class="material-icons text-sm">send</span> Pengaduan Kekerasan
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6 uppercase border-b border-white/30 pb-2">Pencarian</h4>
                    <form class="flex">
                        <input class="flex-grow text-slate-900 px-4 py-2 border-0 outline-none" placeholder="Masukkan kata kunci..." type="text"/>
                        <button class="bg-slate-200 text-primary font-bold px-4 py-2 hover:bg-white transition uppercase text-xs" type="submit">Cari</button>
                    </form>
                </div>
                <div class="lg:col-span-1">
                    <h4 class="text-lg font-bold mb-6 uppercase border-b border-white/30 pb-2">Lokasi</h4>
                    <div class="w-full h-48 bg-slate-300 relative overflow-hidden">
                        <img alt="Map Placeholder" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCX_Jy31_sx-Ot7GYg8hxMvUnF6jag8oykD0yfS11cTdeuwxGavU2fLCPWwrwUdmZo4Cgnb2Cyqr18t2Lh6nzP5jt0o_1Dcd3Wvmozmmg7b7dRYwr7plp2qmoz5RC4aS0YBocCNh5DCVmg0Jg9tdTkS014mfIWxEzXKVFQ0t9x7rhzvUqR9EIE4zkx9Q6VOFcPjoNNhqESKb2RUeuBUDdV4bBUM-LsFARvAIaw9olZOmi5geIfXU_YLa7k25F6VWTjveGOfuM7g8DJO"/>
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center">
                            <div class="bg-white p-2 text-slate-800 text-xs shadow-lg max-w-[200px]">
                                <p class="font-bold">DP3APPKB Prov Kalteng</p>
                                <p>Jl. Brigjen Katamso No. 11, Palangkaraya</p>
                                <a class="text-primary font-bold block mt-1 underline" href="#">Lihat peta besar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-900/50 py-4">
                <div class="container mx-auto px-6 md:px-12 text-center">
                    <p class="text-xs text-white/60">© UPT PPA Provinsi Riau 2024. Seluruh Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </footer>

    </div> <!-- End Floating Card Container -->

    <div class="fixed bottom-6 right-6 z-[100]">
        <a class="bg-green-500 text-white p-4 rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform" href="#">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path></svg>
        </a>
    </div>
</body>
</html>