@extends('layout.main')

@section('content')

<main>
@include('sections.page-header', [
    'title' => '<span>John Chi</span> Foundation',
    'breadcrumb' => 'john chi foundation',
    'backgroundImage' => 'empower1.jpeg'
])

      <!-- Page Service Single Start -->
      <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Service Single Slider Start -->
                        <div class="service-single-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Service Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="service-slider-image">
                                            <figure>
                                                <img src="{{ asset('assets/images/empower1.jpeg') }}" alt="Empowering Communities">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Service Image Slide End -->

                                    <!-- Service Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="service-slider-image">
                                            <figure>
                                                <img src="{{ asset('assets/images/empower2.jpeg') }}" alt="Community Outreach">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Service Image Slide End -->

                                    <!-- Service Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="service-slider-image">
                                            <figure>
                                                <img src="{{ asset('assets/images/touching1.jpeg') }}" alt="Touching Lives">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Service Image Slide End -->
                                </div>
                                <div class="service-single-btn">
                                    <div class="service-single-button-prev"></div>
                                    <div class="service-single-button-next"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Single Slider End -->

                        <!-- Service Entry Content Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Transforming Lives Through Compassion</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">The John Chi Foundation is the humanitarian arm of AGCOM Ministry, dedicated to transforming lives through education, healthcare, community development, and sustainable empowerment programs across Cameroon and beyond.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Founded on the principles of love, compassion, and service to humanity, the Foundation works tirelessly to uplift the underprivileged, support orphans and widows, and create lasting positive change in communities.</p>
                            <ul class="wow fadeInUp" data-wow-delay="0.6s">
                                <li>Educational scholarships for underprivileged children</li>
                                <li>Healthcare outreach and medical missions</li>
                                <li>Orphanage support and child welfare programs</li>
                                <li>Widow empowerment and skill acquisition</li>
                            </ul>
                        </div>
                        <!-- Service Entry Content End -->

                        <!-- Service Single Faqs Start -->
                        <div class="service-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Our Impact Areas</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Core Value FAQ Accordion Start -->
                            <div class="core-value-faqs-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Education & Scholarships
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We provide educational scholarships, school supplies, and learning resources to underprivileged children, ensuring they have access to quality education and a brighter future.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Healthcare Outreach
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Through medical missions and healthcare initiatives, we bring essential medical services to underserved communities, including free health screenings, medications, and health education.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Orphan Care & Child Welfare
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We support orphanages and vulnerable children with food, clothing, shelter, and emotional support, creating a nurturing environment for their growth and development.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Widow Empowerment
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Our widow empowerment programs provide skill acquisition training, micro-business support, and financial literacy education to help widows achieve economic independence.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            Community Development
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We invest in sustainable community development projects including clean water initiatives, agricultural support, and infrastructure improvements to create lasting positive change.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- Core Value FAQ Accordion End -->
                        </div>
                        <!-- Service Single Faqs End -->
                    </div>
                    <!-- Service Single Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Service Categories List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>Our Programs</h3>
                            <ul>
                                <li><a href="#">Education Support</a></li>
                                <li><a href="#">Medical Outreach</a></li>
                                <li><a href="#">Orphan Care</a></li>
                                <li><a href="#">Widow Empowerment</a></li>
                                <li><a href="#">Community Projects</a></li>
                            </ul>
                        </div>
                        <!-- Service Categories List End -->

                        <!-- Sidebar Cta Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Cta Contact Item Start -->
                            <div class="cta-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-sidebar-cta.svg') }}" alt="">
                                </div>
                                <div class="cta-contact-content">
                                    <h2>Partner With Us</h2>
                                    <p>Join us in making a difference. Your support can transform lives and communities across Cameroon and beyond.</p>
                                </div>
                                <div class="cta-contact-btn">
                                    <a href="{{ route('give') }}" class="btn-default btn-highlighted">donate now</a>
                                </div>
                            </div>
                            <!-- Cta Contact Item End -->
                        </div>
                        <!-- Sidebar Cta End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->

</main>

@endsection



