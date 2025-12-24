    <!-- Our Blog Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                     <!-- Section Title Start -->
                     <div class="section-title">
                        <h3 class="wow fadeInUp">{{ content('home', 'our_blog', 'subtitle', 'latest post') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('home', 'our_blog', 'title', 'Read Our Latest Articles') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach($latestBlogs as $index => $blog)
                    <x-blog-card :blog="$blog" :delay="$index * 0.25" />
                @endforeach
            </div>
        </div>
     </div>
    <!-- Our Blog End -->

