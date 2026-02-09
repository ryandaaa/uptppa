@extends('layouts.public')

@section('content')
    @php
        $structure = [
            'root' => [
                'name' => 'SRI NISMALA DEWI, SKM',
                'nip' => '19770725 200312 2 009',
                'role' => 'KEPALA UPT PPA',
            ],
            'middle' => [
                [
                    'type' => 'fungsional',
                    'role' => 'KELOMPOK JABATAN FUNGSIONAL',
                    'desc' => 'Tim Profesi & Konselor',
                    'children' => []
                ],
                [
                    'type' => 'kasubag',
                    'role' => 'KEPALA SUB BAGIAN TATA USAHA',
                    'name' => 'KATERINA SUSANTI, SKM, M.Kes',
                    'nip' => '19750620 200003 2 005',
                    'children' => [
                        ['role' => 'PENGADMINISTRASI PERKANTORAN', 'name' => 'MASNIARTI', 'nip' => '19770514 200801 2 022'],
                        ['role' => 'OPERATOR LAYANAN OPERASIONAL', 'name' => 'Jefrizon'],
                        ['role' => 'OPERATOR LAYANAN OPERASIONAL', 'name' => 'Yogi Yogasuara'],
                        ['role' => 'OPERATOR LAYANAN OPERASIONAL', 'name' => 'Habibul Akmal'],
                    ]
                ]
            ],
            'bottom' => [
                [
                    'role' => 'KEPALA SEKSI PENGADUAN',
                    'name' => 'HENDRI SAMANTHA, S.IP, M.AP',
                    'nip' => '19880406 200701 1 004',
                    'children' => [
                         ['role' => 'PENATA KELOLA PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', 'name' => 'JUWITA, S.Sos', 'nip' => '19690710 199003 2 004'],
                         ['role' => 'PENATA KELOLA PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', 'name' => 'ETTY HERWATI, S.Sos', 'nip' => '19701127 200701 2 003'],
                         ['role' => 'PENATA KELOLA PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', 'name' => 'RUSNILAWATI, S.Sos', 'nip' => '19720420 199403 2 001'],
                    ]
                ],
                [
                    'role' => 'KEPALA SEKSI TINDAK LANJUT',
                    'name' => 'IIN RAFIDA, S.Psi, MM',
                    'nip' => '19810309 201102 2 001',
                    'children' => [
                         ['role' => 'PENATA KELOLA PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', 'name' => 'RAJA ZALIA GUSTIANA, S.Psi', 'nip' => '19880819 201503 2 004'],
                         ['role' => 'PENATA KELOLA PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', 'name' => 'WENI SAFITRI ISMAIL, S.H', 'nip' => '19930322 202203 2 008'],
                         ['role' => 'PENATA KELOLA PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', 'name' => 'PUTRI NOVI DUWINDI, S.H', 'nip' => '19941112 202203 2 005'],
                    ]
                ]
            ]
        ];
    @endphp

    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content (Left Column) -->
            <div class="lg:col-span-3">
                <h1 class="text-3xl md:text-4xl font-black text-primary mb-8 pb-4 border-b-2 border-slate-200 uppercase tracking-tight">
                    STRUKTUR ORGANISASI
                </h1>
                
                <!-- Desktop Tree View -->
                <div class="hidden md:block overflow-x-auto pb-12">
                    <div class="min-w-[900px] flex flex-col items-center">
                        
                        <!-- Level 1: Kepala UPT -->
                        <div class="flex flex-col items-center mb-12 relative z-10">
                            <div class="w-64 bg-white dark:bg-slate-800 border-2 border-primary/20 p-5 text-center rounded-lg relative z-20 hover:border-primary transition-colors duration-300">
                                <div class="w-16 h-16 bg-primary/5 mx-auto rounded-full mb-3 flex items-center justify-center overflow-hidden">
                                     <span class="material-icons text-primary text-3xl">person</span>
                                </div>
                                <h4 class="font-bold text-primary uppercase text-xs tracking-wider mb-1">{{ $structure['root']['role'] }}</h4>
                                <p class="text-sm font-bold text-slate-800 dark:text-slate-200">{{ $structure['root']['name'] }}</p>
                                <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wide">NIP. {{ $structure['root']['nip'] }}</p>
                            </div>
                            <!-- Vertical Line Down -->
                            <div class="h-10 w-px bg-slate-300 absolute -bottom-10 left-1/2 transform -translate-x-1/2"></div>
                        </div>

                        <!-- Connector Line Horizontal for Level 2 -->
                        <div class="w-[60%] h-8 border-t border-l border-r border-slate-300 rounded-t-xl mb-4 relative">
                            <div class="absolute -top-4 left-1/2 h-4 w-px bg-slate-300 transform -translate-x-1/2"></div>
                        </div>

                        <!-- Level 2: Middle Management -->
                        <div class="flex justify-center gap-6 w-full items-start mb-12">
                            @foreach($structure['middle'] as $node)
                                <div class="flex flex-col items-center relative w-1/3">
                                    <!-- Vertical Line Up -->
                                    <div class="h-4 w-px bg-slate-300 absolute -top-4 left-1/2 transform -translate-x-1/2"></div>
                                    
                                    <div class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-4 text-center rounded-lg mb-4 hover:shadow-md transition-shadow duration-300">
                                        <h4 class="font-bold text-slate-700 dark:text-slate-300 uppercase text-[10px] tracking-wider mb-1">{{ $node['role'] }}</h4>
                                        @if(isset($node['name']))
                                            <p class="text-xs font-bold text-slate-900 dark:text-white">{{ $node['name'] }}</p>
                                            <p class="text-[10px] text-slate-400 mt-0.5">NIP. {{ $node['nip'] }}</p>
                                        @elseif(isset($node['desc']))
                                            <p class="text-xs text-slate-500 italic">{{ $node['desc'] }}</p>
                                        @endif
                                    </div>

                                    <!-- Children for Level 2 -->
                                    @if(isset($node['children']) && count($node['children']) > 0)
                                        <div class="space-y-2 w-full px-4">
                                            @foreach($node['children'] as $child)
                                                <div class="bg-gray-50 dark:bg-slate-900/50 border-l-2 border-slate-300 p-2 pl-3 text-left relative">
                                                     <p class="text-[10px] font-bold text-slate-600 dark:text-slate-400 uppercase">{{ $child['role'] }}</p>
                                                     @if(isset($child['name']))
                                                        <p class="text-[10px] text-slate-500 truncate">{{ $child['name'] }}</p>
                                                     @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                         <!-- Connector Line Horizontal for Level 3 -->
                         <div class="w-[70%] h-8 border-t border-l border-r border-slate-300 rounded-t-xl mb-4 relative opacity-50">
                             <!-- This connector is visually just to group them, theoretically they connect to head but visual balance is key -->
                            <div class="absolute -top-24 left-1/2 h-24 w-px bg-slate-300 transform -translate-x-1/2 -z-10"></div>
                        </div>

                        <!-- Level 3: Sections (Kasi) -->
                        <div class="flex justify-center gap-10 w-full items-start">
                             @foreach($structure['bottom'] as $node)
                                <div class="flex flex-col items-center relative w-1/2 max-w-sm">
                                    <!-- Vertical Line Up -->
                                    <div class="h-4 w-px bg-slate-300 absolute -top-4 left-1/2 transform -translate-x-1/2"></div>
                                    
                                    <div class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-4 text-center rounded-lg mb-4 hover:border-slate-400 transition-colors">
                                        <h4 class="font-bold text-slate-700 dark:text-slate-300 uppercase text-[10px] tracking-wider mb-1">{{ $node['role'] }}</h4>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white">{{ $node['name'] }}</p>
                                        <p class="text-[10px] text-slate-400 mt-0.5">NIP. {{ $node['nip'] }}</p>
                                    </div>

                                    <!-- Children (Staff) -->
                                     <div class="w-full space-y-3 relative pl-6">
                                         <!-- Vertical line connecting children -->
                                         <div class="absolute top-0 bottom-6 left-2 w-px bg-slate-200"></div>

                                        @foreach($node['children'] as $child)
                                            <div class="relative pl-4">
                                                <!-- Horizontal connector -->
                                                <div class="absolute top-2.5 left-[-16px] w-4 h-px bg-slate-200"></div>

                                                <div class="bg-transparent">
                                                     <p class="text-[10px] font-semibold text-slate-500 uppercase tracking-wide leading-tight mb-0.5">{{ $child['role'] }}</p>
                                                     <p class="text-xs font-bold text-slate-800 dark:text-slate-200">{{ $child['name'] }}</p>
                                                     @if(isset($child['nip']))
                                                        <p class="text-[10px] text-slate-400">NIP. {{ $child['nip'] }}</p>
                                                     @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                             @endforeach
                        </div>

                    </div>
                </div>

                <!-- Mobile Accordion View -->
                <div class="md:hidden space-y-2" x-data="{ active: null }">
                    <!-- Root -->
                    <div class="bg-white dark:bg-slate-800 border-b border-slate-100 dark:border-slate-700 pb-2 mb-4">
                        <div class="flex items-center gap-3 py-2">
                             <div class="w-12 h-12 rounded-full bg-primary/5 flex items-center justify-center text-primary shrink-0">
                                <span class="material-icons text-2xl">person</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-xs uppercase tracking-wider mb-0.5">{{ $structure['root']['role'] }}</h4>
                                <p class="text-sm font-bold text-slate-800 dark:text-slate-200">{{ $structure['root']['name'] }}</p>
                                <p class="text-[10px] text-slate-400 mt-0.5">NIP. {{ $structure['root']['nip'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Middle Level -->
                    @foreach($structure['middle'] as $index => $node)
                        <div class="border border-slate-100 dark:border-slate-700 rounded-lg overflow-hidden">
                             <button @click="active = (active === 'mid-{{ $index }}' ? null : 'mid-{{ $index }}')" class="w-full text-left px-4 py-3 flex items-center justify-between bg-slate-50 dark:bg-slate-900 hover:bg-slate-100 transition-colors">
                                <div class="flex items-center gap-3">
                                    <span class="material-icons text-slate-400 text-lg">
                                        {{ $node['type'] === 'fungsional' ? 'groups' : ($node['type'] === 'kasubag' ? 'admin_panel_settings' : 'support_agent') }}
                                    </span>
                                    <div>
                                        <h4 class="font-semibold text-slate-700 dark:text-slate-300 text-xs uppercase tracking-wide">{{ $node['role'] }}</h4>
                                        @if(isset($node['name']))
                                            <p class="text-[10px] text-slate-500">{{ $node['name'] }}</p>
                                        @endif
                                    </div>
                                </div>
                                <span class="material-icons text-slate-300 text-sm transition-transform duration-300" :class="active === 'mid-{{ $index }}' ? 'rotate-180' : ''">expand_more</span>
                            </button>
                            @if(isset($node['children']) && count($node['children']) > 0)
                                <div x-show="active === 'mid-{{ $index }}'" x-collapse class="bg-white dark:bg-slate-800 p-3 space-y-3">
                                    @foreach($node['children'] as $child)
                                        <div class="pl-8 text-xs">
                                            <p class="font-bold text-slate-600 dark:text-slate-400">{{ $child['role'] }}</p>
                                            @if(isset($child['name']))
                                                <p class="text-[10px] text-slate-400">{{ $child['name'] }}</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach

                    <!-- Bottom Level (Seksi) -->
                     @foreach($structure['bottom'] as $index => $node)
                        <div class="border border-slate-100 dark:border-slate-700 rounded-lg overflow-hidden">
                             <button @click="active = (active === 'bot-{{ $index }}' ? null : 'bot-{{ $index }}')" class="w-full text-left px-4 py-3 flex items-center justify-between bg-slate-50 dark:bg-slate-900 hover:bg-slate-100 transition-colors">
                                <div class="flex items-center gap-3">
                                    <span class="material-icons text-slate-400 text-lg">assignment_ind</span>
                                    <div>
                                        <h4 class="font-semibold text-slate-700 dark:text-slate-300 text-xs uppercase tracking-wide">{{ $node['role'] }}</h4>
                                        <p class="text-[10px] text-slate-500">{{ $node['name'] }}</p>
                                    </div>
                                </div>
                                <span class="material-icons text-slate-300 text-sm transition-transform duration-300" :class="active === 'bot-{{ $index }}' ? 'rotate-180' : ''">expand_more</span>
                            </button>
                            @if(isset($node['children']) && count($node['children']) > 0)
                                <div x-show="active === 'bot-{{ $index }}'" x-collapse class="bg-white dark:bg-slate-800 p-3 space-y-4">
                                    @foreach($node['children'] as $child)
                                        <div class="pl-8 relative">
                                            <div class="absolute left-3 top-1.5 w-1.5 h-1.5 rounded-full bg-slate-200"></div>
                                            <p class="text-[10px] text-slate-400 uppercase tracking-wider mb-0.5">{{ $child['role'] }}</p>
                                            <p class="text-xs font-bold text-slate-700 dark:text-slate-300">{{ $child['name'] }}</p>
                                            @if(isset($child['nip']))
                                                <p class="text-[10px] text-slate-400">NIP. {{ $child['nip'] }}</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>
                
                 <!-- Riau Legal Footer -->
                <div class="mt-12 pt-6 border-t border-slate-200 dark:border-slate-700 text-center">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-wide">Dasar: Pergub Riau Nomor 85 Tahun 2019</p>
                </div>

            </div>

            <!-- Sidebar (Right Column) -->
            <div class="lg:col-span-1">
                @include('components.public.sidebar')
            </div>
        </div>
    </div>
@endsection
