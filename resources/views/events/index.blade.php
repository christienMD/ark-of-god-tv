@extends('layout.main')

@section('content')

<main>
@include('sections.page-header', [
    'title' => content('events', 'page_header', 'title', 'Events'),
    'breadcrumb' => 'events',
    'backgroundImage' => 'hero2.jpg'
])

        <!-- Page Event Single Start -->
        <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Event Single Content Start -->
                    <div class="service-single-content">
                        <!-- Event Single Slider Start -->
                        <div class="service-single-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Event Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="service-slider-image">
                                            <figure>
                                                <img src="{{ content_image('events', 'featured_event', 'slider_image_1', 'service-single-img.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Event Image Slide End -->

                                    <!-- Event Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="service-slider-image">
                                            <figure>
                                                <img src="{{ content_image('events', 'featured_event', 'slider_image_2', 'service-single-img.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Event Image Slide End -->

                                    <!-- Event Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="service-slider-image">
                                            <figure>
                                                <img src="{{ content_image('events', 'featured_event', 'slider_image_3', 'service-single-img.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Event Image Slide End -->
                                </div>
                                <div class="service-single-btn">
                                    <div class="service-single-button-prev"></div>
                                    <div class="service-single-button-next"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Single Slider End -->

                        <!-- Event Entry Content Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('events', 'featured_event', 'title', 'Faith and Fellowship Festival') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ content('events', 'featured_event', 'description_1', 'Join us for a powerful gathering of believers from around the world. Experience divine encounters, powerful worship, and life-changing teachings that will transform your walk with God.') }}</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">{{ content('events', 'featured_event', 'description_2', 'This event is designed to strengthen your faith, connect you with like-minded believers, and equip you for kingdom service.') }}</p>
                            <ul class="wow fadeInUp" data-wow-delay="0.6s">
                                <li>{{ content('events', 'featured_event', 'highlight_1', 'Powerful worship and praise sessions') }}</li>
                                <li>{{ content('events', 'featured_event', 'highlight_2', 'Anointed teachings and revelations') }}</li>
                                <li>{{ content('events', 'featured_event', 'highlight_3', 'Healing and deliverance services') }}</li>
                                <li>{{ content('events', 'featured_event', 'highlight_4', 'Fellowship and networking opportunities') }}</li>
                            </ul>
                        </div>
                        <!-- Event Entry Content End -->

                        <!-- Event FAQs Start -->
                        <div class="service-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('events', 'event_faqs', 'section_title', 'Event Information') }}</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Event FAQ Accordion Start -->
                            <div class="core-value-faqs-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ content('events', 'event_faqs', 'faq_1_question', 'What time does the event start?') }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>{{ content('events', 'event_faqs', 'faq_1_answer', 'The event starts at 8:00 AM and runs until 5:00 PM. We encourage early arrival to secure your seat.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            {{ content('events', 'event_faqs', 'faq_2_question', 'Is registration required?') }}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>{{ content('events', 'event_faqs', 'faq_2_answer', 'Yes, registration is recommended to help us prepare adequately. However, walk-ins are also welcome.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            {{ content('events', 'event_faqs', 'faq_3_question', 'Where is the event located?') }}
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>{{ content('events', 'event_faqs', 'faq_3_answer', 'The event will be held at AGCOM Cathedral, Bokwango, Buea, Cameroon. Directions will be provided upon registration.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            {{ content('events', 'event_faqs', 'faq_4_question', 'Is there parking available?') }}
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>{{ content('events', 'event_faqs', 'faq_4_answer', 'Yes, free parking is available on-site for all attendees.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            {{ content('events', 'event_faqs', 'faq_5_question', 'Can I bring my children?') }}
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>{{ content('events', 'event_faqs', 'faq_5_answer', 'Absolutely! Children are welcome. We have a dedicated children\'s ministry that runs during the main sessions.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- Event FAQ Accordion End -->
                        </div>
                        <!-- Event FAQs End -->
                    </div>
                    <!-- Event Single Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Event Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Event Types List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>{{ content('events', 'sidebar', 'categories_title', 'Event Types') }}</h3>
                            <ul>
                                <li><a href="#">{{ content('events', 'sidebar', 'category_1', 'Conferences') }}</a></li>
                                <li><a href="#">{{ content('events', 'sidebar', 'category_2', 'Crusades') }}</a></li>
                                <li><a href="#">{{ content('events', 'sidebar', 'category_3', 'Retreats') }}</a></li>
                                <li><a href="#">{{ content('events', 'sidebar', 'category_4', 'Prayer Meetings') }}</a></li>
                                <li><a href="#">{{ content('events', 'sidebar', 'category_5', 'Special Services') }}</a></li>
                            </ul>
                        </div>
                        <!-- Event Types List End -->

                        <!-- Sidebar Cta Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Cta Contact Item Start -->
                            <div class="cta-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-sidebar-cta.svg') }}" alt="">
                                </div>
                                <div class="cta-contact-content">
                                    <h2>{{ content('events', 'sidebar', 'cta_title', 'Join Us') }}</h2>
                                    <p>{{ content('events', 'sidebar', 'cta_description', 'Register for our upcoming events and be part of something special. Don\'t miss out on life-changing encounters.') }}</p>
                                </div>
                                <div class="cta-contact-btn">
                                    <a href="{{ route('contact') }}" class="btn-default btn-highlighted">{{ content('events', 'sidebar', 'cta_button_text', 'register now') }}</a>
                                </div>
                            </div>
                            <!-- Cta Contact Item End -->
                        </div>
                        <!-- Sidebar Cta End -->
                    </div>
                    <!-- Event Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Event Single End -->
</main>

@endsection
