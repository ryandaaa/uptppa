<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $latestArticles = Post::published()->articles()->latest()->take(3)->get();
        $latestNews = Post::published()->news()->latest()->take(2)->get();
        
        return view('public.home', compact('latestArticles', 'latestNews'));
    }

    // Publications
    public function news()
    {
        $news = Post::published()->news()->latest()->paginate(9);
        return view('public.publications.news', compact('news'));
    }

    public function newsShow($slug)
    {
        $post = Post::published()->news()->where('slug', $slug)->firstOrFail();
        $post->increment('views_count');
        
        // Fetch related or latest news for sidebar/footer if needed
        $latestNews = Post::published()->news()->where('id', '!=', $post->id)->latest()->take(5)->get();

        return view('public.publications.news-show', compact('post', 'latestNews'));
    }

    public function articles()
    {
        $articles = Post::published()->articles()->latest()->paginate(9);
        return view('public.publications.articles', compact('articles'));
    }

    public function articlesShow($slug)
    {
        $post = Post::published()->articles()->where('slug', $slug)->firstOrFail();
        $post->increment('views_count');
        
        return view('public.publications.articles-show', compact('post'));
    }

    public function documents()
    {
        $documents = Gallery::published()->documents()->latest()->paginate(12);
        return view('public.publications.documents', compact('documents'));
    }

    // Gallery
    public function galleryImages()
    {
        $images = Gallery::published()->images()->latest()->paginate(12);
        return view('public.gallery.images', compact('images'));
    }

    public function galleryImagesShow($slug)
    {
        $gallery = Gallery::published()->images()->where('slug', $slug)->firstOrFail();
        return view('public.gallery.images-show', compact('gallery'));
    }

    public function galleryVideos()
    {
        $videos = Gallery::published()->videos()->latest()->paginate(12);
        return view('public.gallery.videos', compact('videos'));
    }

    public function galleryVideosShow($slug)
    {
        $gallery = Gallery::published()->videos()->where('slug', $slug)->firstOrFail();
        return view('public.gallery.videos-show', compact('gallery'));
    }

    public function galleryMaterials()
    {
        $materials = Gallery::published()->documents()->latest()->paginate(12); // Materials are synonymous with documents here? Or separate type? 
        // Based on seeder, I used 'document' type for materials. 
        // Let's stick to 'document' type for both 'Dokumen' page and 'Materi Edukasi' page for now, or distinguish if needed.
        // For now, let's assume 'Materi Edukasi' fetches everything of type 'document'.
        
        return view('public.gallery.materials', compact('materials'));
    }

    public function galleryMaterialsShow($slug)
    {
        $gallery = Gallery::published()->documents()->where('slug', $slug)->firstOrFail();
        return view('public.gallery.materials-show', compact('gallery'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        
        if (!$query) {
            return redirect()->route('public.home');
        }

        // Search Posts (News & Articles)
        $posts = Post::published()
            ->where(function($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('content', 'like', "%{$query}%");
            })
            ->latest()
            ->get();

        // Search Galleries (Images, Videos, Documents)
        $galleries = Gallery::published()
            ->where(function($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('description', 'like', "%{$query}%");
            })
            ->latest()
            ->get();

        return view('public.search', compact('posts', 'galleries', 'query'));
    }
}
