@php
    // Get all ticker texts, filtering out empty ones
    $tickerTexts = collect([
        content('home', 'scrolling_ticker', 'ticker_text_1', 'Love Your Neighbor as yourself'),
        content('home', 'scrolling_ticker', 'ticker_text_2'),
        content('home', 'scrolling_ticker', 'ticker_text_3'),
        content('home', 'scrolling_ticker', 'ticker_text_4'),
    ])->filter()->values();
@endphp

    <!-- Our Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                @foreach($tickerTexts as $text)
                <span><img src="{{ asset('assets/images/icon-sparkles.svg') }}" alt="">{{ $text }}</span>
                @endforeach
                @foreach($tickerTexts as $text)
                <span><img src="{{ asset('assets/images/icon-sparkles.svg') }}" alt="">{{ $text }}</span>
                @endforeach
            </div>

            <div class="scrolling-content">
                @foreach($tickerTexts as $text)
                <span><img src="{{ asset('assets/images/icon-sparkles.svg') }}" alt="">{{ $text }}</span>
                @endforeach
                @foreach($tickerTexts as $text)
                <span><img src="{{ asset('assets/images/icon-sparkles.svg') }}" alt="">{{ $text }}</span>
                @endforeach
            </div>
        </div>
    </div>
	<!-- Scrolling Ticker Section End -->

