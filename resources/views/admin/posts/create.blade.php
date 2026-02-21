@extends('layouts.admin')

@section('title', 'Tambah Publikasi')
@section('header_title', 'Buat Berita / Artikel Baru')
@section('header_subtitle', 'Tulis kontent publikasi baru untuk website UPT PPA.')

@section('content')
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        
        <!-- Main Form Area -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-xl shadow-card border border-slate-100 p-6">
                <div class="space-y-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Judul <span class="text-red-500">*</span></label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" required class="block w-full border border-slate-200 rounded-lg focus:ring-2 focus:ring-riau-green focus:border-riau-green sm:text-sm text-slate-900 bg-slate-50 py-2.5 px-3">
                        @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-slate-700 mb-1">Konten <span class="text-red-500">*</span></label>
                        <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                        <trix-editor input="content" class="min-h-[300px] border border-slate-200 rounded-lg bg-slate-50 prose prose-slate max-w-none text-sm text-slate-900 p-4"></trix-editor>
                        @error('content') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        <style>
                            /* Hide exact attach button to keep UI clean if we don't fully support Trix attach yet */
                            .trix-button-group--file-tools { display: none !important; }
                        </style>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Config -->
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-xl shadow-card border border-slate-100 p-6">
                <h3 class="text-base font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100">Pengaturan Publikasi</h3>
                
                <div class="space-y-5">
                    <div>
                        <label for="category" class="block text-sm font-medium text-slate-700 mb-1">Kategori <span class="text-red-500">*</span></label>
                        <select name="category" id="category" class="block w-full border border-slate-200 rounded-lg focus:ring-2 focus:ring-riau-green focus:border-riau-green sm:text-sm text-slate-900 bg-slate-50 py-2.5 px-3">
                            <option value="news" {{ old('category') == 'news' ? 'selected' : '' }}>Berita Aktual</option>
                            <option value="article" {{ old('category') == 'article' ? 'selected' : '' }}>Artikel Edukasi</option>
                        </select>
                        @error('category') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Thumbnail Gambar</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg hover:border-riau-green transition-colors cursor-pointer bg-slate-50 relative group">
                            <div class="space-y-1 text-center">
                                <span class="material-symbols-outlined text-slate-400 text-4xl group-hover:text-riau-green">image</span>
                                <div class="flex text-sm text-slate-600 justify-center">
                                    <label for="image" class="relative cursor-pointer rounded-md font-medium text-riau-green hover:text-emerald-700 focus-within:outline-none">
                                        <span>Upload file</span>
                                        <input id="image" name="image" type="file" class="sr-only" accept="image/*">
                                    </label>
                                </div>
                                <p class="text-xs text-slate-500">PNG, JPG, GIF up to 2MB</p>
                            </div>
                        </div>
                        @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <div class="flex items-center">
                            <input id="is_published" name="is_published" type="checkbox" value="1" {{ old('is_published') ? 'checked' : '' }} class="h-4 w-4 text-riau-green focus:ring-riau-green border-slate-300 rounded">
                            <label for="is_published" class="ml-2 block text-sm text-slate-700 font-medium">Tayangkan Langsung</label>
                        </div>
                        <p class="text-xs text-slate-500 mt-1 ml-6">Pilih untuk menerbitkan, uncheck untuk menyimpannya sebagai draft.</p>
                    </div>

                    <div class="pt-4 flex gap-3">
                        <a href="{{ route('admin.posts.index') }}" class="flex-1 text-center px-4 py-2 border border-slate-200 text-slate-600 rounded-lg text-sm font-medium hover:bg-slate-50 transition-colors">Batal</a>
                        <button type="submit" class="flex-1 px-4 py-2 bg-riau-green hover:bg-emerald-800 text-white rounded-lg text-sm font-medium shadow-sm transition-colors">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
