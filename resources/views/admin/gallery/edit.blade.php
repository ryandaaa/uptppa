@extends('layouts.admin')

@section('title', 'Edit Item Galeri')
@section('header_title', 'Edit Item Galeri')
@section('header_subtitle', 'Sunting foto, video URL, atau dokumen.')

@section('content')
    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        @method('PUT')
        
        <!-- Main Form Area -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-xl shadow-card border border-slate-100 p-6">
                <div class="space-y-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Judul <span class="text-red-500">*</span></label>
                        <input type="text" name="title" id="title" value="{{ old('title', $gallery->title) }}" required class="block w-full border border-slate-200 rounded-lg focus:ring-2 focus:ring-riau-green focus:border-riau-green sm:text-sm text-slate-900 bg-slate-50 py-2.5 px-3">
                        @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-slate-700 mb-1">Deskripsi Singkat <span class="text-red-500">*</span></label>
                        <textarea name="description" id="description" rows="3" required class="block w-full border border-slate-200 rounded-lg focus:ring-2 focus:ring-riau-green focus:border-riau-green sm:text-sm text-slate-900 bg-slate-50 py-2.5 px-3">{{ old('description', $gallery->description) }}</textarea>
                        @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Tipe Konten <span class="text-red-500">*</span></label>
                        <div class="grid grid-cols-3 gap-3" id="type-selector">
                            <label class="cursor-pointer">
                                <input type="radio" name="type" value="image" class="peer sr-only" {{ old('type', $gallery->type) == 'image' ? 'checked' : '' }}>
                                <div class="rounded-lg border border-slate-200 bg-white p-3 text-center peer-checked:border-riau-green peer-checked:ring-1 peer-checked:ring-riau-green peer-checked:bg-riau-green/5 transition-all">
                                    <span class="material-symbols-outlined text-slate-400 peer-checked:text-riau-green block mb-1">image</span>
                                    <span class="text-sm font-medium text-slate-700">Foto</span>
                                </div>
                            </label>
                            
                            <label class="cursor-pointer">
                                <input type="radio" name="type" value="video" class="peer sr-only" {{ old('type', $gallery->type) == 'video' ? 'checked' : '' }}>
                                <div class="rounded-lg border border-slate-200 bg-white p-3 text-center peer-checked:border-riau-green peer-checked:ring-1 peer-checked:ring-riau-green peer-checked:bg-riau-green/5 transition-all">
                                    <span class="material-symbols-outlined text-slate-400 peer-checked:text-riau-green block mb-1">movie</span>
                                    <span class="text-sm font-medium text-slate-700">Video URL</span>
                                </div>
                            </label>

                            <label class="cursor-pointer">
                                <input type="radio" name="type" value="document" class="peer sr-only" {{ old('type', $gallery->type) == 'document' ? 'checked' : '' }}>
                                <div class="rounded-lg border border-slate-200 bg-white p-3 text-center peer-checked:border-riau-green peer-checked:ring-1 peer-checked:ring-riau-green peer-checked:bg-riau-green/5 transition-all">
                                    <span class="material-symbols-outlined text-slate-400 peer-checked:text-riau-green block mb-1">description</span>
                                    <span class="text-sm font-medium text-slate-700">Dokumen</span>
                                </div>
                            </label>
                        </div>
                        @error('type') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div id="file-upload-section" class="pt-4 {{ old('type', $gallery->type) == 'video' ? 'hidden' : '' }}">
                        <label class="block text-sm font-medium text-slate-700 mb-1" id="file-label">Ganti File Utama (Opsional, Akan mereplace file lama)</label>
                        @if($gallery->file_path && $gallery->type != 'video')
                            <p class="mb-2 text-sm text-slate-500">File saat ini ({{ count($gallery->file_urls) }}): 
                                @foreach($gallery->file_urls as $idx => $url)
                                    <a href="{{ $url }}" target="_blank" class="text-riau-green hover:underline">Lihat File {{ $idx+1 }}</a>{{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            </p>
                        @endif
                        <input type="file" name="file_path[]" id="file_path" class="block w-full border border-slate-200 rounded-lg sm:text-sm text-slate-900 bg-slate-50 py-2 px-3 focus:outline-none file:mr-4 file:py-1 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-riau-green file:text-white hover:file:bg-emerald-800 transition-all" multiple>
                        <p class="mt-1 text-xs text-slate-500" id="file-help">Untuk Foto: PNG/JPG. Untuk Dokumen: PDF.</p>
                        @error('file_path') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div id="video-url-section" class="pt-4 {{ old('type', $gallery->type) == 'video' ? '' : 'hidden' }}">
                        <label for="video_url" class="block text-sm font-medium text-slate-700 mb-1">URL Video Youtube</label>
                        <input type="url" name="video_url" id="video_url" value="{{ old('video_url', $gallery->video_url) }}" placeholder="https://youtube.com/watch?v=..." class="block w-full border border-slate-200 rounded-lg focus:ring-2 focus:ring-riau-green focus:border-riau-green sm:text-sm text-slate-900 bg-slate-50 py-2.5 px-3">
                        @error('video_url') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
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
                        <label class="block text-sm font-medium text-slate-700 mb-1">Ganti Thumbnail Cover</label>
                        @if($gallery->thumbnail && $gallery->thumbnail != $gallery->file_path)
                            <div class="mb-3 rounded-lg overflow-hidden border border-slate-200 aspect-video flex-shrink-0 bg-slate-100">
                                <img src="{{ $gallery->thumbnail_url }}" alt="Thumbnail Saat ini" class="w-full h-full object-cover">
                            </div>
                        @endif
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg hover:border-riau-green transition-colors cursor-pointer bg-slate-50 relative group">
                            <div class="space-y-1 text-center">
                                <span class="material-symbols-outlined text-slate-400 text-4xl group-hover:text-riau-green">image</span>
                                <div class="flex text-sm text-slate-600 justify-center">
                                    <label for="thumbnail" class="relative cursor-pointer rounded-md font-medium text-riau-green hover:text-emerald-700 focus-within:outline-none">
                                        <span>Upload Thumbnail</span>
                                        <input id="thumbnail" name="thumbnail" type="file" class="sr-only" accept="image/*">
                                    </label>
                                </div>
                                <p class="text-xs text-slate-500">Abaikan jika tak diganti.</p>
                            </div>
                        </div>
                        @error('thumbnail') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <div class="flex items-center">
                            <input id="is_published" name="is_published" type="checkbox" value="1" {{ old('is_published', $gallery->is_published) ? 'checked' : '' }} class="h-4 w-4 text-riau-green focus:ring-riau-green border-slate-300 rounded">
                            <label for="is_published" class="ml-2 block text-sm text-slate-700 font-medium">Tampilkan Langsung</label>
                        </div>
                    </div>

                    <div class="pt-4 flex gap-3">
                        <a href="{{ route('admin.gallery.index') }}" class="flex-1 text-center px-4 py-2 border border-slate-200 text-slate-600 rounded-lg text-sm font-medium hover:bg-slate-50 transition-colors">Batal</a>
                        <button type="submit" class="flex-1 px-4 py-2 bg-riau-green hover:bg-emerald-800 text-white rounded-lg text-sm font-medium shadow-sm transition-colors">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const radios = document.querySelectorAll('input[name="type"]');
        const fileSection = document.getElementById('file-upload-section');
        const videoSection = document.getElementById('video-url-section');
        const fileLabel = document.getElementById('file-label');
        const fileHelp = document.getElementById('file-help');
        const fileInput = document.getElementById('file_path');

        function updateUI(type) {
            if (type === 'video') {
                fileSection.classList.add('hidden');
                videoSection.classList.remove('hidden');
            } else {
                fileSection.classList.remove('hidden');
                videoSection.classList.add('hidden');
                
                if (type === 'image') {
                    fileLabel.innerText = 'Upload Foto Utama (Opsional, Bisa lebih dari satu)';
                    fileHelp.innerText = 'Format JPG/PNG, maks 10MB per file.';
                    fileInput.accept = 'image/*';
                    fileInput.multiple = true;
                } else if (type === 'document') {
                    fileLabel.innerText = 'Upload Dokumen PDF (Opsional)';
                    fileHelp.innerText = 'Format PDF, maks 10MB.';
                    fileInput.accept = '.pdf,.doc,.docx';
                    fileInput.multiple = false;
                }
            }
        }

        radios.forEach(radio => {
            radio.addEventListener('change', (e) => updateUI(e.target.value));
        });

        // Initialize
        const checked = document.querySelector('input[name="type"]:checked');
        if (checked) {
            updateUI(checked.value);
        }
    });
</script>
@endpush
