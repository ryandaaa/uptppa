<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
        'image',
        'is_published',
        'published_at',
        'views_count',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    // Scopes can be added here for filtering
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeNews($query)
    {
        return $query->where('category', 'news');
    }

    public function scopeArticles($query)
    {
        return $query->where('category', 'article');
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('assets/images/placeholder.jpg'); // Adjust if you have a default
        }
        
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }

        return asset('storage/' . $this->image);
    }
}
