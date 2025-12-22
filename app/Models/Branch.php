<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'featured_image',
        'description',
        'features_title',
        'features',
        'slider_images',
        'entry_images',
        'meeting_times',
        'schedule',
        'location',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'slider_images' => 'array',
        'entry_images' => 'array',
        'meeting_times' => 'array',
        'schedule' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Scope: Only active branches
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Accessor: Get full URL for featured image
     */
    public function getFeaturedImageUrlAttribute(): string
    {
        if ($this->featured_image) {
            // Check if it's a full path (starts with branches/)
            if (str_starts_with($this->featured_image, 'branches/')) {
                return asset('storage/' . $this->featured_image);
            }
            // Otherwise, it's an old asset image
            return asset('assets/images/' . $this->featured_image);
        }
        
        return asset('assets/images/ministries-img-1.jpg');
    }

    /**
     * Get full URLs for slider images
     */
    public function getSliderImageUrlsAttribute(): array
    {
        if (!is_array($this->slider_images)) {
            return [];
        }

        return array_map(function ($image) {
            if (str_starts_with($image, 'branches/')) {
                return asset('storage/' . $image);
            }
            return asset('assets/images/' . $image);
        }, $this->slider_images);
    }

    /**
     * Get full URLs for entry images
     */
    public function getEntryImageUrlsAttribute(): array
    {
        if (!is_array($this->entry_images)) {
            return [];
        }

        return array_map(function ($image) {
            if (str_starts_with($image, 'branches/')) {
                return asset('storage/' . $image);
            }
            return asset('assets/images/' . $image);
        }, $this->entry_images);
    }

    /**
     * Auto-generate slug from name when creating
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($branch) {
            if (empty($branch->slug)) {
                $branch->slug = Str::slug($branch->name);
            }
        });
    }
}
