<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = [
        'page_slug',
        'section_slug',
        'section_title',
        'content',
        'order',
        'is_active',
    ];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Scope: Filter by page
     */
    public function scopeByPage($query, string $page)
    {
        return $query->where('page_slug', $page);
    }

    /**
     * Scope: Filter by section
     */
    public function scopeBySection($query, string $section)
    {
        return $query->where('section_slug', $section);
    }

    /**
     * Scope: Only active sections
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get a specific field from content
     */
    public function getField(string $field, $default = null)
    {
        return $this->content[$field] ?? $default;
    }

    /**
     * Get image URL from content field
     */
    public function getImageUrl(string $field): ?string
    {
        $image = $this->content[$field] ?? null;
        
        if (!$image) {
            return null;
        }

        // If it's already a full URL, return as is
        if (str_starts_with($image, 'http')) {
            return $image;
        }

        // If it's in storage (uploaded via admin)
        if (str_starts_with($image, 'page-content/')) {
            return asset('storage/' . $image);
        }

        // Otherwise, assume it's in assets/images
        return asset('assets/images/' . $image);
    }

    /**
     * Get content for a specific page and section
     */
    public static function getSection(string $page, string $section): ?self
    {
        return static::byPage($page)
            ->bySection($section)
            ->active()
            ->first();
    }

    /**
     * Get a specific field value
     */
    public static function get(string $page, string $section, string $field, $default = null)
    {
        $content = static::getSection($page, $section);
        
        if (!$content) {
            return $default;
        }

        return $content->getField($field, $default);
    }

    /**
     * Get image URL for a specific field
     */
    public static function getImage(string $page, string $section, string $field): ?string
    {
        $content = static::getSection($page, $section);
        
        if (!$content) {
            return null;
        }

        return $content->getImageUrl($field);
    }
}

