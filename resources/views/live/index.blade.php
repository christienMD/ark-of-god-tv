@extends('layout.main')

@section('content')

<main>
@include('sections.live-hero')

    <!-- Page Sermons Start -->
    <div class="page-sermons" id="live-sermons">
        <div class="container">
            <div class="row">
                @foreach($pageSermons as $sermon)
                <div class="col-lg-4 col-md-6">
                    <!-- Sermons Item Start -->
                    <div class="sermons-item wow fadeInUp" data-wow-delay="{{ ($loop->index * 0.25) }}s">
                        <!-- Sermons Image Start -->
                        <div class="sermons-image">
                            <figure>
                                <a href="{{ route('live.show', $sermon['id']) }}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/' . $sermon['image']) }}" alt="{{ $sermon['title'] }}">
                                </a>
                            </figure>
                            <!-- Sermons Meta Start -->
                            <div class="sermons-meta">
                                <h3>{{ $sermon['day'] }}</h3>
                                <p>{{ $sermon['month'] }}</p>
                            </div>
                            <!-- Sermons Meta End -->

                            <div class="sermons-audio-icon">
                                <a href="{{ route('live.show', $sermon['id']) }}"><img src="{{ asset('assets/images/video-play-icon.svg') }}" alt="" onerror="this.src='{{ asset('assets/images/audio-play-icon.svg') }}'"></a>
                            </div>
                        </div>
                        <!-- Sermons Image End -->

                        <!-- Sermons Body Start -->
                        <div class="sermons-body">
                            <!-- Sermons Title Start -->
                            <div class="sermons-title">
                                <h2><a href="{{ route('live.show', $sermon['id']) }}">{{ $sermon['title'] }}</a></h2>
                            </div>
                            <!-- Sermons Title End -->

                            <!-- Sermons List Start -->
                            <div class="sermons-list">
                                <ul>
                                    <li><i class="fa-solid fa-user"></i>Sermon From : <span>{{ $sermon['preacher'] }}</span></li>
                                    <li><i class="fa-solid fa-tag"></i>Categories : <span>{{ $sermon['category'] }}</span></li>
                                    <li><i class="fa-regular fa-calendar-days"></i>Date & Time : <span>{{ $sermon['date'] }} - on {{ $sermon['time'] }}</span></li>
                                </ul>
                            </div>
                            <!-- Sermons List End -->
                        </div>
                        <!-- Sermons Body End -->
                    </div>
                    <!-- Sermons Item End -->
                </div>
                @endforeach

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Sermons End -->
</main>

@endsection

