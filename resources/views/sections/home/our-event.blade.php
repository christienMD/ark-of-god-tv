    <!-- Our Event Section Start -->
    <div class="our-event">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="event-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/upcoming.jpeg') }}" alt="">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ content('home', 'our_event', 'subtitle', 'up coming event') }}</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('home', 'our_event', 'title', 'Faith and Fellowship Festival') }}</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Event Body Start -->
                        <div class="event-body">
                            <!-- Event Item Start -->
                            <div class="event-item wow fadeInUp">
                                <div class="icon-box">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="event-item-content">
                                    <p>{{ content('home', 'our_event', 'date_time', 'Aug 03, 2024 - 8:00 am - 5:00 pm') }}</p>
                                </div>
                            </div>
                            <!-- Event Item End -->

                            <!-- Event Item Start -->
                            <div class="event-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="event-item-content">
                                    <p>{{ content('home', 'our_event', 'location', 'AGCOM Cathedral, Bokwango, Buea, Cameroon') }}</p>
                                </div>
                            </div>
                            <!-- Event Item End -->
                        </div>
                        <!-- Event Body End -->

                        <!-- Event Footer Start -->
                        <div class="event-footer">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">{{ content('home', 'our_event', 'description', 'The Faith and Fellowship Festival is a vibrant celebration featuring worship, community activities, and fellowship. Enjoy inspiring sermons, engaging workshops, and fun for all ages, fostering spiritual growth and connection.') }}</p>
                        </div>
                        <!-- Event Footer End -->

                        <!-- Event Btn Start -->
                        <div class="event-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('events') }}" class="btn-default">{{ content('home', 'our_event', 'button_text', 'join in person') }}</a>
                        </div>
                        <!-- Event Btn End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Event Section End -->

