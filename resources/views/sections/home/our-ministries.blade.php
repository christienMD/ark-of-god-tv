    <!-- Our Global Branches Section Start -->
    <div class="our-ministries">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ content('home', 'our_ministries', 'subtitle', 'branches') }}</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('home', 'our_ministries', 'title', 'Our Global Branches') }}</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                @foreach($featuredBranches as $index => $branch)
                <div class="col-md-4">
                    <!-- Ministries Item Start -->
                    <div class="ministries-item wow fadeInUp" data-wow-delay="{{ $index * 0.25 }}s">
                        <!-- Ministries Image Start -->
                        <div class="ministries-image" data-cursor-text="View">
                            <a href="{{ route('branches.show', $branch->slug) }}">
                                <figure>
                                    <img src="{{ asset('assets/images/' . $branch->featured_image) }}" alt="{{ $branch->name }}">
                                </figure>
                            </a>
                        </div>
                        <!-- Ministries Image End -->

                        <!-- Ministries Content Start -->
                        <div class="ministries-content">
                            <h3>{{ $branch->name }}</h3>
                        </div>
                        <!-- Ministries Content End -->

                        <!-- Ministries Btn Start -->
                        <div class="ministries-btn">
                            <a href="{{ route('branches.show', $branch->slug) }}" class="readmore-btn"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                        </div>
                        <!-- Ministries Btn End -->
                    </div>
                    <!-- Ministries Item End -->
                </div>
                @endforeach

                <div class="col-lg-12">
                    <div class="our-ministries-footer wow fadeInUp" data-wow-delay="0.75s">
                        <p>{{ content('home', 'our_ministries', 'footer_text', 'Explore the exciting new ways we are serving our community and growing together in faith with our latest ministry initiatives.') }} <a href="{{ route('branches.index') }}">View All Branches</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Global Branches Section End -->

