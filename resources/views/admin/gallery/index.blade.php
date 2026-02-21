@extends('layouts.admin')

@section('title', 'Kelola Galeri Publik')
@section('header_title', 'Galeri Publik')
@section('header_subtitle', 'Manajemen foto kegiatan, video, dan dokumen publik.')

@section('content')
    <div class="bg-white rounded-xl shadow-card border border-slate-100 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h3 class="text-lg font-bold text-slate-900">Daftar Item Galeri</h3>
                <p class="text-sm text-slate-500">Foto, video, dan materi yang bisa diakses publik.</p>
            </div>
            <div class="flex gap-2">
                <form action="{{ route('admin.gallery.index') }}" method="GET" class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-slate-400 text-[18px]">search</span>
                    </div>
                    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari judul..." class="block w-full pl-9 pr-3 py-2 border border-slate-200 rounded-lg text-sm bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-1 focus:ring-riau-green focus:border-riau-green transition-all shadow-sm h-full">
                </form>
                <a href="{{ route('admin.gallery.create') }}" class="px-4 py-2 bg-riau-green hover:bg-emerald-800 text-white rounded-lg text-sm font-medium shadow-sm transition-colors flex items-center gap-2 whitespace-nowrap">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    Tambah Item
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 text-slate-500 font-medium border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4 w-12">No</th>
                        <th class="px-6 py-4">Thumbnail / Judul</th>
                        <th class="px-6 py-4">Tipe</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($galleries as $index => $item)
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4 text-slate-500">
                                {{ $galleries->firstItem() + $index }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    @if($item->thumbnail)
                                        <div class="w-12 h-12 rounded object-cover overflow-hidden bg-slate-100 flex-shrink-0">
                                            <img src="{{ $item->thumbnail_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                                        </div>
                                    @else
                                        <div class="w-12 h-12 rounded bg-slate-100 flex items-center justify-center text-slate-400 flex-shrink-0">
                                            <span class="material-symbols-outlined text-[20px]">{{ $item->type == 'video' ? 'movie' : ($item->type == 'document' ? 'description' : 'image') }}</span>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-medium text-slate-900 max-w-xs truncate">{{ $item->title }}</p>
                                        <p class="text-xs text-slate-500 max-w-xs truncate">{{ Str::limit(strip_tags($item->description), 50) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if($item->type == 'image')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800 border border-slate-200"><span class="material-symbols-outlined text-[14px] mr-1">image</span> Foto</span>
                                @elseif($item->type == 'video')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-riau-light text-riau-green border border-riau-green/20"><span class="material-symbols-outlined text-[14px] mr-1">movie</span> Video</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200"><span class="material-symbols-outlined text-[14px] mr-1">description</span> Dokumen</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if($item->is_published)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">Ditampilkan</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">Draft</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.gallery.edit', $item->id) }}" class="p-1.5 text-slate-400 hover:text-riau-green hover:bg-riau-light rounded transition-colors" title="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                    </a>
                                    <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded transition-colors" title="Hapus">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-slate-500">
                                Belum ada item galeri yang ditambahkan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($galleries->hasPages())
        <div class="px-6 py-4 border-t border-slate-100">
            {{ $galleries->links() }}
        </div>
        @endif
    </div>
@endsection
