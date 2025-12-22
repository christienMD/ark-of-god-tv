@extends('layout.main')

@section('content')

<main>
@include('sections.page-header', [
    'title' => 'Latest Articles',
    'breadcrumb' => 'blog',
    'backgroundImage' => 'blog-hero.jpeg'
])

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                @foreach($blogs as $index => $blog)
                    <x-blog-card :blog="$blog" :delay="$index * 0.25" />
                @endforeach

                @if($blogs->hasPages())
                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="0.5s">
                        {{ $blogs->links() }}
                    </div>
                    <!-- Page Pagination End -->
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
</main>

@endsection

