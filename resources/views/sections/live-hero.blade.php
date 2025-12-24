    <!-- Hero Section Start -->
    <div class="hero hero-video">
        <!-- Video Start -->
        <div class="hero-bg-video" style="background-image: url('{{ content_image('live', 'live_hero', 'background_image') ?? asset('assets/images/hero2.jpg') }}'); background-size: cover; background-position: center;">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop playsinline id="liveVideo">
                <source src="{{ content('live', 'live_hero', 'video_url', 'https://video.wixstatic.com/video/18723e_b0e2a445873c425c9fa4c12aab1f89dd/720p/mp4/file.mp4') }}" type="video/mp4">
            </video>
            <!-- Selfhosted Video End -->
        </div>
        <!-- Hero Background Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ content('live', 'live_hero', 'subtitle', 'Watch Live Now') }}</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">{{ content('live', 'live_hero', 'title', 'Experience Divine Encounters That Transform Lives') }}</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{ content('live', 'live_hero', 'description', 'Join Apostle John Chi for powerful teachings on revelation, anointing, and kingdom living. Watch live services and archived messages that bring breakthrough and transformation.') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Video Controls Start -->
                        <div class="live-video-controls wow fadeInUp" data-wow-delay="0.5s" style="margin: 30px auto 0; justify-content: center;">
                            <button type="button" class="control-btn" id="playPauseBtn" title="Play/Pause">
                                <i class="fa-solid fa-pause" id="playPauseIcon"></i>
                            </button>
                            <button type="button" class="control-btn" id="muteBtn" title="Unmute">
                                <i class="fa-solid fa-volume-xmark" id="muteIcon"></i>
                            </button>
                            <input type="range" id="volumeSlider" min="0" max="1" step="0.1" value="0.5" class="volume-slider">
                            <button type="button" class="control-btn" id="fullscreenBtn" title="Fullscreen">
                                <i class="fa-solid fa-expand"></i>
                            </button>
                        </div>
                        <!-- Video Controls End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
        <div class="down-arrow">
            <a href="#live-sermons"><i class="fa-solid fa-arrow-down-long"></i></a>
        </div>
    </div>
    <!-- Hero Section End -->

<style>
    .live-video-controls {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 30px;
        padding: 15px 25px;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        width: fit-content;
    }
    
    .live-video-controls .control-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .live-video-controls .control-btn:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        transform: scale(1.1);
    }
    
    .live-video-controls .volume-slider {
        width: 80px;
        height: 5px;
        -webkit-appearance: none;
        appearance: none;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 5px;
        cursor: pointer;
    }
    
    .live-video-controls .volume-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--primary-color);
        cursor: pointer;
    }
    
    .live-video-controls .volume-slider::-moz-range-thumb {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--primary-color);
        cursor: pointer;
        border: none;
    }
    
    @media (max-width: 576px) {
        .live-video-controls {
            padding: 10px 15px;
            gap: 10px;
        }
        
        .live-video-controls .control-btn {
            width: 40px;
            height: 40px;
            font-size: 14px;
        }
        
        .live-video-controls .volume-slider {
            width: 60px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('liveVideo');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const playPauseIcon = document.getElementById('playPauseIcon');
    const muteBtn = document.getElementById('muteBtn');
    const muteIcon = document.getElementById('muteIcon');
    const volumeSlider = document.getElementById('volumeSlider');
    const fullscreenBtn = document.getElementById('fullscreenBtn');
    
    // Play/Pause
    playPauseBtn.addEventListener('click', function() {
        if (video.paused) {
            video.play();
            playPauseIcon.classList.remove('fa-play');
            playPauseIcon.classList.add('fa-pause');
        } else {
            video.pause();
            playPauseIcon.classList.remove('fa-pause');
            playPauseIcon.classList.add('fa-play');
        }
    });
    
    // Mute/Unmute
    muteBtn.addEventListener('click', function() {
        if (video.muted) {
            video.muted = false;
            video.volume = volumeSlider.value;
            muteIcon.classList.remove('fa-volume-xmark');
            muteIcon.classList.add('fa-volume-high');
        } else {
            video.muted = true;
            muteIcon.classList.remove('fa-volume-high');
            muteIcon.classList.add('fa-volume-xmark');
        }
    });
    
    // Volume Slider
    volumeSlider.addEventListener('input', function() {
        video.volume = this.value;
        video.muted = false;
        if (this.value == 0) {
            muteIcon.classList.remove('fa-volume-high');
            muteIcon.classList.add('fa-volume-xmark');
        } else {
            muteIcon.classList.remove('fa-volume-xmark');
            muteIcon.classList.add('fa-volume-high');
        }
    });
    
    // Fullscreen
    fullscreenBtn.addEventListener('click', function() {
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.webkitRequestFullscreen) {
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) {
            video.msRequestFullscreen();
        }
    });
});
</script>
