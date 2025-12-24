   <!-- Hero Section Start -->
   <div class="hero hero-video">
        <!-- Video Start -->
        <div class="hero-bg-video" style="background-image: url('{{ content_image('home', 'hero', 'background_image') ?? asset('assets/images/hero1.jpg') }}'); background-size: cover; background-position: center;">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop playsinline id="myVideo">
                <source src="{{ content('home', 'hero', 'video_url', 'https://video.wixstatic.com/video/18723e_b0e2a445873c425c9fa4c12aab1f89dd/720p/mp4/file.mp4') }}" type="video/mp4">
            </video>
            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Hero Background Video End -->
		<div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ content('home', 'hero', 'subtitle', 'Apostle John Chi') }}</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">{{ content('home', 'hero', 'title', 'Taking the light to every nation, every generation') }}</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{ content('home', 'hero', 'description', 'Experience powerful revelation, overwhelming grace, and divine encounters that transform lives across the globe through Apostle John Chi.') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="{{ route('visit') }}" class="btn-default"><span>{{ content('home', 'hero', 'button_1_text', 'join in person') }}</span></a>
                            <a href="{{ route('give') }}" class="btn-default btn-highlighted"><span>{{ content('home', 'hero', 'button_2_text', 'donate now') }}</span></a>
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
        <div class="down-arrow">
			<a href="#home-about"><i class="fa-solid fa-arrow-down-long"></i></a>
		</div>
	</div>
	<!-- Hero Section End -->
