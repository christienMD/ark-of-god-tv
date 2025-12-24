@php
    // Get all service ticker texts, filtering out empty ones
    $tickerTexts = collect([
        content('home', 'service_ticker', 'ticker_text_1', 'Citizens of Heaven'),
        content('home', 'service_ticker', 'ticker_text_2', 'Walking in Divine Power'),
        content('home', 'service_ticker', 'ticker_text_3', 'Taking the Light'),
        content('home', 'service_ticker', 'ticker_text_4', 'Overwhelming Grace'),
        content('home', 'service_ticker', 'ticker_text_5', 'Kingdom Living'),
    ])->filter()->values();
@endphp

    <!-- Service Ticker Start -->
	<div class="service-ticker">
		<div class="scrolling-ticker">
            <div class="scrolling-ticker-box">
                <div class="scrolling-content">
                    @foreach($tickerTexts as $text)
                    <span><img src="{{ asset('assets/images/icon-asterisk.svg') }}" alt="">{{ $text }}</span>
                    @endforeach
                </div>

                <div class="scrolling-content">
                    @foreach($tickerTexts as $text)
                    <span><img src="{{ asset('assets/images/icon-asterisk.svg') }}" alt="">{{ $text }}</span>
                    @endforeach
                </div>
            </div>
        </div>
	</div>
	<!-- Service Ticker End -->

