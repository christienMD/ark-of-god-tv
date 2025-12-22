@extends('layout.main')

@section('content')

<main>
@include('sections.page-header', [
    'title' => '<span>Give</span>',
    'breadcrumb' => 'give',
    'backgroundImage' => 'support.jpeg'
])

    <!-- Page Ministry Single Start -->
    <div class="page-ministry-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Ministry Single Content Start -->
                    <div class="ministry-single-content">
                        <!-- Ministry Single Slider Start -->
                        <div class="ministry-single-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Ministry Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="ministry-slider-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('assets/images/support.jpeg') }}" alt="Support the Ministry">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Ministry Image Slide End -->

                                    <!-- Ministry Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="ministry-slider-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('assets/images/worship.jpeg') }}" alt="Worship">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Ministry Image Slide End -->

                                    <!-- Ministry Image Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="ministry-slider-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('assets/images/alter1.jpeg') }}" alt="Altar">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Ministry Image Slide End -->
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <!-- Ministry Single Slider End -->

                        <!-- Ministry Entry Content Start -->
                        <div class="ministry-entry">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Partner With Us in Kingdom Work</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Your generous giving enables us to spread the Gospel, support missions, and transform lives around the world. Every seed sown into this ministry goes directly toward reaching the lost, healing the broken, and equipping believers for the work of the Kingdom. Together, we can make an eternal impact.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Through your financial partnership, we are able to broadcast life-changing messages, support church planting initiatives, and provide resources for discipleship programs across nations.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Whether it's a one-time gift or a recurring contribution, your giving is an act of worship that honors God and advances His Kingdom. Join us in this divine assignment and experience the joy of being a blessing to others.</p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Ways to Give</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">We have made it easy and secure for you to give towards the ministry. Choose the method that works best for you.</p>
                            <ul class="wow fadeInUp" data-wow-delay="1s">
                                <li>Tithes & Offerings</li>
                                <li>Missions Support</li>
                                <li>Building Fund</li>
                                <li>Outreach Programs</li>
                                <li>Media Ministry</li>
                                <li>Special Projects</li>
                                <li>Benevolence Fund</li>
                                <li>Monthly Partnership</li>
                            </ul>

                            <!-- Ministry Entry Image Start -->
                            <div class="ministry-entry-image">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <!-- Ministry Entry Image Start -->
                                        <div class="ministry-entry-img-1">
                                            <figure class="image-anime reveal">
                                                <img src="{{ asset('assets/images/touching1.jpeg') }}" alt="Ministry Impact">
                                            </figure>
                                        </div>
                                        <!-- Ministry Entry Image End -->
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <!-- Ministry Entry Image Start -->
                                        <div class="ministry-entry-img-2">
                                            <figure class="image-anime reveal">
                                                <img src="{{ asset('assets/images/touching2.jpg') }}" alt="Ministry Outreach">
                                            </figure>
                                        </div>
                                        <!-- Ministry Entry Image End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Ministry Entry Image End -->
                        </div>
                        <!-- Ministry Entry Content End -->

                        <!-- Ministry Single Faqs Start -->
                        <div class="ministry-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently Asked Questions</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Core Value FAQ Accordion Start -->
                            <div class="core-value-faqs-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Is my donation secure?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, all donations are processed through secure, encrypted payment systems to ensure your financial information is protected.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How is my giving used?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Your giving supports ministry operations, global missions, outreach programs, media broadcasting, and community development initiatives.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can I set up recurring donations?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, you can set up monthly, quarterly, or annual recurring donations to support the ministry consistently.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Will I receive a giving statement?
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, you will receive confirmation emails for each donation and can request annual giving statements for your records.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            Can I give from outside Cameroon?
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Absolutely! We accept international donations through various payment methods including bank transfers and online payment platforms.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- Core Value FAQ Accordion End -->
                        </div>
                        <!-- Ministry Single Faqs End -->
                    </div>
                    <!-- Ministry Single Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Ministry Single Sidebar Start -->
                    <div class="ministry-single-sidebar wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Ministry Single Box Start -->
                        <div class="ministry-single-box">
                            <!-- Ministry Single Info Start -->
                            <div class="ministry-single-info">
                                <div class="icon-box">
                                    <i class="fa-solid fa-credit-card"></i>
                                </div>
                                <div class="ministry-single-info-content">
                                    <h3>Bank Transfer</h3>
                                </div>
                            </div>
                            <!-- Ministry Single Info End -->

                            <!-- Ministry Single Info List Start -->
                            <div class="ministry-single-info-list">
                                <ul>
                                    <li>Bank: [Bank Name]</li>
                                    <li>Account Name: AGCOM Ministry</li>
                                    <li>Account Number: [Account Number]</li>
                                </ul>
                            </div>
                            <!-- Ministry Single Info List End -->
                        </div>
                        <!-- Ministry Single Box End -->
                         
                        <!-- Ministry Single Box Start -->
                        <div class="ministry-single-box">
                            <!-- Ministry Single Info Start -->
                            <div class="ministry-single-info">
                                <div class="icon-box">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </div>
                                <div class="ministry-single-info-content">
                                    <h3>Mobile Money</h3>
                                </div>
                            </div>
                            <!-- Ministry Single Info End -->

                            <!-- Ministry Single Info List Start -->
                            <div class="ministry-single-info-list">
                                <ul>
                                    <li>MTN MoMo: [Number]</li>
                                    <li>Orange Money: [Number]</li>
                                    <li>Name: AGCOM Ministry</li>
                                </ul>
                            </div>
                            <!-- Ministry Single Info List End -->
                        </div>
                        <!-- Ministry Single Box End -->

                        <!-- Ministry Single Box Start -->
                        <div class="ministry-single-box">
                            <!-- Ministry Single Info Start -->
                            <div class="ministry-single-info">
                                <div class="icon-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="ministry-single-info-content">
                                    <h3>In-Person Giving</h3>
                                </div>
                            </div>
                            <!-- Ministry Single Info End -->

                            <!-- Ministry Single Info List Start -->
                            <div class="ministry-single-info-list">
                                <ul>
                                    <li>AGCOM Cathedral, Bokwango, Buea, Cameroon</li>
                                </ul>
                            </div>
                            <!-- Ministry Single Info List End -->
                        </div>
                        <!-- Ministry Single Box End -->
                    </div>
                    <!-- Ministry Single Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->

</main>

@endsection



