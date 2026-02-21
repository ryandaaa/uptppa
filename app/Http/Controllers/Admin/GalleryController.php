<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $galleries = Gallery::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                             ->orWhere('type', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.gallery.index', compact('galleries', 'search'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:image,video,document',
            'description' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048', // Mandatory for video or document, optional for image if file_path is the image itself.
            'file_path' => 'nullable|array', // Allow array
            'file_path.*' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240', // Max 10MB per file and restricted mimes
            'video_url' => 'nullable|url|max:255',
            'is_published' => 'nullable|boolean',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_published'] = $request->has('is_published');
        
        if ($data['is_published']) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('gallery/thumbnails', 'public');
        }

        if ($request->hasFile('file_path')) {
            $paths = [];
            foreach ($request->file('file_path') as $file) {
                 $paths[] = $file->store('gallery/files', 'public');
            }
            $data['file_path'] = $paths;
            
            // If it's an image and no thumbnail provided, use original file occasionally
            if ($data['type'] == 'image' && empty($data['thumbnail']) && count($paths) > 0) {
                $data['thumbnail'] = $paths[0]; // Set first image as thumbnail
            }
        }

        Gallery::create($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Item Galeri berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:image,video,document',
            'description' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048',
            'file_path' => 'nullable|array',
            'file_path.*' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
            'video_url' => 'nullable|url|max:255',
            'is_published' => 'nullable|boolean',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_published'] = $request->has('is_published');
        
        if ($data['is_published'] && !$gallery->is_published) {
            $data['published_at'] = now();
        } elseif (!$data['is_published']) {
            $data['published_at'] = null;
        }

        if ($request->hasFile('thumbnail')) {
            if ($gallery->thumbnail && $gallery->thumbnail != $gallery->file_path) {
                Storage::disk('public')->delete($gallery->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('gallery/thumbnails', 'public');
        }

        if ($request->hasFile('file_path')) {
            // Delete old files
            if (is_array($gallery->file_path)) {
                foreach ($gallery->file_path as $oldPath) {
                    if ($oldPath && $oldPath != $gallery->thumbnail) {
                         Storage::disk('public')->delete($oldPath);
                    }
                }
            } elseif ($gallery->file_path) {
                if ($gallery->file_path != $gallery->thumbnail) {
                    Storage::disk('public')->delete($gallery->file_path);
                }
            }

            $paths = [];
             foreach ($request->file('file_path') as $file) {
                 $paths[] = $file->store('gallery/files', 'public');
            }
            $data['file_path'] = $paths;

            // Set natural thumbnail if applicable
            if ($data['type'] == 'image' && empty($data['thumbnail']) && empty($gallery->thumbnail) && count($paths) > 0) {
                $data['thumbnail'] = $paths[0];
            }
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Item Galeri berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->thumbnail && $gallery->thumbnail != $gallery->file_path) {
            Storage::disk('public')->delete($gallery->thumbnail);
        }
        if (is_array($gallery->file_path)) {
             foreach ($gallery->file_path as $oldPath) {
                 if ($oldPath && $oldPath != $gallery->thumbnail) {
                     Storage::disk('public')->delete($oldPath);
                 }
             }
        } elseif ($gallery->file_path && $gallery->file_path != $gallery->thumbnail) {
             Storage::disk('public')->delete($gallery->file_path);
        }
        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Item Galeri berhasil dihapus.');
    }
}
