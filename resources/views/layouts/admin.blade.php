<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Admin Dashboard') - UPT PPA</title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
    
    <!-- Material Symbols for older views compatibility -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <!-- Include Trix Editor -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <!-- Turbo.js -->
    <script src="https://unpkg.com/@hotwired/turbo@7.3.0/dist/turbo.es2017-umd.js"></script>
    <style>
        .turbo-progress-bar {
            background-color: #059669;
            height: 4px;
            box-shadow: 0 0 10px rgba(5, 150, 105, 0.7);
        }
    </style>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#059669", 
                        "primary-hover": "#047857",
                        "primary-light": "#d1fae5",
                        "background-light": "#f3f4f6", 
                        "background-dark": "#111111", 
                        "surface-light": "#ffffff",
                        "surface-dark": "#1c1c1c", 
                        "border-light": "#e5e7eb", 
                        "border-dark": "#333333",
                        "text-main-light": "#111827", 
                        "text-main-dark": "#ededed",
                        "text-muted-light": "#6b7280", 
                        "text-muted-dark": "#a1a1a1",
                        /* Kept for backward compatibility with other views */
                        "riau-green": "#14552D",
                        "riau-light": "#EEF5F0",
                        "accent-gold": "#C69B32",
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Inter', 'sans-serif'],
                    },
                    borderRadius: {
                        DEFAULT: "6px",
                        'lg': "8px",
                        'xl': "12px",
                    },
                    boxShadow: {
                        'subtle': '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
                        'card': '0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.02)',
                    }
                },
            },
        };
    </script>
    <style>
        body {
            transition: background-color 0.3s ease, color 0.3s ease;
            font-family: 'Inter', sans-serif;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        /* Custom scrollbar for main area */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent; 
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #4b5563; 
        }
        .dark ::-webkit-scrollbar-thumb:hover {
            background: #6b7280; 
        }
    </style>
    @stack('styles')
</head>
<body class="bg-background-light dark:bg-background-dark text-text-main-light dark:text-text-main-dark font-sans h-screen flex overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-72 bg-surface-light dark:bg-surface-dark border-r border-border-light dark:border-border-dark flex flex-col h-full flex-shrink-0 transition-colors duration-300 z-20">
        <div class="p-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white shadow-sm shrink-0">
                <span class="material-icons-outlined text-xl">security</span>
            </div>
            <div class="flex flex-col">
                <span class="font-bold text-lg leading-tight tracking-tight">UPT PPA</span>
                <span class="text-xs text-text-muted-light dark:text-text-muted-dark font-medium">Admin Portal</span>
            </div>
        </div>
        
        <nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto no-scrollbar">
            <a class="group flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-lg relative transition-colors {{ request()->routeIs('admin.dashboard') ? 'text-primary bg-primary-light dark:bg-primary/20' : 'text-text-muted-light dark:text-text-muted-dark hover:text-text-main-light dark:hover:text-text-main-dark hover:bg-gray-50 dark:hover:bg-white/5' }}" href="{{ route('admin.dashboard') }}">
                @if(request()->routeIs('admin.dashboard'))
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 h-5 w-1 bg-primary rounded-r-full"></div>
                @endif
                <span class="material-icons-outlined text-xl">dashboard</span>
                Dashboard
            </a>
            <a class="group flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-lg relative transition-colors {{ request()->routeIs('admin.posts.*') ? 'text-primary bg-primary-light dark:bg-primary/20' : 'text-text-muted-light dark:text-text-muted-dark hover:text-text-main-light dark:hover:text-text-main-dark hover:bg-gray-50 dark:hover:bg-white/5' }}" href="{{ route('admin.posts.index') }}">
                @if(request()->routeIs('admin.posts.*'))
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 h-5 w-1 bg-primary rounded-r-full"></div>
                @endif
                <span class="material-icons-outlined text-xl">article</span>
                Berita & Artikel
            </a>
            <a class="group flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-lg relative transition-colors {{ request()->routeIs('admin.gallery.*') ? 'text-primary bg-primary-light dark:bg-primary/20' : 'text-text-muted-light dark:text-text-muted-dark hover:text-text-main-light dark:hover:text-text-main-dark hover:bg-gray-50 dark:hover:bg-white/5' }}" href="{{ route('admin.gallery.index') }}">
                @if(request()->routeIs('admin.gallery.*'))
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 h-5 w-1 bg-primary rounded-r-full"></div>
                @endif
                <span class="material-icons-outlined text-xl">collections</span>
                Galeri Publik
            </a>

            <div class="pt-6 pb-2">
                <p class="px-3 text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider">Sistem</p>
            </div>
            <a class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-text-muted-light dark:text-text-muted-dark hover:text-text-main-light dark:hover:text-text-main-dark hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg transition-colors" href="/">
                <span class="material-icons-outlined text-xl">public</span>
                Kunjungi Web
            </a>
        </nav>

        <div class="p-4 border-t border-border-light dark:border-border-dark">
            <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors group">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-white text-sm font-semibold shadow-sm">
                        {{ substr(Auth::user()->name ?? 'A', 0, 2) }}
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-medium text-text-main-light dark:text-text-main-dark">{{ Auth::user()->name ?? 'Admin' }}</span>
                        <span class="text-xs text-text-muted-light dark:text-text-muted-dark truncate max-w-[120px]">{{ Auth::user()->email ?? '' }}</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                    @csrf
                    <button type="submit" class="text-text-muted-light dark:text-text-muted-dark group-hover:text-red-500 transition-colors cursor-pointer" title="Logout">
                        <span class="material-icons-outlined text-lg">logout</span>
                    </button>
                </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark transition-colors duration-300 relative">
        <!-- Header -->
        <header class="sticky top-0 z-10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-8 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2 text-text-muted-light dark:text-text-muted-dark text-sm">
                <span>Admin</span>
                <span class="text-xs text-gray-400">/</span>
                <span class="text-text-main-light dark:text-text-main-dark font-medium">@yield('header_title')</span>
            </div>
            
            <button class="p-2 text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors relative">
                <span class="material-icons-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-background-light dark:border-background-dark"></span>
            </button>
        </header>

        <!-- Scrollable Content Area -->
        <div class="px-8 pb-12 mt-4 max-w-7xl mx-auto">
            @if(session('success'))
                <div class="mb-6 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-800 text-emerald-700 dark:text-emerald-400 px-4 py-3 rounded-lg flex items-center gap-3">
                    <span class="material-icons-outlined text-emerald-500">check_circle</span>
                    <p class="text-sm font-medium">{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-700 dark:text-red-400 px-4 py-3 rounded-lg flex items-center gap-3">
                    <span class="material-icons-outlined text-red-500">error</span>
                    <p class="text-sm font-medium">{{ session('error') }}</p>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    @stack('scripts')
</body>
</html>
