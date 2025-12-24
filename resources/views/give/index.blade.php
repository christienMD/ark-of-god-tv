@extends('layout.main')

@section('content')

<main>
@include('sections.page-header', [
    'title' => content('partnership', 'page_header', 'title', 'Partnership'),
    'breadcrumb' => 'partnership',
    'backgroundImage' => 'support.jpeg'
])

    <!-- Why Partner Section Start -->
    <div class="why-partner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Why Partner Content Start -->
                    <div class="why-partner-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ content('partnership', 'why_partner', 'subtitle', 'covenant relationship') }}</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">{!! content('partnership', 'why_partner', 'title', 'Why Become a <span>Partner?</span>') !!}</h2>
                        </div>
                        <div class="why-partner-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{ content('partnership', 'why_partner', 'description', 'Partnership is not just about money; it is about a covenant relationship. When you partner with Ark Of God Covenant Ministry, you share in the grace upon this commission. Your seed helps us feed the hungry, clothe the naked, and broadcast the Gospel to millions around the world.') }}</p>
                        </div>
                    </div>
                    <!-- Why Partner Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Why Partner Image Start -->
                    <div class="why-partner-image wow fadeInUp" data-wow-delay="0.5s">
                        <figure class="image-anime reveal">
                            <img src="{{ content_image('partnership', 'why_partner', 'main_image', 'apostle-john-chi-feeding-a-mother.webp') }}" alt="Partnership Impact">
                        </figure>
                    </div>
                    <!-- Why Partner Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Partner Section End -->

    <!-- Impact Areas Section Start -->
    <div class="impact-areas-section">
        <div class="container">
            <div class="row">
                <!-- Impact Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="impact-card wow fadeInUp">
                        <div class="impact-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="impact-content">
                            <h3>{{ content('partnership', 'impact_areas', 'area_1_title', 'Global Reach') }}</h3>
                            <p>{{ content('partnership', 'impact_areas', 'area_1_description', 'Taking the TV broadcast to new nations.') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Impact Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="impact-card wow fadeInUp" data-wow-delay="0.25s">
                        <div class="impact-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="impact-content">
                            <h3>{{ content('partnership', 'impact_areas', 'area_2_title', 'Charity') }}</h3>
                            <p>{{ content('partnership', 'impact_areas', 'area_2_description', 'Supporting widows and orphans.') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Impact Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="impact-card wow fadeInUp" data-wow-delay="0.5s">
                        <div class="impact-icon">
                            <i class="fa-solid fa-church"></i>
                        </div>
                        <div class="impact-content">
                            <h3>{{ content('partnership', 'impact_areas', 'area_3_title', 'Expansion') }}</h3>
                            <p>{{ content('partnership', 'impact_areas', 'area_3_description', 'Building the physical Ark for worship.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Impact Areas Section End -->

    <!-- Your Seed in Action Section Start -->
    <div class="seed-action-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">{{ content('partnership', 'seed_action', 'subtitle', 'your seed in action') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">{!! content('partnership', 'seed_action', 'title', 'See Your <span>Impact</span>') !!}</h2>
                    </div>
                </div>
            </div>

            <div class="row seed-gallery">
                <!-- Gallery Item 1 -->
                <div class="col-lg-6 col-md-6">
                    <div class="seed-gallery-item wow fadeInUp">
                        <figure class="image-anime">
                            <img src="{{ content_image('partnership', 'seed_action', 'gallery_image_1', 'sharing-rice.webp') }}" alt="Feeding the hungry">
                        </figure>
                        <div class="seed-gallery-caption">
                            <h4>{{ content('partnership', 'seed_action', 'gallery_caption_1', 'Feeding the Hungry') }}</h4>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 2 -->
                <div class="col-lg-6 col-md-6">
                    <div class="seed-gallery-item wow fadeInUp" data-wow-delay="0.25s">
                        <figure class="image-anime">
                            <img src="{{ content_image('partnership', 'seed_action', 'gallery_image_2', 'charity-image-1.webp') }}" alt="Financial Support">
                        </figure>
                        <div class="seed-gallery-caption">
                            <h4>{{ content('partnership', 'seed_action', 'gallery_caption_2', 'Financial Support') }}</h4>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 3 -->
                <div class="col-lg-6 col-md-6">
                    <div class="seed-gallery-item wow fadeInUp" data-wow-delay="0.5s">
                        <figure class="image-anime">
                            <img src="{{ content_image('partnership', 'seed_action', 'gallery_image_3', 'charity-image-2.webp') }}" alt="Caring for the Elderly">
                        </figure>
                        <div class="seed-gallery-caption">
                            <h4>{{ content('partnership', 'seed_action', 'gallery_caption_3', 'Caring for the Elderly') }}</h4>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 4 -->
                <div class="col-lg-6 col-md-6">
                    <div class="seed-gallery-item wow fadeInUp" data-wow-delay="0.75s">
                        <figure class="image-anime">
                            <img src="{{ content_image('partnership', 'seed_action', 'gallery_image_4', 'apostle-john-chi-feeding-a-mother.webp') }}" alt="Personal Ministry">
                        </figure>
                        <div class="seed-gallery-caption">
                            <h4>{{ content('partnership', 'seed_action', 'gallery_caption_4', 'Personal Ministry') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Your Seed in Action Section End -->

    <!-- Giving Channels Section Start -->
    <div class="giving-channels-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="giving-icon wow fadeInUp">
                            <i class="fa-solid fa-gift"></i>
                        </div>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('partnership', 'giving_channels', 'title', 'Giving Channels') }}</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">{{ content('partnership', 'giving_channels', 'description', 'Choose your preferred method of support') }}</p>
                    </div>
                </div>
            </div>

            <!-- Bank Transfers Section -->
            <div class="giving-method-box wow fadeInUp" data-wow-delay="0.25s">
                <div class="giving-method-header">
                    <div class="method-icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <div class="method-title">
                        <h3>{{ content('partnership', 'bank_transfers', 'title', 'Bank Transfers') }}</h3>
                        <span>{{ content('partnership', 'bank_transfers', 'subtitle', 'International & Local') }}</span>
                    </div>
                    <div class="method-badge">RECOMMENDED</div>
                </div>

                <div class="giving-method-body">
                    <div class="row">
                        <!-- UK International -->
                        <div class="col-lg-6">
                            <div class="bank-card">
                                <h4 class="bank-name">{{ content('partnership', 'bank_transfers', 'uk_title', 'United Kingdom-UK 🇬🇧 International') }}</h4>
                                <p class="bank-note">{{ content('partnership', 'bank_transfers', 'uk_note', 'For USD, EUR, GBP, and CFA Deposits') }}</p>
                                <div class="bank-details">
                                    <div class="detail-row">
                                        <span class="label">Account Name</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'uk_account_name', 'John Meh') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">IBAN</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'uk_iban', 'GB47HLFX11003314175164') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">BIC/SWIFT</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'uk_swift', 'HLFXGB21B24') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">Account Number</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'uk_account_number', '14-175-164') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">Sort Code</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'uk_sort_code', '11-00-33') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ecobank Cameroon & Nigeria -->
                        <div class="col-lg-6">
                            <div class="bank-card">
                                <h4 class="bank-name">{{ content('partnership', 'bank_transfers', 'ecobank_cm_title', 'Ecobank - Cameroon') }}</h4>
                                <div class="bank-details">
                                    <div class="detail-row">
                                        <span class="label">Account Name</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'ecobank_cm_name', 'Ark of God\'s Covenant Ministry Inc') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">Account Number</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'ecobank_cm_number', '315-450-058-05') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bank-card" style="margin-top: 20px;">
                                <h4 class="bank-name">{{ content('partnership', 'bank_transfers', 'ecobank_ng_title', 'Ecobank - Nigeria') }}</h4>
                                <div class="bank-details">
                                    <div class="detail-row">
                                        <span class="label">Account Name</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'ecobank_ng_name', 'ARK OF GOD COVENANT WORLDWIDE CHRISTIAN MISSION (JOHN CHI)') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">Account Number</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'ecobank_ng_number', '012-001-097-5') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BICEC Bank -->
                        <div class="col-lg-6">
                            <div class="bank-card">
                                <h4 class="bank-name">{{ content('partnership', 'bank_transfers', 'bicec_title', 'BICEC BANK DETAILS-Cameroon') }}</h4>
                                <div class="bank-details">
                                    <div class="detail-row">
                                        <span class="label">Account Name</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'bicec_name', 'Ark of God\'s Covenant Ministry Inc') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">Account Number</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'bicec_number', '574-638-000-01') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">Swift Code</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'bicec_swift', 'ICLRCMCXXX') }}</span>
                                    </div>
                                </div>
                                <h5 class="bank-subsection">For International Use</h5>
                                <div class="bank-details">
                                    <div class="detail-row">
                                        <span class="label">IBAN Code</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'bicec_iban', 'CM2110001068005746380000140') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="label">Swift Code</span>
                                        <span class="value">{{ content('partnership', 'bank_transfers', 'bicec_swift', 'ICLRCMCXXX') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Money Section -->
            <div class="giving-method-box wow fadeInUp" data-wow-delay="0.5s">
                <div class="giving-method-header">
                    <div class="method-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="method-title">
                        <h3>{{ content('partnership', 'mobile_money', 'title', 'Mobile Money') }}</h3>
                        <span>{{ content('partnership', 'mobile_money', 'subtitle', 'Cameroon Only') }}</span>
                    </div>
                </div>

                <div class="giving-method-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="momo-card mtn">
                                <h4>{{ content('partnership', 'mobile_money', 'mtn_title', 'MTN MOBILE MONEY') }}</h4>
                                <p class="momo-number">{{ content('partnership', 'mobile_money', 'mtn_number', '(+237) 671-715-031') }}</p>
                                <p class="momo-name">Name: {{ content('partnership', 'mobile_money', 'mtn_name', 'Meh John Chi') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="momo-card orange">
                                <h4>{{ content('partnership', 'mobile_money', 'orange_title', 'ORANGE MONEY') }}</h4>
                                <p class="momo-number">{{ content('partnership', 'mobile_money', 'orange_number', '(+237) 657-199-032') }}</p>
                                <p class="momo-name">Name: {{ content('partnership', 'mobile_money', 'orange_name', 'John Chi') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Giving Channels Section End -->

    <!-- FAQ Section Start -->
    <div class="partnership-faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">{{ content('partnership', 'faqs', 'subtitle', 'questions') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">{{ content('partnership', 'faqs', 'title', 'Frequently Asked Questions') }}</h2>
                    </div>

                    <div class="core-value-faqs-accordion" id="accordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{ content('partnership', 'faqs', 'faq_1_question', 'What does it mean to be a partner?') }}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>{{ content('partnership', 'faqs', 'faq_1_answer', 'Being a partner means entering into a covenant relationship with this ministry. You share in the grace, anointing, and rewards of every soul won and every life transformed through your seed.') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {{ content('partnership', 'faqs', 'faq_2_question', 'How is my giving used?') }}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>{{ content('partnership', 'faqs', 'faq_2_answer', 'Your giving supports TV broadcasting to nations, feeding programs for the hungry, support for widows and orphans, and building projects for worship centers.') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    {{ content('partnership', 'faqs', 'faq_3_question', 'Can I give from outside Cameroon?') }}
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>{{ content('partnership', 'faqs', 'faq_3_answer', 'Yes! We have international bank accounts in the UK and accept transfers in USD, EUR, GBP, and CFA. See our banking details above.') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    {{ content('partnership', 'faqs', 'faq_4_question', 'Is my donation secure?') }}
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>{{ content('partnership', 'faqs', 'faq_4_answer', 'Absolutely. All bank transfers go directly to official ministry accounts. You will receive confirmation for every donation made.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->

</main>

<style>
/* Why Partner Section */
.why-partner-section {
    padding: 100px 0;
}

.why-partner-content .section-title h2 {
    margin-bottom: 20px;
}

.why-partner-body p {
    font-size: 18px;
    line-height: 1.8;
    color: var(--text-color);
}

.why-partner-image {
    border-radius: 15px;
    overflow: hidden;
}

.why-partner-image img {
    width: 100%;
    height: 450px;
    object-fit: cover;
    border-radius: 15px;
}

/* Impact Areas Section */
.impact-areas-section {
    padding: 80px 0;
    background: var(--secondary-color);
}

.impact-card {
    background: #2d2d2d;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    padding: 40px 30px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    margin-bottom: 30px;
}

.impact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.impact-icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(135deg, #b08888, #c49a9a);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    box-shadow: 0 8px 25px rgba(176, 136, 136, 0.4);
}

.impact-icon i {
    font-size: 36px;
    color: #ffffff !important;
}

.impact-content h3 {
    font-size: 24px;
    color: #ffffff !important;
    margin-bottom: 15px;
    font-weight: 600;
    text-transform: capitalize;
}

.impact-content p {
    color: rgba(255, 255, 255, 0.85);
    margin: 0;
    font-size: 15px;
    line-height: 1.6;
}

/* Seed Action Section */
.seed-action-section {
    padding: 100px 0;
}

.seed-gallery {
    margin-top: 20px;
}

.seed-gallery-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 30px;
}

.seed-gallery-item img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.seed-gallery-item:hover img {
    transform: scale(1.05);
}

.seed-gallery-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
}

.seed-gallery-caption h4 {
    color: #fff;
    font-size: 18px;
    margin: 0;
    font-weight: 500;
}

/* Giving Channels Section */
.giving-channels-section {
    padding: 60px 0;
    background: #ffffff;
}

.giving-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #b08888, #c49a9a);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    box-shadow: 0 8px 25px rgba(176, 136, 136, 0.3);
}

.giving-icon i {
    font-size: 36px;
    color: #fff;
}

.giving-method-box {
    background: #f8f5f0;
    border: 1px solid #e0d6c8;
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 30px;
}

.giving-method-header {
    display: flex;
    align-items: center;
    padding: 25px 30px;
    background: #efe8dc;
    gap: 20px;
    flex-wrap: wrap;
}

.method-icon {
    width: 50px;
    height: 50px;
    background: #b08888;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.method-icon i {
    font-size: 24px;
    color: #fff;
}

.method-title h3 {
    font-size: 22px;
    color: #333;
    margin: 0;
    font-weight: 600;
}

.method-title span {
    font-size: 14px;
    color: #666;
}

.method-badge {
    margin-left: auto;
    background: linear-gradient(135deg, #b08888, #c49a9a);
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.5px;
}

.giving-method-body {
    padding: 30px;
    background: #fdfcfa;
}

.bank-card {
    background: #f8f5f0;
    border: 1px solid #e0d6c8;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
}

.bank-name {
    color: #9f7a7a;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
}

.bank-note {
    color: #666;
    font-size: 14px;
    margin-bottom: 20px;
}

.bank-subsection {
    color: #9f7a7a;
    font-size: 16px;
    margin: 20px 0 15px;
    padding-top: 15px;
    border-top: 1px solid #e8dede;
}

.bank-details .detail-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #ebe5db;
}

.bank-details .detail-row:last-child {
    border-bottom: none;
}

.bank-details .label {
    color: #666;
    font-size: 14px;
}

.bank-details .value {
    color: #333;
    font-weight: 600;
    font-size: 14px;
    text-align: right;
}

/* Mobile Money Cards */
.momo-card {
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
}

.momo-card.mtn {
    background: linear-gradient(135deg, #fef3cd 0%, #fff8e1 100%);
    border: 2px solid #f0d060;
}

.momo-card.orange {
    background: linear-gradient(135deg, #ffe4d6 0%, #fff0e8 100%);
    border: 2px solid #f5a675;
}

.momo-card h4 {
    color: #333;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 10px;
}

.momo-number {
    color: #222;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 5px;
}

.momo-name {
    color: #555;
    font-size: 14px;
    margin: 0;
}

/* FAQ Section */
.partnership-faq-section {
    padding: 60px 0 80px;
}

/* Responsive */
@media (max-width: 991px) {
    .why-partner-section {
        padding: 60px 0;
    }
    
    .why-partner-image {
        margin-top: 40px;
    }
    
    .impact-areas-section,
    .seed-action-section,
    .giving-channels-section,
    .partnership-faq-section {
        padding: 60px 0;
    }
    
    .giving-method-header {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .method-badge {
        margin-left: 0;
    }
}

@media (max-width: 767px) {
    .bank-details .detail-row {
        flex-direction: column;
        gap: 5px;
    }
    
    .bank-details .value {
        text-align: left;
    }
    
    .seed-gallery-item img {
        height: 250px;
    }
}
</style>

@endsection
