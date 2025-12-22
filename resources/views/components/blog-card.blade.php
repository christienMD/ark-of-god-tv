@props(['blog', 'delay' => 0])

<div class="col-lg-4 col-md-6">
    <!-- Blog Item Start -->
    <div class="blog-item wow fadeInUp" @if($delay) data-wow-delay="{{ $delay }}s" @endif>
        <!-- Post Featured Image Start-->
        <div class="post-featured-image" data-cursor-text="View">
            <figure>
                <a href="{{ route('blogs.show', $blog->slug) }}" class="image-anime">
                    <img src="{{ $blog->featured_image_url }}" alt="{{ $blog->title }}">
                </a>
            </figure>
        </div>
        <!-- Post Featured Image End -->

        <!-- post Item Body Start -->
        <div class="post-item-body">
            <h2><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h2>
        </div>
        <!-- Post Item Body End-->

        <!-- Post Item Footer Start-->
        <div class="post-item-footer">
            <a href="{{ route('blogs.show', $blog->slug) }}" class="read-more-btn">read more</a>
        </div>
        <!-- Post Item Footer End-->
    </div>
    <!-- Blog Item End -->
</div>

