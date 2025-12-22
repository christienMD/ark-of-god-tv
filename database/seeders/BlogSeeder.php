<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete existing blogs
        Blog::truncate();
        
        $blogs = [
            [
                'title' => 'Citizens of Heaven: Knowing Who We Are in Christ',
                'slug' => 'citizens-of-heaven-knowing-who-we-are',
                'featured_image' => 'post-1.jpg',
                'content' => '<p>As Apostle John Chi teaches, "Citizens of Heaven We Know Our Ourselves." This profound truth is the foundation of our identity in Christ. We are not merely visitors on this earth; we are heavenly citizens with divine purpose and destiny.</p>
                
                <h2>Understanding Our Heavenly Citizenship</h2>
                <p>When God called Apostle John Chi by His grace and used His servant Prophet TB Joshua to anoint him, a revelation was birthed - that we must know ourselves as citizens of heaven. This is not just a title; it is a transformation of identity that changes how we live, think, and operate in this world.</p>
                
                <blockquote>
                    <p>"For our citizenship is in heaven, from which we also eagerly wait for the Savior, the Lord Jesus Christ." - Philippians 3:20</p>
                </blockquote>
                
                <p>As citizens of heaven, we carry the authority and power of our home country. We are ambassadors representing the Kingdom of God on earth. This means we must:</p>
                
                <ul>
                    <li>Walk in the righteousness that comes from Christ</li>
                    <li>Operate in the power and authority given to us</li>
                    <li>Represent the values and culture of heaven</li>
                    <li>Live with eternal perspective, not temporal mindset</li>
                </ul>
                
                <h3>The Light of God\'s Word</h3>
                <p>In July 2013, Apostle John Chi experienced a remarkable encounter with the Lord Jesus Christ. The burden in his heart was to take the light of God\'s Word to His people. This light is what illuminates our identity as heavenly citizens.</p>
                
                <p>Join us as we continue to explore what it means to be citizens of heaven, living victoriously in Christ and fulfilling our divine mandate.</p>',
                'excerpt' => 'Discover your true identity as a citizen of heaven and learn to walk in the authority and power that comes from Christ.',
                'tags' => json_encode(['identity', 'citizenship', 'kingdom', 'apostle john chi']),
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'The Anointing: Walking in Divine Empowerment',
                'slug' => 'the-anointing-walking-in-divine-empowerment',
                'featured_image' => 'post-2.jpg',
                'content' => '<p>The anointing of God is not just a feeling or an experience - it is divine empowerment for kingdom assignment. When Prophet TB Joshua anointed Apostle John Chi, it was not merely a ceremonial act; it was the transference of grace and power to carry out God\'s vision.</p>
                
                <h2>What is the Anointing?</h2>
                <p>The anointing is God\'s supernatural enablement upon a believer to accomplish tasks that are beyond human ability. It is the presence and power of the Holy Spirit working through us to:</p>
                
                <ul>
                    <li>Break yokes and destroy burdens</li>
                    <li>Heal the sick and deliver the oppressed</li>
                    <li>Preach the Gospel with demonstration of power</li>
                    <li>Build the church and expand God\'s kingdom</li>
                </ul>
                
                <blockquote>
                    <p>"But you shall receive power when the Holy Spirit has come upon you; and you shall be witnesses to Me." - Acts 1:8</p>
                </blockquote>
                
                <h3>Operating in Your Anointing</h3>
                <p>Every believer has been anointed for their specific assignment. The question is not whether you have an anointing, but whether you are operating in it. To walk in your anointing:</p>
                
                <p><strong>1. Know Your Call:</strong> Understand what God has called you to do. Apostle John Chi knew he was called to take the light of God\'s Word to his people.</p>
                
                <p><strong>2. Develop Intimacy with God:</strong> The anointing flows from relationship. Spend time in His presence through prayer and worship.</p>
                
                <p><strong>3. Step Out in Faith:</strong> The anointing is activated when you step out to do what God has called you to do.</p>
                
                <p>Join AGCOM as we teach you how to discover, develop, and deploy your anointing for kingdom impact.</p>',
                'excerpt' => 'Learn about the anointing of God and how to walk in divine empowerment for your kingdom assignment.',
                'tags' => json_encode(['anointing', 'holy spirit', 'power', 'calling']),
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Taking the Light: Your Mission as a Believer',
                'slug' => 'taking-the-light-your-mission-as-believer',
                'featured_image' => 'post-3.jpg',
                'content' => '<p>When God entrusted the light of the Word to Apostle John Chi, it came with a burden and a mission - to take this light to the people. This same mission rests upon every believer. You are called to be a light bearer in your world.</p>
                
                <h2>You Are the Light of the World</h2>
                <p>Jesus declared, "You are the light of the world. A city that is set on a hill cannot be hidden" (Matthew 5:14). This is not optional; it is your identity and your mission. As citizens of heaven, we must:</p>
                
                <ul>
                    <li>Shine brightly in dark places</li>
                    <li>Carry the Gospel to every nation</li>
                    <li>Demonstrate the love and power of God</li>
                    <li>Disciple others in the ways of the Kingdom</li>
                </ul>
                
                <h3>The Burden for Souls</h3>
                <p>Apostle John Chi\'s burden was to take the light to his people. What is your burden? Where has God placed a passion in your heart? Your burden is often the gateway to your assignment.</p>
                
                <blockquote>
                    <p>"The Spirit of the Lord is upon Me, because He has anointed Me to preach the gospel to the poor." - Luke 4:18</p>
                </blockquote>
                
                <p>The light you carry is desperately needed in this dark world. People are waiting for the revelation, deliverance, and transformation that can only come through the Word of God. Will you answer the call?</p>
                
                <h3>Practical Steps to Take the Light</h3>
                <p><strong>Start Where You Are:</strong> You don\'t need to travel far to be a missionary. Start with your family, neighbors, and workplace.</p>
                
                <p><strong>Partner with AGCOM:</strong> Join us in our global mission to spread the Gospel through our branches in Cameroon, USA, Canada, Argentina, and South Africa.</p>
                
                <p><strong>Support Kingdom Work:</strong> Your giving enables us to reach more souls and establish more churches worldwide.</p>
                
                <p>Let your light so shine that others may see your good works and glorify your Father in heaven!</p>',
                'excerpt' => 'Discover your mission to take the light of God\'s Word to your world and make an eternal impact.',
                'tags' => json_encode(['mission', 'evangelism', 'light', 'gospel']),
                'is_published' => true,
                'published_at' => now()->subDays(8),
            ],
            [
                'title' => 'The Power of Revelation: Encounters That Transform',
                'slug' => 'the-power-of-revelation-encounters-that-transform',
                'featured_image' => 'post-4.jpg',
                'content' => '<p>In July 2013, Apostle John Chi experienced a remarkable encounter with the Lord Jesus Christ that birthed Ark of God\'s Covenant Ministry (AGCOM). This was not just a vision or a dream; it was a life-transforming revelation that changed everything.</p>
                
                <h2>Why Revelation Matters</h2>
                <p>Revelation is God pulling back the curtain to show you something that changes your perspective, your direction, and your destiny. Without revelation:</p>
                
                <ul>
                    <li>We operate in human wisdom instead of divine insight</li>
                    <li>We miss God\'s timing and direction for our lives</li>
                    <li>We struggle to fulfill our divine assignment</li>
                    <li>We lack the conviction needed to persevere</li>
                </ul>
                
                <blockquote>
                    <p>"Where there is no revelation, people cast off restraint; but blessed is the one who heeds wisdom\'s instruction." - Proverbs 29:18</p>
                </blockquote>
                
                <h3>Positioning Yourself for Revelation</h3>
                <p>Revelation comes to those who position themselves to receive it. Here\'s how:</p>
                
                <p><strong>1. Cultivate a Listening Heart:</strong> In supplication and prayer, Apostle John Chi sought God about His vision. Create space to hear from God.</p>
                
                <p><strong>2. Study the Word:</strong> The Bible is the primary way God reveals Himself and His will. Immerse yourself in Scripture.</p>
                
                <p><strong>3. Expect Divine Encounters:</strong> God is still speaking today. Expect Him to reveal Himself to you through dreams, visions, and supernatural encounters.</p>
                
                <h3>Acting on Your Revelation</h3>
                <p>Revelation without action is incomplete. When God shows you something, He expects you to:</p>
                <ul>
                    <li>Believe it wholeheartedly</li>
                    <li>Declare it boldly</li>
                    <li>Act on it faithfully</li>
                    <li>Persevere until it manifests</li>
                </ul>
                
                <p>AGCOM exists because one man acted on his revelation. What revelation has God given you? It\'s time to step out and watch Him bring it to pass!</p>',
                'excerpt' => 'Learn how divine revelation transforms lives and how to position yourself for encounters with God.',
                'tags' => json_encode(['revelation', 'encounter', 'vision', 'transformation']),
                'is_published' => true,
                'published_at' => now()->subDays(11),
            ],
            [
                'title' => 'Grace That Overwhelms: Living in Divine Favor',
                'slug' => 'grace-that-overwhelms-living-in-divine-favor',
                'featured_image' => 'post-5.jpg',
                'content' => '<p>"When God called me by his grace... I was overwhelmed by this grace." These words from Apostle John Chi capture the essence of what it means to experience the overwhelming grace of God. Grace is not earned; it is freely given, and it changes everything.</p>
                
                <h2>Understanding God\'s Grace</h2>
                <p>Grace is God\'s unmerited favor - His kindness toward us that we don\'t deserve. It is:</p>
                
                <ul>
                    <li><strong>Saving Grace:</strong> That brings us to salvation</li>
                    <li><strong>Sustaining Grace:</strong> That keeps us through trials</li>
                    <li><strong>Enabling Grace:</strong> That empowers us for service</li>
                    <li><strong>Transforming Grace:</strong> That changes us from glory to glory</li>
                </ul>
                
                <blockquote>
                    <p>"For by grace you have been saved through faith, and that not of yourselves; it is the gift of God." - Ephesians 2:8</p>
                </blockquote>
                
                <h3>Living in God\'s Grace</h3>
                <p>To live in grace means to:</p>
                
                <p><strong>1. Receive It Freely:</strong> Stop trying to earn what God freely gives. Accept His grace with thanksgiving.</p>
                
                <p><strong>2. Walk in It Daily:</strong> Grace is not just for salvation; it is for every moment of every day. Depend on His grace for strength, wisdom, and power.</p>
                
                <p><strong>3. Extend It to Others:</strong> As you have freely received, freely give. Show grace to those who don\'t deserve it, just as God showed grace to you.</p>
                
                <h3>Grace and Your Calling</h3>
                <p>When God calls you, He provides the grace to fulfill that calling. Apostle John Chi was overwhelmed by grace because he recognized that God was not only calling him but also equipping him. Your calling comes with grace attached!</p>
                
                <p>Don\'t let feelings of inadequacy stop you. God\'s grace is sufficient for you, and His strength is made perfect in weakness. Step into your calling and watch His grace carry you!</p>
                
                <p>Join us at AGCOM where we teach you to walk in the fullness of God\'s grace and favor.</p>',
                'excerpt' => 'Experience the overwhelming grace of God and learn to walk in divine favor every day.',
                'tags' => json_encode(['grace', 'favor', 'calling', 'salvation']),
                'is_published' => true,
                'published_at' => now()->subDays(14),
            ],
            [
                'title' => 'Building the Ark: God\'s Covenant with His People',
                'slug' => 'building-the-ark-gods-covenant-with-his-people',
                'featured_image' => 'post-6.jpg',
                'content' => '<p>The name "Ark of God\'s Covenant Ministry" (AGCOM) is deeply significant. Just as Noah built an ark according to God\'s instruction to preserve life, we are building a spiritual ark - a place of covenant relationship, safety, and divine purpose.</p>
                
                <h2>The Ark Represents Covenant</h2>
                <p>In the Old Testament, the Ark of the Covenant represented God\'s presence among His people. It contained:</p>
                
                <ul>
                    <li>The tablets of the Ten Commandments (God\'s Word)</li>
                    <li>Aaron\'s rod that budded (God\'s authority)</li>
                    <li>A pot of manna (God\'s provision)</li>
                </ul>
                
                <p>Today, AGCOM represents these same realities in the New Covenant:</p>
                
                <blockquote>
                    <p>"This is the covenant I will make with them after that time, says the Lord. I will put my laws in their hearts, and I will write them on their minds." - Hebrews 10:16</p>
                </blockquote>
                
                <h3>Living in Covenant Relationship</h3>
                <p>A covenant is more than a contract; it is a binding relationship. God\'s covenant with you means:</p>
                
                <p><strong>His Promises Are Yours:</strong> Every promise in Scripture belongs to you as a covenant partner with God.</p>
                
                <p><strong>His Presence Is with You:</strong> You never walk alone. The God who made covenant with you walks with you every step.</p>
                
                <p><strong>His Power Works for You:</strong> The same power that raised Christ from the dead is available to you through covenant.</p>
                
                <h3>Your Place in the Ark</h3>
                <p>Just as Noah\'s ark was a place of safety during judgment, AGCOM is a spiritual covering and family where you can:</p>
                
                <ul>
                    <li>Grow in your faith and knowledge of God</li>
                    <li>Find community and fellowship with other believers</li>
                    <li>Discover and develop your gifts and calling</li>
                    <li>Partner in taking the Gospel to nations</li>
                </ul>
                
                <p>God is building His church, His ark, in these last days. Will you be part of what He is doing? Join us at one of our global branches or connect with us online. Together, we are citizens of heaven, knowing ourselves and our divine purpose!</p>
                
                <h3>AGCOM Global Presence</h3>
                <p>With branches in Limbe (Cameroon), Yaounde (Cameroon), South Africa, USA, Canada, and Argentina, we are fulfilling the vision to take the light of God\'s Word to nations. Wherever you are, there\'s a place for you in this covenant family.</p>',
                'excerpt' => 'Discover the significance of God\'s covenant and your place in the Ark of God\'s Covenant Ministry.',
                'tags' => json_encode(['covenant', 'AGCOM', 'church', 'family']),
                'is_published' => true,
                'published_at' => now()->subDays(17),
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
