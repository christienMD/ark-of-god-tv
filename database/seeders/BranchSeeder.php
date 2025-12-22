<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = [
            [
                'name' => 'Limbe AGCOM',
                'slug' => 'limbe-agcom',
                'featured_image' => 'ministries-img-1.jpg',
                'slider_images' => ['ministries-img-1.jpg', 'ministries-img-2.jpg', 'ministries-img-3.jpg'],
                'description' => '<h2 class="text-anime-style-2" data-cursor="-opaque">Welcome to Limbe AGCOM!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Welcome to Limbe AGCOM, where we nurture the spiritual growth of our community in a vibrant and engaging environment. Our programs are designed to teach about the love of Jesus through interactive Bible stories, worship, and fellowship. We aim to create a safe and welcoming space where members can develop their faith, make new connections, and build a strong foundation in Christian values. Our dedicated team is passionate about guiding each person on their spiritual journey. Join us and experience the joy and excitement of learning about God\'s love!</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Members learn about Jesus through interactive Bible stories, worship, and fellowship. Our dedicated volunteers provide a safe space for growth in faith, friendship, and Christian values.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Whether it\'s through Sunday services, Bible studies, or special events throughout the year, our goal is to support and inspire each member to grow closer to God and to understand His immense love for them. Join us and watch your faith thrive in a community that celebrates unique gifts and encourages spiritual growth.</p>',
                'features_title' => 'Limbe AGCOM Features',
                'features' => [
                    'Interactive Stories',
                    'Spirited Worship',
                    'Creative Programs',
                    'Exciting Events',
                    'Dedicated Volunteers',
                    'Safe Environment',
                    'Faith Development',
                    'Friendship Building',
                ],
                'entry_images' => ['ministry-entry-img-1.jpg', 'ministry-entry-img-2.jpg'],
                'meeting_times' => ['Tuesdays, 12:30pm - 3:00pm', 'Thursdays, 9:00am - 11:00am'],
                'schedule' => [
                    '10:00 AM - Welcome and fellowship',
                    '10:20 AM - Worship',
                    '10:35 AM - Large group lesson',
                    '11:00 AM - Small group activities',
                    '11:45 AM - Closing prayer',
                ],
                'location' => 'Limbe, Southwest Region, Cameroon',
                'is_active' => true,
            ],
            [
                'name' => 'AGCOM South Africa',
                'slug' => 'agcom-south-africa',
                'featured_image' => 'south.jpeg',
                'slider_images' => ['ministries-img-2.jpg', 'ministries-img-3.jpg', 'ministries-img-1.jpg'],
                'description' => '<h2 class="text-anime-style-2" data-cursor="-opaque">Welcome to AGCOM South Africa!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Welcome to AGCOM South Africa, a vibrant community dedicated to spreading God\'s love and grace throughout South Africa. Our branch is committed to fostering spiritual growth, building strong relationships, and serving our local community with compassion. We offer dynamic worship services, engaging Bible studies, and various outreach programs designed to meet the needs of our diverse congregation.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Join us for our weekly services and special events as we gather to worship, learn, and grow together. Our passionate team is here to support you on your spiritual journey.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Experience the warmth of our community and discover how God is working in South Africa. Whether you\'re a long-time believer or just beginning your faith journey, you\'ll find a welcoming home with us.</p>',
                'features_title' => 'AGCOM South Africa Features',
                'features' => [
                    'Dynamic Worship',
                    'Bible Studies',
                    'Community Outreach',
                    'Youth Programs',
                    'Family Ministry',
                    'Prayer Groups',
                    'Leadership Training',
                    'Social Impact',
                ],
                'entry_images' => ['ministry-entry-img-2.jpg', 'ministry-entry-img-1.jpg'],
                'meeting_times' => ['Sundays, 9:00am - 12:00pm', 'Wednesdays, 6:00pm - 8:00pm'],
                'schedule' => [
                    '9:00 AM - Pre-service prayer',
                    '9:30 AM - Worship & praise',
                    '10:15 AM - Main sermon',
                    '11:15 AM - Fellowship time',
                    '11:45 AM - Benediction',
                ],
                'location' => 'Johannesburg, Gauteng, South Africa',
                'is_active' => true,
            ],
            [
                'name' => 'AGCOM Argentina',
                'slug' => 'agcom-argentina',
                'featured_image' => 'argentina.jpeg',
                'slider_images' => ['ministries-img-3.jpg', 'ministries-img-1.jpg', 'ministries-img-2.jpg'],
                'description' => '<h2 class="text-anime-style-2" data-cursor="-opaque">Welcome to AGCOM Argentina!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Bienvenidos a AGCOM Argentina! We are a passionate community of believers serving in the heart of Argentina. Our ministry focuses on bringing the Gospel to Spanish-speaking communities through culturally relevant worship, teaching, and outreach. We celebrate the rich heritage of Latin American Christianity while embracing contemporary expressions of faith.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our services are bilingual, offering both Spanish and English options to serve our diverse congregation. We host regular community events, family gatherings, and mission trips throughout Argentina.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Join us as we impact Argentina for Christ, one life at a time. Experience authentic worship, deep biblical teaching, and genuine Christian fellowship in a warm Latino atmosphere.</p>',
                'features_title' => 'AGCOM Argentina Features',
                'features' => [
                    'Bilingual Services',
                    'Cultural Worship',
                    'Family Programs',
                    'Mission Outreach',
                    'Youth Ministry',
                    'Community Events',
                    'Biblical Teaching',
                    'Fellowship Groups',
                ],
                'entry_images' => ['ministry-entry-img-1.jpg', 'ministry-entry-img-2.jpg'],
                'meeting_times' => ['Domingos, 10:00am - 1:00pm', 'Viernes, 7:00pm - 9:00pm'],
                'schedule' => [
                    '10:00 AM - Bienvenida y alabanza',
                    '10:30 AM - Adoración',
                    '11:00 AM - Mensaje pastoral',
                    '12:00 PM - Compañerismo',
                    '12:45 PM - Bendición final',
                ],
                'location' => 'Buenos Aires, Argentina',
                'is_active' => true,
            ],
            [
                'name' => 'AGCOM Yaounde',
                'slug' => 'agcom-yaounde',
                'featured_image' => 'ministries-img-1.jpg',
                'slider_images' => ['ministries-img-1.jpg', 'ministries-img-3.jpg', 'ministries-img-2.jpg'],
                'description' => '<h2 class="text-anime-style-2" data-cursor="-opaque">Welcome to AGCOM Yaounde!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Welcome to AGCOM Yaounde, our flagship branch in the capital of Cameroon. We serve as a beacon of hope and spiritual guidance in Central Africa. Our ministry is dedicated to empowering believers, training leaders, and transforming communities through the Gospel. We offer comprehensive programs including worship services, discipleship training, and community development initiatives.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">As the regional headquarters, we coordinate outreach efforts across Cameroon and provide resources and support to other branches. Our facilities include a large worship center, training rooms, and community spaces.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Join us in Yaounde as we build God\'s kingdom in Central Africa. Experience powerful worship, transformative teaching, and life-changing ministry opportunities.</p>',
                'features_title' => 'AGCOM Yaounde Features',
                'features' => [
                    'Large Worship Center',
                    'Leadership Training',
                    'Community Development',
                    'Outreach Coordination',
                    'Youth Empowerment',
                    'Women\'s Ministry',
                    'Men\'s Fellowship',
                    'Resource Center',
                ],
                'entry_images' => ['ministry-entry-img-2.jpg', 'ministry-entry-img-1.jpg'],
                'meeting_times' => ['Sundays, 8:00am - 12:00pm', 'Wednesdays, 5:30pm - 7:30pm'],
                'schedule' => [
                    '8:00 AM - Early morning prayer',
                    '8:30 AM - Praise & worship',
                    '9:30 AM - Teaching & preaching',
                    '11:00 AM - Ministry time',
                    '11:45 AM - Closing',
                ],
                'location' => 'Yaounde, Centre Region, Cameroon',
                'is_active' => true,
            ],
            [
                'name' => 'AGCOM USA',
                'slug' => 'agcom-usa',
                'featured_image' => 'ministries-img-2.jpg',
                'slider_images' => ['ministries-img-2.jpg', 'ministries-img-1.jpg', 'ministries-img-3.jpg'],
                'description' => '<h2 class="text-anime-style-2" data-cursor="-opaque">Welcome to AGCOM USA!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Welcome to AGCOM USA, our North American headquarters bringing the Ark of God message to the United States. We are a multicultural congregation celebrating diversity while united in Christ. Our ministry focuses on relevant biblical teaching, contemporary worship, and practical Christianity that impacts everyday life.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We offer multiple service times, small groups throughout the week, and various ministries for all ages and life stages. Our state-of-the-art facilities include a worship auditorium, café, bookstore, and children\'s wing.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Join us as we reach America for Christ through innovative ministry, powerful worship, and authentic community. Experience church reimagined for the 21st century while staying rooted in timeless biblical truth.</p>',
                'features_title' => 'AGCOM USA Features',
                'features' => [
                    'Multiple Service Times',
                    'Contemporary Worship',
                    'Small Groups',
                    'Children\'s Wing',
                    'Youth Ministry',
                    'College Ministry',
                    'Café & Bookstore',
                    'Community Outreach',
                ],
                'entry_images' => ['ministry-entry-img-1.jpg', 'ministry-entry-img-2.jpg'],
                'meeting_times' => ['Sundays, 9:00am & 11:00am', 'Wednesdays, 7:00pm - 8:30pm'],
                'schedule' => [
                    '9:00 AM - Welcome & worship',
                    '9:30 AM - Message',
                    '10:15 AM - Connection time',
                    '11:00 AM - Second service',
                    '12:15 PM - After-service ministry',
                ],
                'location' => 'Atlanta, Georgia, United States',
                'is_active' => true,
            ],
            [
                'name' => 'AGCOM Canada',
                'slug' => 'agcom-canada',
                'featured_image' => 'canada.jpeg',
                'slider_images' => ['ministries-img-3.jpg', 'ministries-img-2.jpg', 'ministries-img-1.jpg'],
                'description' => '<h2 class="text-anime-style-2" data-cursor="-opaque">Welcome to AGCOM Canada!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Welcome to AGCOM Canada, serving communities across the Great White North with warmth and spiritual passion. Despite our cold climate, we have hot hearts for Jesus! Our Canadian branch is known for our hospitality, multicultural congregation, and commitment to both local and global missions.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We embrace Canada\'s diversity with services that reflect our multicultural community. Our ministry includes French and English programs, newcomer support, and integration assistance for immigrants seeking to build their faith community in Canada.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Join our growing Canadian family as we live out the Gospel in the True North. Experience genuine community, practical faith teaching, and opportunities to serve both locally and internationally.</p>',
                'features_title' => 'AGCOM Canada Features',
                'features' => [
                    'Bilingual Ministry',
                    'Multicultural Worship',
                    'Newcomer Support',
                    'Family Programs',
                    'Youth & Young Adults',
                    'Global Missions',
                    'Community Care',
                    'Seasonal Events',
                ],
                'entry_images' => ['ministry-entry-img-2.jpg', 'ministry-entry-img-1.jpg'],
                'meeting_times' => ['Sundays, 10:00am - 12:30pm', 'Fridays, 7:00pm - 9:00pm'],
                'schedule' => [
                    '10:00 AM - Welcome & coffee',
                    '10:30 AM - Worship',
                    '11:00 AM - Teaching',
                    '12:00 PM - Fellowship lunch',
                    '12:30 PM - Dismissal',
                ],
                'location' => 'Toronto, Ontario, Canada',
                'is_active' => true,
            ],
        ];

        foreach ($branches as $branch) {
            Branch::updateOrCreate(
                ['slug' => $branch['slug']],
                $branch
            );
        }
    }
}
