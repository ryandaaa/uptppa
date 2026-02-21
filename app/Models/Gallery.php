<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'type',
        'description',
        'thumbnail',
        'file_path',
        'video_url',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
        'file_path' => 'array',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeImages($query)
    {
        return $query->where('type', 'image');
    }

    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }

    public function scopeDocuments($query)
    {
        return $query->where('type', 'document');
    }

    public function getThumbnailUrlAttribute()
    {
        if (!$this->thumbnail) {
            return null;
        }
        
        if (Str::startsWith($this->thumbnail, ['http://', 'https://'])) {
            return $this->thumbnail;
        }

        return asset('storage/' . $this->thumbnail);
    }

    public function getFileUrlAttribute()
    {
        if (!$this->file_path) {
            return null;
        }

        // Handle string (legacy)
        if (is_string($this->file_path)) {
            if (Str::startsWith($this->file_path, ['http://', 'https://'])) {
                return $this->file_path;
            }
            return asset('storage/' . $this->file_path);
        }

        // Handle array (new json schema) - Return first image URL as primary / default
        if (is_array($this->file_path) && count($this->file_path) > 0) {
             if (Str::startsWith($this->file_path[0], ['http://', 'https://'])) {
                return $this->file_path[0];
            }
            return asset('storage/' . $this->file_path[0]);
        }

        return null;
    }

    // New accessor strictly for getting all file URLs if the record holds an array
    public function getFileUrlsAttribute()
    {
        if (!$this->file_path) {
            return tap([], function () {}); // empty array
        }

        if (is_string($this->file_path)) {
            return [$this->file_url];
        }

        if (is_array($this->file_path)) {
            return array_map(function($path) {
                if (Str::startsWith($path, ['http://', 'https://'])) {
                    return $path;
                }
                return asset('storage/' . $path);
            }, $this->file_path);
        }

        return [];
    }
}
