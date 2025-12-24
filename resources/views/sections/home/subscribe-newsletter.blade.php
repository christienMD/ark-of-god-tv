    <!-- Subscribe Newsletter Section Start -->
    <div class="subscribe-newsletter parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                     <!-- Section Title Start -->
                     <div class="section-title">
                        <h3 class="wow fadeInUp">{{ content('home', 'subscribe_newsletter', 'subtitle', 'subscribe newsletter') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('home', 'subscribe_newsletter', 'title', 'Keep Up With Our Latest News') }}</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">{{ content('home', 'subscribe_newsletter', 'description', 'Subscribe to our newsletter to stay informed about upcoming events, inspiring messages, and the latest news from our church community.') }}</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Subscribe Newsletter Form Start -->
                    <div class="subscribe-newsletter-form wow fadeInUp" data-wow-delay="0.5s">
                        <form id="newslettersForm" action="#" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"  id="mail" placeholder="Your Email..." required>
                                <button type="submit" class="subscribe-btn">{{ content('home', 'subscribe_newsletter', 'button_text', 'subscribe') }}</button>
                            </div>
                        </form>
                    </div>
                    <!-- Subscribe Newsletter Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Newsletter Section End -->

