@extends('layout.main')

@section('content')

<main>
@include('sections.page-header', [
    'title' => content('branches', 'page_header', 'title', 'Our Global Branches'),
    'breadcrumb' => 'branches',
    'backgroundImage' => 'hero-3.jpg'
])

    <!-- Page Branches Start -->
    <div class="page-ministries">
        <div class="container">
            <div class="row">
                @foreach($branches as $index => $branch)
                <div class="col-md-4">
                    <!-- Ministries Item Start -->
                    <div class="ministries-item wow fadeInUp" data-wow-delay="{{ $index * 0.25 }}s">
                        <!-- Ministries Image Start -->
                        <div class="ministries-image" data-cursor-text="View">
                            <a href="{{ route('branches.show', $branch->slug) }}">
                                <figure>
                                    <img src="{{ asset('assets/images/' . $branch->featured_image) }}" alt="{{ $branch->name }}">
                                </figure>
                            </a>
                        </div>
                        <!-- Ministries Image End -->

                        <!-- Ministries Content Start -->
                        <div class="ministries-content">
                            <h3>{{ $branch->name }}</h3>
                        </div>
                        <!-- Ministries Content End -->

                        <!-- Ministries Btn Start -->
                        <div class="ministries-btn">
                            <a href="{{ route('branches.show', $branch->slug) }}" class="readmore-btn"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                        </div>
                        <!-- Ministries Btn End -->
                    </div>
                    <!-- Ministries Item End -->
                </div>
                @endforeach

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="0.5s">
                        {{ $branches->links('pagination::bootstrap-4') }}
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Branches End -->
</main>

@endsection

