<?php

use App\Models\PageContent;

if (!function_exists('content')) {
    /**
     * Get content field value for a page section
     * 
     * @param string $page    Page slug (e.g., 'home')
     * @param string $section Section slug (e.g., 'hero')
     * @param string $field   Field name (e.g., 'title')
     * @param mixed $default  Default value if not found
     * @return mixed
     */
    function content(string $page, string $section, string $field, $default = null)
    {
        return PageContent::get($page, $section, $field, $default);
    }
}

if (!function_exists('content_image')) {
    /**
     * Get image URL for a page section field
     * 
     * @param string $page    Page slug
     * @param string $section Section slug
     * @param string $field   Field name
     * @return string|null
     */
    function content_image(string $page, string $section, string $field): ?string
    {
        return PageContent::getImage($page, $section, $field);
    }
}

if (!function_exists('section_active')) {
    /**
     * Check if a section is active
     * 
     * @param string $page    Page slug
     * @param string $section Section slug
     * @return bool
     */
    function section_active(string $page, string $section): bool
    {
        $content = PageContent::getSection($page, $section);
        return $content !== null && $content->is_active;
    }
}

