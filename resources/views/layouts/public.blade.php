<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>UPT PPA Provinsi Riau</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Turbo.js (SPA Feel) -->
    <script src="https://unpkg.com/@hotwired/turbo@7.3.0/dist/turbo.es2017-umd.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <style>
        /* Turbo Progress Bar */
        .turbo-progress-bar {
            background-color: #1A6C3A; /* Primary Color */
            height: 4px;
            box-shadow: 0 0 10px rgba(26, 108, 58, 0.7);
        }
    </style>
    <script>
        // Alpine.js + Turbo Bridge
        document.addEventListener('turbo:load', () => {
            // Re-initialize Alpine components if needed, or let Alpine handle it auto-magically
            // Alpine v3 usually handles DOM updates efficiently.
        });
        document.addEventListener('turbo:before-cache', () => {
            // Teardown logic if absolutely necessary
        });
    </script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1A6C3A",
                        "primary-dark": "#14552D",
                        "primary-light": "#2F8E4C",
                        secondary: "#F4C21A",
                        "secondary-dark": "#D6A60E",
                        tertiary: "#FFED8A",
                        quaternary: "#F4F7F0", 
                        accent: "#FFED8A",
                        "background-light": "#F4F7F0",
                        "background-dark": "#051f10",
                        "card-light": "#FFFFFF",
                        "card-dark": "#0a2e1a",
                        "border-light": "#D9E2D2",
                        "heading-text": "#0F3A21",
                        "body-text": "#2E463A",
                        "muted-text": "#6F887A",
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
            background: linear-gradient(135deg, #1A6C3A 0%, #14552D 100%);
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
        
        <!-- Desktop Header (Hidden on Mobile) -->
        <header class="hidden md:block bg-white dark:bg-slate-900 border-b-4 border-primary py-4">
            <div class="container mx-auto px-6 md:px-12 flex flex-row items-end justify-between gap-6">
                <img alt="Logo Riau" class="h-24 w-auto" src="https://image2url.com/r2/default/images/1770601010721-6423e80f-f1dc-4cfd-9da8-1c1cdcf05a8b.webp"/>
                <p class="text-xs text-slate-500 dark:text-slate-500 italic text-right mb-1">Jl. Diponegoro No. 36A (Komplek Gedung Dharma Wanita), Kota Pekanbaru</p>
            </div>
        </header>

        <!-- Desktop Navigation (Hidden on Mobile) -->
        <nav class="hidden md:block bg-primary sticky top-0 z-50 shadow-md">
            <div class="container mx-auto px-6 md:px-12">
                <ul class="flex flex-wrap text-sm font-bold text-white uppercase tracking-wide">
                    <li class="nav-item px-4 py-3 border-r border-white/20 {{ request()->routeIs('public.home') ? 'bg-white/20' : '' }}">
                        <a href="{{ route('public.home') }}">Beranda</a>
                    </li>
                    <li class="nav-item px-4 py-3 border-r border-white/20 group relative {{ request()->routeIs('public.profile.*') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="{{ route('public.profile.index') }}">Profil <span class="material-icons text-xs ml-1">expand_more</span></a>
                        <!-- Dropdown Menu -->
                        <ul class="absolute left-0 top-full bg-white text-slate-800 shadow-lg hidden group-hover:block min-w-[200px] z-50">
                            <li><a href="{{ route('public.profile.about') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Tentang UPT PPA</a></li>
                            <li><a href="{{ route('public.profile.structure') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-4 py-3 border-r border-white/20 group relative {{ request()->routeIs('public.services.*') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="#">Layanan UPT PPA <span class="material-icons text-xs ml-1">expand_more</span></a>
                        <!-- Dropdown Menu -->
                        <ul class="absolute left-0 top-full bg-white text-slate-800 shadow-lg hidden group-hover:block min-w-[250px] z-50">
                            <li><a href="{{ route('public.services.index') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Layanan Pengaduan</a></li>
                            <li><a href="{{ route('public.services.lapak') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Lapak UPTPPA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-4 py-3 border-r border-white/20 group relative {{ request()->routeIs('public.publications.*') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="#">Publikasi <span class="material-icons text-xs ml-1">expand_more</span></a>
                        <!-- Dropdown Menu -->
                        <ul class="absolute left-0 top-full bg-white text-slate-800 shadow-lg hidden group-hover:block min-w-[200px] z-50">
                            <li><a href="{{ route('public.publications.news') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Berita</a></li>
                            <li><a href="{{ route('public.publications.articles') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Artikel</a></li>
                            <li><a href="{{ route('public.publications.documents') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Dokumen</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-4 py-3 group relative {{ request()->routeIs('public.gallery.*') ? 'bg-white/20' : '' }}">
                        <a class="flex items-center" href="#">Gallery <span class="material-icons text-xs ml-1">expand_more</span></a>
                        <!-- Dropdown Menu -->
                        <ul class="absolute left-0 top-full bg-white text-slate-800 shadow-lg hidden group-hover:block min-w-[200px] z-50">
                            <li><a href="{{ route('public.gallery.images') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Gambar</a></li>
                            <li><a href="{{ route('public.gallery.videos') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Video</a></li>
                            <li><a href="{{ route('public.gallery.materials') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition">Materi Edukasi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Mobile App Bar & Drawer (Alpine.js context) -->
        <div x-data="{ open: false }" class="md:hidden">
            
            <!-- App Bar -->
            <div class="fixed top-0 left-0 right-0 h-16 bg-white dark:bg-slate-900 shadow-md z-50 flex items-center justify-between px-4 border-b border-slate-200 dark:border-slate-800">
                <div class="flex items-center gap-3">
                    <img src="https://image2url.com/r2/default/images/1770601010721-6423e80f-f1dc-4cfd-9da8-1c1cdcf05a8b.webp" class="h-10 w-auto" alt="Logo">
                </div>
                <button @click="open = true" class="p-2 text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition">
                    <span class="material-icons text-2xl">menu</span>
                </button>
            </div>

            <!-- Spacer for Fixed App Bar -->
            <div class="h-16"></div>

            <!-- Navigation Drawer Overlay -->
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @click="open = false" 
                 class="fixed inset-0 z-[60] bg-black/50 backdrop-blur-sm"></div>

            <!-- Navigation Drawer -->
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full"
                 class="fixed top-0 right-0 h-full w-[80%] max-w-sm bg-white dark:bg-slate-900 z-[70] shadow-2xl overflow-y-auto">
                
                <!-- Drawer Header -->
                <div class="p-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between bg-slate-50 dark:bg-slate-800/50">
                    <span class="font-bold text-slate-800 dark:text-white text-lg">Menu Utama</span>
                    <button @click="open = false" class="p-2 text-slate-500 hover:text-red-500 transition">
                        <span class="material-icons">close</span>
                    </button>
                </div>

                <!-- Drawer Links -->
                <ul class="py-2">
                    <li>
                        <a href="{{ route('public.home') }}" class="block px-6 py-3 text-slate-700 dark:text-slate-300 font-medium hover:bg-primary/5 hover:text-primary transition border-l-4 border-transparent hover:border-primary">
                            Beranda
                        </a>
                    </li>
                    
                    <!-- Profil Accordion -->
                    <li x-data="{ expanded: false }">
                        <button @click="expanded = !expanded" class="w-full px-6 py-3 flex items-center justify-between text-slate-700 dark:text-slate-300 font-medium hover:bg-primary/5 hover:text-primary transition border-l-4 border-transparent hover:border-primary">
                            <span>Profil</span>
                            <span class="material-icons text-sm transition-transform" :class="expanded ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <ul x-show="expanded" x-collapse class="bg-slate-50 dark:bg-slate-800/50 py-2">
                            <li><a href="{{ route('public.profile.about') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Tentang UPT PPA</a></li>
                            <li><a href="{{ route('public.profile.structure') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Struktur Organisasi</a></li>
                        </ul>
                    </li>

                    <!-- Layanan Accordion -->
                    <li x-data="{ expanded: false }">
                        <button @click="expanded = !expanded" class="w-full px-6 py-3 flex items-center justify-between text-slate-700 dark:text-slate-300 font-medium hover:bg-primary/5 hover:text-primary transition border-l-4 border-transparent hover:border-primary">
                            <span>Layanan</span>
                            <span class="material-icons text-sm transition-transform" :class="expanded ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <ul x-show="expanded" x-collapse class="bg-slate-50 dark:bg-slate-800/50 py-2">
                            <li><a href="{{ route('public.services.index') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Layanan Pengaduan</a></li>
                            <li><a href="{{ route('public.services.lapak') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Lapak UPTPPA</a></li>
                        </ul>
                    </li>

                    <!-- Publikasi Accordion -->
                    <li x-data="{ expanded: false }">
                        <button @click="expanded = !expanded" class="w-full px-6 py-3 flex items-center justify-between text-slate-700 dark:text-slate-300 font-medium hover:bg-primary/5 hover:text-primary transition border-l-4 border-transparent hover:border-primary">
                            <span>Publikasi</span>
                            <span class="material-icons text-sm transition-transform" :class="expanded ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <ul x-show="expanded" x-collapse class="bg-slate-50 dark:bg-slate-800/50 py-2">
                            <li><a href="{{ route('public.publications.news') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Berita</a></li>
                            <li><a href="{{ route('public.publications.articles') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Artikel</a></li>
                            <li><a href="{{ route('public.publications.documents') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Dokumen</a></li>
                        </ul>
                    </li>

                    <!-- Gallery Accordion -->
                    <li x-data="{ expanded: false }">
                        <button @click="expanded = !expanded" class="w-full px-6 py-3 flex items-center justify-between text-slate-700 dark:text-slate-300 font-medium hover:bg-primary/5 hover:text-primary transition border-l-4 border-transparent hover:border-primary">
                            <span>Galeri</span>
                            <span class="material-icons text-sm transition-transform" :class="expanded ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <ul x-show="expanded" x-collapse class="bg-slate-50 dark:bg-slate-800/50 py-2">
                            <li><a href="{{ route('public.gallery.images') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Gambar</a></li>
                            <li><a href="{{ route('public.gallery.videos') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Video</a></li>
                            <li><a href="{{ route('public.gallery.materials') }}" class="block pl-10 pr-6 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-primary">Materi Edukasi</a></li>
                        </ul>
                    </li>

                    <li class="mt-6 px-6">
                        <a href="{{ route('public.complaint') }}" class="w-full bg-green-600 text-white font-bold py-3 px-4 rounded flex items-center justify-center gap-2 shadow-lg">
                            <span class="material-icons text-sm">support_agent</span>
                            Layanan Pengaduan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    
        <!-- Mobile Sticky Search Bar -->
        <div class="md:hidden sticky top-[60px] z-40 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-4 py-3 shadow-sm">
            <form action="{{ route('public.search') }}" method="GET" class="relative">
                <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input type="text" name="q" placeholder="Cari layanan..." class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition">
            </form>
        </div>

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
                            Telepon: +62 811-7070-98
                        </p>
                        <p class="text-white/80 italic">Anda juga bisa meninggalkan pesan/laporan/pengaduan melalui aplikasi Whatsapp dengan meng-klik tautan berikut:</p>
                        <div class="space-y-2">
                            <button class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 flex items-center justify-center gap-2">
                                <span class="material-icons text-sm">message</span> WA: +62 811-7070-98
                            </button>
                            <a href="{{ route('public.complaint') }}" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 flex items-center justify-center gap-2">
                                <span class="material-icons text-sm">send</span> Pengaduan Kekerasan
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6 uppercase border-b border-white/30 pb-2">Pencarian</h4>
                    <form action="{{ route('public.search') }}" method="GET" class="flex">
                        <input name="q" class="flex-grow text-slate-900 px-4 py-2 border-0 outline-none" placeholder="Masukkan kata kunci..." type="text"/>
                        <button class="bg-slate-200 text-primary font-bold px-4 py-2 hover:bg-white transition uppercase text-xs" type="submit">Cari</button>
                    </form>
                </div>
                <div class="lg:col-span-1">
                    <h4 class="text-lg font-bold mb-6 uppercase border-b border-white/30 pb-2">Lokasi</h4>
                    <div class="w-full h-48 bg-slate-300 relative overflow-hidden">
                        <iframe 
                            width="100%" 
                            height="100%" 
                            id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=Jalan%20Diponegoro%20No.%2036A%2C%20Pekanbaru%2C%20Riau&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            frameborder="0" 
                            scrolling="no" 
                            marginheight="0" 
                            marginwidth="0">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="bg-slate-900/50 py-4">
                <div class="container mx-auto px-6 md:px-12 text-center">
                    <p class="text-xs text-white/60">© UPT PPA Provinsi Riau 2026. Seluruh Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </footer>

    </div> <!-- End Floating Card Container -->

    <!-- Floating Action Button (Mobile Native "Bantuan") -->
    <div class="fixed bottom-6 right-6 z-[100] md:hidden">
        <button class="bg-primary text-white px-5 py-3 rounded-full shadow-2xl flex items-center gap-2 hover:scale-105 transition-transform">
            <span class="material-icons text-xl">support_agent</span>
            <span class="font-bold">Bantuan</span>
        </button>
    </div>

    <!-- Desktop Floating WA -->
    <div class="hidden md:block fixed bottom-6 right-6 z-[100]">
        <a class="bg-green-500 text-white p-4 rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform" href="https://wa.me/62811707098" target="_blank">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path></svg>
        </a>
    </div>
</body>
</html>