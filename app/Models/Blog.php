<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'featured_image',
        'content',
        'excerpt',
        'tags',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Scope: Only published blogs
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    /**
     * Accessor: Get full URL for featured image
     */
    public function getFeaturedImageUrlAttribute(): string
    {
        if ($this->featured_image) {
            // Check if it's a full path (starts with blogs/)
            if (str_starts_with($this->featured_image, 'blogs/')) {
                return asset('storage/' . $this->featured_image);
            }
            // Otherwise, it's an old asset image
            return asset('assets/images/' . $this->featured_image);
        }
        
        return asset('assets/images/post-1.jpg');
    }

    /**
     * Auto-generate slug from title when creating
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }
}
