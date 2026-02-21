@extends('layouts.admin')

@section('title', 'Kelola Berita & Artikel')
@section('header_title', 'Berita & Artikel')
@section('header_subtitle', 'Manajemen publikasi berita dan artikel edukasi UPT PPA.')

@section('content')
    <div class="bg-white rounded-xl shadow-card border border-slate-100 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h3 class="text-lg font-bold text-slate-900">Daftar Publikasi</h3>
                <p class="text-sm text-slate-500">Kelola semua berita dan artikel yang tayang di website.</p>
            </div>
            <div class="flex gap-2">
                <form action="{{ route('admin.posts.index') }}" method="GET" class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-slate-400 text-[18px]">search</span>
                    </div>
                    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari judul..." class="block w-full pl-9 pr-3 py-2 border border-slate-200 rounded-lg text-sm bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-1 focus:ring-riau-green focus:border-riau-green transition-all shadow-sm h-full">
                </form>
                <a href="{{ route('admin.posts.create') }}" class="px-4 py-2 bg-riau-green hover:bg-emerald-800 text-white rounded-lg text-sm font-medium shadow-sm transition-colors flex items-center gap-2 whitespace-nowrap">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    Tambah Baru
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 text-slate-500 font-medium border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4 w-12">No</th>
                        <th class="px-6 py-4">Judul</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Tanggal Tayang</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($posts as $index => $post)
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4 text-slate-500">
                                {{ $posts->firstItem() + $index }}
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-900 max-w-xs truncate">
                                {{ $post->title }}
                            </td>
                            <td class="px-6 py-4">
                                @if($post->category == 'news')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800 border border-slate-200">Berita</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-riau-light text-riau-green border border-riau-green/20">Artikel</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if($post->is_published)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">Ditayangkan</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">Draft</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-slate-600">
                                {{ $post->published_at ? $post->published_at->format('d M Y') : '-' }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="p-1.5 text-slate-400 hover:text-riau-green hover:bg-riau-light rounded transition-colors" title="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus post ini?');">
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
                            <td colspan="6" class="px-6 py-8 text-center text-slate-500">
                                Belum ada publikasi yang ditambahkan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($posts->hasPages())
        <div class="px-6 py-4 border-t border-slate-100">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
@endsection
