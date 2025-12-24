<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Auto-generated from database on 2025-12-24 18:53:50
     * Command: php artisan page-content:export-seeder
     */
    public function run(): void
    {

        // About Page Sections
        PageContent::updateOrCreate(
            ['page_slug' => 'about', 'section_slug' => 'about_us'],
            [
                'section_title' => 'About Us Section',
                'content' => [
                    'subtitle' => 'about us',
                    'title' => 'Faith, hope, and love in <span>action every day</span>',
                    'description_1' => 'We are a vibrant community of believers dedicated to worship, fellowship, and service. Our mission is to share God\'s love, grow in faith, and make a positive impact in the world through compassionate outreach and meaningful connections.',
                    'description_2' => 'Our church is a welcoming place where everyone can find support, inspiration, and a sense of belonging. Together, we strive to live out our faith and make a difference.',
                    'image_1' => 'about-us-img-1.jpg',
                    'image_2' => 'about-us-img-2.jpg',
                    'feature_1' => 'share god\'s love',
                    'feature_2' => 'foster spiritual growth',
                    'feature_3' => 'serve our community',
                    'feature_4' => 'build strong relationships',
                ],
                'order' => 1,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'about', 'section_slug' => 'vision_mission'],
            [
                'section_title' => 'Vision & Mission Section',
                'content' => [
                    'main_subtitle' => 'vision mission',
                    'main_title' => 'Building Faithful Community Through Love, Service, <span>Worship, and Fellowship.</span>',
                    'vision_subtitle' => 'our vision',
                    'vision_title' => 'Our Vision to Serve, <span>Love, and Grow</span>',
                    'vision_headline' => 'Our vision is to share God\'s love, foster spiritual growth, and serve our community with compassion and purpose.',
                    'vision_description' => 'Our vision is to serve our community with compassion, love unconditionally, and foster spiritual growth. Through dedicated service, heartfelt worship, and supportive fellowship, we strive to create a nurturing environment where individuals can deepen their faith, connect with others, and make a positive impact. Join us as we live out our commitment to serve, love, and grow together.',
                    'vision_image' => 'our-vision-img.jpg',
                    'mission_subtitle' => 'our mission',
                    'mission_title' => 'Our Vision to Serve, <span>Love, and Grow</span>',
                    'mission_headline' => 'Our mission is to share God\'s love, foster spiritual growth, and serve our community with compassion and purpose.',
                    'mission_description' => 'Our vision is to serve our community with compassion, love unconditionally, and foster spiritual growth. Through dedicated service, heartfelt worship, and supportive fellowship, we strive to create a nurturing environment where individuals can deepen their faith, connect with others, and make a positive impact. Join us as we live out our commitment to serve, love, and grow together.',
                    'mission_image' => 'our-mission-img.jpg',
                    'approach_subtitle' => 'our approach',
                    'approach_title' => 'Our Vision to Serve, <span>Love, and Grow</span>',
                    'approach_headline' => 'Our approach is to share God\'s love, foster spiritual growth, and serve our community with compassion and purpose.',
                    'approach_description' => 'Our approach is to serve our community with compassion, love unconditionally, and foster spiritual growth. Through dedicated service, heartfelt worship, and supportive fellowship, we strive to create a nurturing environment where individuals can deepen their faith, connect with others, and make a positive impact. Join us as we live out our commitment to serve, love, and grow together.',
                    'approach_image' => 'our-approach-img.jpg',
                ],
                'order' => 2,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'about', 'section_slug' => 'about_counter'],
            [
                'section_title' => 'Counter Section',
                'content' => [
                    'counter_1_number' => '350',
                    'counter_1_title' => 'oldest member',
                    'counter_1_description' => 'Our oldest member is Mary Thompson, who is 95 years old and has been attending since 1945.',
                    'counter_2_number' => '98',
                    'counter_2_title' => 'youth retreats',
                    'counter_2_description' => 'Our oldest member is Mary Thompson, who is 95 years old and has been attending since 1945.',
                    'counter_3_number' => '148',
                    'counter_3_title' => 'tech workshops',
                    'counter_3_description' => 'Our oldest member is Mary Thompson, who is 95 years old and has been attending since 1945.',
                    'counter_4_number' => '58',
                    'counter_4_title' => 'christmas concert',
                    'counter_4_description' => 'Our oldest member is Mary Thompson, who is 95 years old and has been attending since 1945.',
                ],
                'order' => 3,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'about', 'section_slug' => 'what_we_do'],
            [
                'section_title' => 'What We Do Section',
                'content' => [
                    'subtitle' => 'what we do',
                    'title' => 'Living Our <span>Faith Together</span>',
                    'service_1_title' => 'worship services',
                    'service_1_description' => 'Experience spiritual growth and meaningful connection through heartfelt worship and fellowship. Everyone is welcome to join us',
                    'service_2_title' => 'community outreach',
                    'service_2_description' => 'Experience spiritual growth and meaningful connection through heartfelt worship and fellowship. Everyone is welcome to join us',
                    'service_3_title' => 'educational programs',
                    'service_3_description' => 'Experience spiritual growth and meaningful connection through heartfelt worship and fellowship. Everyone is welcome to join us',
                ],
                'order' => 4,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'about', 'section_slug' => 'our_team'],
            [
                'section_title' => 'Our Team Section',
                'content' => [
                    'subtitle' => 'our team',
                    'title' => 'Meet Our <span>Pastors</span>',
                    'member_1_name' => 'darlene robertson',
                    'member_1_role' => 'head of worship team',
                    'member_1_image' => 'team-1.jpg',
                    'member_1_facebook' => '#',
                    'member_1_linkedin' => '#',
                    'member_1_instagram' => '#',
                    'member_1_twitter' => '#',
                    'member_2_name' => 'sophia simmons',
                    'member_2_role' => 'pastor',
                    'member_2_image' => 'team-2.jpg',
                    'member_2_facebook' => '#',
                    'member_2_linkedin' => '#',
                    'member_2_instagram' => '#',
                    'member_2_twitter' => '#',
                    'member_3_name' => 'savannah nguyen',
                    'member_3_role' => 'head of worship team',
                    'member_3_image' => 'team-3.jpg',
                    'member_3_facebook' => '#',
                    'member_3_linkedin' => '#',
                    'member_3_instagram' => '#',
                    'member_3_twitter' => '#',
                    'member_4_name' => 'charlotte wilson',
                    'member_4_role' => 'head of worship team',
                    'member_4_image' => 'team-4.jpg',
                    'member_4_facebook' => '#',
                    'member_4_linkedin' => '#',
                    'member_4_instagram' => '#',
                    'member_4_twitter' => '#',
                ],
                'order' => 5,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'about', 'section_slug' => 'pastors_message'],
            [
                'section_title' => 'Pastors Message Section',
                'content' => [
                    'subtitle' => 'pastors message',
                    'title' => 'Your generosity makes a <span>profound impact</span>',
                    'headline' => 'Our mission is to share God\'s love, foster spiritual growth, and serve our community with compassion and purpose.',
                    'description' => 'We would love to get to know you better. Feel free to reach out to us through our Contact Us page, or join us for one of our upcoming services or events. Our doors are always open, and we look forward to welcoming you into our church family.',
                    'pastor_image' => 'pastors-image.jpg',
                    'signature_image' => 'pastors-signature.svg',
                    'signature_title' => 'senior pastor',
                ],
                'order' => 6,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'about', 'section_slug' => 'core_values'],
            [
                'section_title' => 'Core Values Section',
                'content' => [
                    'subtitle' => 'our core value',
                    'title' => 'Foundations of Our Faith and <span>Community Life</span>',
                    'faq_1_question' => 'Why is faith a core value?',
                    'faq_1_answer' => 'We demonstrate love through compassionate service, supportive relationships, and inclusive community practices.',
                    'faq_2_question' => 'How does the church demonstrate love?',
                    'faq_2_answer' => 'We demonstrate love through compassionate service, supportive relationships, and inclusive community practices.',
                    'faq_3_question' => 'How is community fostered within the church?',
                    'faq_3_answer' => 'We demonstrate love through compassionate service, supportive relationships, and inclusive community practices.',
                    'faq_4_question' => 'What is the importance of spiritual growth?',
                    'faq_4_answer' => 'We demonstrate love through compassionate service, supportive relationships, and inclusive community practices.',
                    'faq_5_question' => 'How do these values shape church activities?',
                    'faq_5_answer' => 'We demonstrate love through compassionate service, supportive relationships, and inclusive community practices.',
                    'slider_images' => array (
),
                ],
                'order' => 7,
                'is_active' => true,
            ]
        );


        // Branches Page Sections
        PageContent::updateOrCreate(
            ['page_slug' => 'branches', 'section_slug' => 'page_header'],
            [
                'section_title' => 'Page Header',
                'content' => [
                    'title' => 'Our Global Branches',
                ],
                'order' => 1,
                'is_active' => true,
            ]
        );


        // Events Page Sections
        PageContent::updateOrCreate(
            ['page_slug' => 'events', 'section_slug' => 'page_header'],
            [
                'section_title' => 'Page Header',
                'content' => [
                    'title' => 'Upcoming Events',
                ],
                'order' => 1,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'events', 'section_slug' => 'featured_event'],
            [
                'section_title' => 'Featured Event',
                'content' => [
                    'title' => 'Faith and Fellowship Festival',
                    'description_1' => 'Join us for a powerful gathering of believers from around the world. Experience divine encounters, powerful worship, and life-changing teachings that will transform your walk with God.',
                    'description_2' => 'This event is designed to strengthen your faith, connect you with like-minded believers, and equip you for kingdom service.',
                    'highlight_1' => 'Powerful worship and praise sessions',
                    'highlight_2' => 'Anointed teachings and revelations',
                    'highlight_3' => 'Healing and deliverance services',
                    'highlight_4' => 'Fellowship and networking opportunities',
                    'slider_image_1' => 'service-single-img.jpg',
                    'slider_image_2' => 'service-single-img.jpg',
                    'slider_image_3' => 'service-single-img.jpg',
                ],
                'order' => 2,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'events', 'section_slug' => 'event_faqs'],
            [
                'section_title' => 'Event FAQs',
                'content' => [
                    'section_title' => 'Event Information',
                    'faq_1_question' => 'What time does the event start?',
                    'faq_1_answer' => 'The event starts at 8:00 AM and runs until 5:00 PM. We encourage early arrival to secure your seat.',
                    'faq_2_question' => 'Is registration required?',
                    'faq_2_answer' => 'Yes, registration is recommended to help us prepare adequately. However, walk-ins are also welcome.',
                    'faq_3_question' => 'Where is the event located?',
                    'faq_3_answer' => 'The event will be held at AGCOM Cathedral, Bokwango, Buea, Cameroon. Directions will be provided upon registration.',
                    'faq_4_question' => 'Is there parking available?',
                    'faq_4_answer' => 'Yes, free parking is available on-site for all attendees.',
                    'faq_5_question' => 'Can I bring my children?',
                    'faq_5_answer' => 'Absolutely! Children are welcome. We have a dedicated children\'s ministry that runs during the main sessions.',
                ],
                'order' => 3,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'events', 'section_slug' => 'sidebar'],
            [
                'section_title' => 'Events Sidebar',
                'content' => [
                    'categories_title' => 'Event Types',
                    'category_1' => 'Conferences',
                    'category_2' => 'Crusades',
                    'category_3' => 'Retreats',
                    'category_4' => 'Prayer Meetings',
                    'category_5' => 'Special Services',
                    'cta_title' => 'Join Us',
                    'cta_description' => 'Register for our upcoming events and be part of something special. Don\'t miss out on life-changing encounters.',
                    'cta_button_text' => 'register now',
                ],
                'order' => 4,
                'is_active' => true,
            ]
        );


        // Home Page Sections
        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'hero'],
            [
                'section_title' => 'Hero Section',
                'content' => [
                    'subtitle' => 'Apostle John Chi',
                    'title' => 'Taking the light to every nation, every generation',
                    'description' => 'Experience powerful revelation, overwhelming grace, and divine encounters that transform lives across the globe through Apostle John Chi.',
                    'video_url' => 'https://video.wixstatic.com/video/18723e_b0e2a445873c425c9fa4c12aab1f89dd/720p/mp4/file.mp4',
                    'background_image' => 'hero1.jpg',
                    'button_1_text' => 'join in person',
                    'button_2_text' => 'donate now',
                ],
                'order' => 1,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'scrolling_ticker'],
            [
                'section_title' => 'Scrolling Ticker',
                'content' => [
                    'ticker_text_1' => 'Love Your Neighbor as yourself',
                    'ticker_text_2' => 'Love Your Neighbor as yourself TEST UPDATES',
                    'ticker_text_3' => 'Love Your Neighbor as yourself TEST UPDATES',
                    'ticker_text_4' => 'Love Your Neighbor as yourself TEST UPDATES',
                ],
                'order' => 2,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'about'],
            [
                'section_title' => 'About Section',
                'content' => [
                    'subtitle' => 'about us',
                    'title' => 'Touching lives across all nations and cultures',
                    'description_1' => 'Ark of God\'s Covenant Ministry (AGCOM) is a global ministry founded by Apostle John Chi, dedicated to teaching, preaching, healing, and deliverance.',
                    'description_2' => 'Our ministry creates a welcoming environment where people from diverse backgrounds can experience God\'s grace.',
                    'feature_1' => 'teaching & preaching',
                    'feature_2' => 'healing & deliverance',
                    'feature_3' => 'global impact',
                    'feature_4' => 'transformative love',
                ],
                'order' => 3,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'join_worship'],
            [
                'section_title' => 'Join Worship Section',
                'content' => [
                    'subtitle' => 'worship with us',
                    'title' => 'Join us at 8am GMT +1',
                    'featured_title' => 'corporate worship',
                    'featured_description' => 'Join believers from all nations in powerful worship and communion.',
                    'card_1_title' => 'healing & deliverance',
                    'card_1_description' => 'Experience God\'s healing power and freedom from bondage.',
                    'card_2_title' => 'intercessory prayer',
                    'card_2_description' => 'Deep intercession and breakthrough prayer encounters.',
                    'card_3_title' => 'praise & worship',
                    'card_3_description' => 'Fervent praise and heartfelt worship in spirit and truth.',
                ],
                'order' => 4,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'our_counter'],
            [
                'section_title' => 'Counter Section',
                'content' => [
                    'counter_1_number' => '350',
                    'counter_1_title' => 'oldest member',
                    'counter_1_description' => 'Our oldest member is Mary Thompson, who is 95 years old.',
                    'counter_2_number' => '98',
                    'counter_2_title' => 'youth retreats',
                    'counter_2_description' => 'Annual youth retreats bringing young people together.',
                    'counter_3_number' => '148',
                    'counter_3_title' => 'tech workshops',
                    'counter_3_description' => 'Technology workshops for community empowerment.',
                    'counter_4_number' => '58',
                    'counter_4_title' => 'christmas concert',
                    'counter_4_description' => 'Years of annual Christmas concerts and celebrations.',
                ],
                'order' => 5,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'our_mission'],
            [
                'section_title' => 'Our Mission Section',
                'content' => [
                    'subtitle' => 'our mission',
                    'title' => 'A Beacon of Hope and Restoration',
                    'headline' => 'To impact lives globally through the power of God\'s word and the manifestation of His love across all nations.',
                    'description' => 'AGCOM\'s vision is to be a beacon of hope and restoration, reaching people worldwide through television, radio, internet, and literature.',
                ],
                'order' => 6,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'our_services'],
            [
                'section_title' => 'Our Services Section',
                'content' => [
                    'subtitle' => 'our ministries',
                    'title' => 'Loving god, helping others and serving the world together',
                    'service_1_title' => 'worship & praise',
                    'service_1_description' => 'Join our powerful worship sessions filled with anointed praise and divine encounters.',
                    'service_2_title' => 'healing & miracles',
                    'service_2_description' => 'Experience divine healing, miraculous breakthroughs, and complete deliverance.',
                    'service_3_title' => 'teaching & revelation',
                    'service_3_description' => 'Engage in powerful prophetic teaching and deep biblical exposition.',
                    'service_4_title' => 'prayer & intercession',
                    'service_4_description' => 'Join intense intercessory prayer sessions and spiritual warfare.',
                ],
                'order' => 7,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'service_ticker'],
            [
                'section_title' => 'Service Ticker',
                'content' => [
                    'ticker_text_1' => 'Citizens of Heaven',
                    'ticker_text_2' => 'Walking in Divine Power',
                    'ticker_text_3' => 'Taking the Light',
                    'ticker_text_4' => 'Overwhelming Grace',
                    'ticker_text_5' => 'Kingdom Living',
                ],
                'order' => 8,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'our_ministries'],
            [
                'section_title' => 'Global Branches Section',
                'content' => [
                    'subtitle' => 'branches',
                    'title' => 'Our Global Branches',
                    'footer_text' => 'Explore the exciting new ways we are serving our community and growing together in faith.',
                ],
                'order' => 9,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'our_sermons'],
            [
                'section_title' => 'Our Sermons Section',
                'content' => [
                    'subtitle' => 'our sermons',
                    'title' => 'Our Latest Sermons',
                ],
                'order' => 10,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'verse_church'],
            [
                'section_title' => 'Verse Church Section',
                'content' => [
                    'subtitle' => 'our calling',
                    'title' => 'Empowering Believers to Walk in Kingdom Authority',
                    'description' => 'Through powerful revelation and divine encounters, AGCOM equips believers to discover their identity as citizens of heaven, operate in the supernatural anointing of God, and take the light of His word to their communities and beyond.',
                    'button_text' => 'donate now',
                ],
                'order' => 11,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'cta_box'],
            [
                'section_title' => 'CTA Box Section',
                'content' => [
                    'title' => 'Get Involved and Stay Connected: Support Our Mission and Join Our Community Today!',
                    'button_text' => 'join group',
                ],
                'order' => 12,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'our_event'],
            [
                'section_title' => 'Upcoming Event Section',
                'content' => [
                    'subtitle' => 'up coming event',
                    'title' => 'Faith and Fellowship Festival',
                    'date_time' => 'Aug 03, 2024 - 8:00 am - 5:00 pm',
                    'location' => 'AGCOM Cathedral, Bokwango, Buea, Cameroon',
                    'description' => 'The Faith and Fellowship Festival is a vibrant celebration featuring worship, community activities, and fellowship. Enjoy inspiring sermons, engaging workshops, and fun for all ages.',
                    'button_text' => 'join in person',
                ],
                'order' => 13,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'donate_now'],
            [
                'section_title' => 'Donate Now Section',
                'content' => [
                    'subtitle' => 'donate now',
                    'title' => 'Support Our Mission',
                    'description' => 'Your generous support enables to continue its mission of spreading God\'s love and serving our community.',
                    'video_url' => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
                    'button_text' => 'donate now',
                ],
                'order' => 14,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'our_blog'],
            [
                'section_title' => 'Our Blog Section',
                'content' => [
                    'subtitle' => 'latest post',
                    'title' => 'Read Our Latest Articles',
                ],
                'order' => 15,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'home', 'section_slug' => 'subscribe_newsletter'],
            [
                'section_title' => 'Newsletter Section',
                'content' => [
                    'subtitle' => 'subscribe newsletter',
                    'title' => 'Keep Up With Our Latest News',
                    'description' => 'Subscribe to our newsletter to stay informed about upcoming events, inspiring messages, and the latest news from our church community.',
                    'button_text' => 'subscribe',
                ],
                'order' => 16,
                'is_active' => true,
            ]
        );


        // Live Page Sections
        PageContent::updateOrCreate(
            ['page_slug' => 'live', 'section_slug' => 'live_hero'],
            [
                'section_title' => 'Live Hero Section',
                'content' => [
                    'subtitle' => 'Watch Live Now',
                    'title' => 'Experience Divine Encounters That Transform Lives',
                    'description' => 'Join Apostle John Chi for powerful teachings on revelation, anointing, and kingdom living. Watch live services and archived messages that bring breakthrough and transformation.',
                    'video_url' => 'https://video.wixstatic.com/video/18723e_b0e2a445873c425c9fa4c12aab1f89dd/720p/mp4/file.mp4',
                    'background_image' => 'hero2.jpg',
                    'button_1_text' => 'join in person',
                    'button_2_text' => 'donate now',
                ],
                'order' => 1,
                'is_active' => true,
            ]
        );


        // Partnership Page Sections
        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'page_header'],
            [
                'section_title' => 'Page Header',
                'content' => [
                    'title' => 'Partnership',
                ],
                'order' => 1,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'why_partner'],
            [
                'section_title' => 'Why Become a Partner',
                'content' => [
                    'subtitle' => 'covenant relationship',
                    'title' => 'Why Become a <span>Partner?</span>',
                    'description' => 'Partnership is not just about money; it is about a covenant relationship. When you partner with Ark Of God Covenant Ministry, you share in the grace upon this commission. Your seed helps us feed the hungry, clothe the naked, and broadcast the Gospel to millions around the world.',
                    'main_image' => 'apostle-john-chi-feeding-a-mother.webp',
                ],
                'order' => 2,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'impact_areas'],
            [
                'section_title' => 'Impact Areas',
                'content' => [
                    'area_1_title' => 'Global Reach',
                    'area_1_description' => 'Taking the TV broadcast to new nations.',
                    'area_2_title' => 'Charity',
                    'area_2_description' => 'Supporting widows and orphans.',
                    'area_3_title' => 'Expansion',
                    'area_3_description' => 'Building the physical Ark for worship.',
                ],
                'order' => 3,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'seed_action'],
            [
                'section_title' => 'Your Seed in Action',
                'content' => [
                    'subtitle' => 'your seed in action',
                    'title' => 'See Your <span>Impact</span>',
                    'gallery_image_1' => 'sharing-rice.webp',
                    'gallery_caption_1' => 'Feeding the Hungry',
                    'gallery_image_2' => 'charity-image-1.webp',
                    'gallery_caption_2' => 'Financial Support',
                    'gallery_image_3' => 'charity-image-2.webp',
                    'gallery_caption_3' => 'Caring for the Elderly',
                    'gallery_image_4' => 'apostle-john-chi-feeding-a-mother.webp',
                    'gallery_caption_4' => 'Personal Ministry',
                ],
                'order' => 4,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'giving_channels'],
            [
                'section_title' => 'Giving Channels Header',
                'content' => [
                    'title' => 'Giving Channels',
                    'description' => 'Choose your preferred method of support',
                ],
                'order' => 5,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'bank_transfers'],
            [
                'section_title' => 'Bank Transfers',
                'content' => [
                    'title' => 'Bank Transfers',
                    'subtitle' => 'International & Local',
                    'uk_title' => 'United Kingdom-UK 🇬🇧 International',
                    'uk_note' => 'For USD, EUR, GBP, and CFA Deposits',
                    'uk_account_name' => 'John Meh',
                    'uk_iban' => 'GB47HLFX11003314175164',
                    'uk_swift' => 'HLFXGB21B24',
                    'uk_account_number' => '14-175-164',
                    'uk_sort_code' => '11-00-33',
                    'ecobank_cm_title' => 'Ecobank - Cameroon',
                    'ecobank_cm_name' => 'Ark of God\'s Covenant Ministry Inc',
                    'ecobank_cm_number' => '315-450-058-05',
                    'ecobank_ng_title' => 'Ecobank - Nigeria',
                    'ecobank_ng_name' => 'ARK OF GOD COVENANT WORLDWIDE CHRISTIAN MISSION (JOHN CHI)',
                    'ecobank_ng_number' => '012-001-097-5',
                    'bicec_title' => 'BICEC BANK DETAILS-Cameroon',
                    'bicec_name' => 'Ark of God\'s Covenant Ministry Inc',
                    'bicec_number' => '574-638-000-01',
                    'bicec_swift' => 'ICLRCMCXXX',
                    'bicec_iban' => 'CM2110001068005746380000140',
                ],
                'order' => 6,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'mobile_money'],
            [
                'section_title' => 'Mobile Money',
                'content' => [
                    'title' => 'Mobile Money',
                    'subtitle' => 'Cameroon Only',
                    'mtn_title' => 'MTN MOBILE MONEY',
                    'mtn_number' => '(+237) 671-715-031',
                    'mtn_name' => 'Meh John Chi',
                    'orange_title' => 'ORANGE MONEY',
                    'orange_number' => '(+237) 657-199-032',
                    'orange_name' => 'John Chi',
                ],
                'order' => 7,
                'is_active' => true,
            ]
        );

        PageContent::updateOrCreate(
            ['page_slug' => 'partnership', 'section_slug' => 'faqs'],
            [
                'section_title' => 'Partnership FAQs',
                'content' => [
                    'subtitle' => 'questions',
                    'title' => 'Frequently Asked Questions',
                    'faq_1_question' => 'What does it mean to be a partner?',
                    'faq_1_answer' => 'Being a partner means entering into a covenant relationship with this ministry. You share in the grace, anointing, and rewards of every soul won and every life transformed through your seed.',
                    'faq_2_question' => 'How is my giving used?',
                    'faq_2_answer' => 'Your giving supports TV broadcasting to nations, feeding programs for the hungry, support for widows and orphans, and building projects for worship centers.',
                    'faq_3_question' => 'Can I give from outside Cameroon?',
                    'faq_3_answer' => 'Yes! We have international bank accounts in the UK and accept transfers in USD, EUR, GBP, and CFA. See our banking details above.',
                    'faq_4_question' => 'Is my donation secure?',
                    'faq_4_answer' => 'Absolutely. All bank transfers go directly to official ministry accounts. You will receive confirmation for every donation made.',
                ],
                'order' => 8,
                'is_active' => true,
            ]
        );

    }
}
