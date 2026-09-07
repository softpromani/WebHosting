@extends('home.includes.layout')

@section('title', 'Insights & Technology Blog | Mounteko')
@section('meta-description', 'Explore expert insights on cloud infrastructure, cybersecurity, managed IT services, and high-performance hosting architectures.')

@section('content')

    <style>
        .custom-blog-category {
            color: #10b981 !important;
            transition: color 0.25s ease !important;
        }
        .custom-blog-category:hover,
        .custom-blog-category:focus,
        .custom-blog-card:hover .custom-blog-category:hover {
            color: #34d399 !important;
            text-decoration: underline !important;
        }
        .custom-blog-title a {
            color: #ffffff !important;
            transition: color 0.25s ease !important;
        }
        .custom-blog-title a:hover,
        .custom-blog-title a:focus {
            color: #34d399 !important;
        }
    </style>

    <!-- Blog Hero Section -->
    <section class="blog-hero-section">
        <div class="container text-center">
            <h1 class="blog-hero-title">Blog</h1>
            <div class="blog-hero-breadcrumbs">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator"><i class="bi bi-arrow-right"></i></span>
                <a href="{{ route('blog.index') }}">Blog</a>
                @if (request('category'))
                    <span class="separator"><i class="bi bi-arrow-right"></i></span>
                    <span class="current">{{ request('category') }}</span>
                @elseif (request('search'))
                    <span class="separator"><i class="bi bi-arrow-right"></i></span>
                    <span class="current">Search: "{{ request('search') }}"</span>
                @else
                    <span class="separator"><i class="bi bi-arrow-right"></i></span>
                    <span class="current">Blog</span>
                @endif
            </div>
        </div>
    </section>

    <!-- Main Blog List Section -->
    <section class="custom-blog-list-section">
        <div class="container">

            @if (request('category') || request('search'))
                <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded-3 shadow-sm border border-success-subtle">
                    <div>
                        @if (request('category'))
                            <span class="text-muted">Category:</span>
                            <strong class="text-dark ms-1">"{{ request('category') }}"</strong>
                        @endif
                        @if (request('search'))
                            <span class="text-muted {{ request('category') ? 'ms-3' : '' }}">Search:</span>
                            <strong class="text-dark ms-1">"{{ request('search') }}"</strong>
                        @endif
                        <span class="badge bg-success ms-2">{{ $blogs->count() }}
                            {{ Str::plural('article', $blogs->count()) }} found</span>
                    </div>
                    <a href="{{ route('blog.index') }}" class="btn btn-sm btn-outline-danger rounded-pill px-3">
                        <i class="bi bi-x-circle me-1"></i> Clear Filter
                    </a>
                </div>
            @endif

            @if ($blogs->isEmpty())
                <div class="text-center py-5 bg-white rounded-4 shadow-sm border p-4 my-4">
                    <div class="mb-3 text-success" style="font-size: 48px;">
                        <i class="bi bi-journal-x"></i>
                    </div>
                    <h3 class="fw-bold text-dark">No Articles Found</h3>
                    <p class="text-muted">
                        @if (request('category'))
                            No articles found in category "<strong>{{ request('category') }}</strong>".
                        @elseif (request('search'))
                            We couldn't find any articles matching "<strong>{{ request('search') }}</strong>". Try searching for different keywords.
                        @else
                            No articles published yet. Please check back soon!
                        @endif
                    </p>
                    @if (request('category') || request('search'))
                        <a href="{{ route('blog.index') }}" class="btn btn-success rounded-pill px-4 mt-2">
                            View All Articles
                        </a>
                    @endif
                </div>
            @elseif ($blogs->count() <= 6)
                <!-- Grid Display when 6 or fewer blogs (All 6 visible on screen) -->
                <div class="row g-4">
                    @foreach ($blogs as $b)
                        <div class="col-lg-4 col-md-6">
                            <article class="custom-blog-card">
                                <div class="custom-blog-img-wrapper">
                                    <a href="{{ route('single-blog', $b->slug) }}">
                                        <img src="{{ $b->image_url }}" alt="{{ $b->title }}" loading="lazy">
                                    </a>
                                </div>
                                <div class="custom-blog-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="{{ route('blog.index', ['category' => $b->category_name]) }}" class="custom-blog-category text-decoration-none m-0">
                                            {{ $b->category_name }}
                                        </a>
                                        <span class="text-white-50" style="font-size: 12px;">{{ $b->formatted_date }}</span>
                                    </div>
                                    <h3 class="custom-blog-title">
                                        <a href="{{ route('single-blog', $b->slug) }}" class="text-white text-decoration-none">
                                            {{ $b->title }}
                                        </a>
                                    </h3>
                                    <p class="custom-blog-desc">{{ $b->excerpt }}</p>
                                    <a href="{{ route('single-blog', $b->slug) }}" class="custom-blog-btn">
                                        Get Started
                                        <span class="icon-circle"><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Slider Display when more than 6 blogs (6 blogs per slide) -->
                @php
                    $blogChunks = $blogs->chunk(6);
                @endphp
                <div id="blog6Carousel" class="carousel slide" data-bs-ride="false" data-bs-touch="true">
                    <div class="carousel-inner">
                        @foreach ($blogChunks as $chunkIndex => $chunk)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="row g-4">
                                    @foreach ($chunk as $b)
                                        <div class="col-lg-4 col-md-6">
                                            <article class="custom-blog-card">
                                                <div class="custom-blog-img-wrapper">
                                                    <a href="{{ route('single-blog', $b->slug) }}">
                                                        <img src="{{ $b->image_url }}" alt="{{ $b->title }}" loading="lazy">
                                                    </a>
                                                </div>
                                                <div class="custom-blog-content">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <a href="{{ route('blog.index', ['category' => $b->category_name]) }}" class="custom-blog-category text-decoration-none m-0">
                                                            {{ $b->category_name }}
                                                        </a>
                                                        <span class="text-white-50" style="font-size: 12px;">{{ $b->formatted_date }}</span>
                                                    </div>
                                                    <h3 class="custom-blog-title">
                                                        <a href="{{ route('single-blog', $b->slug) }}" class="text-white text-decoration-none">
                                                            {{ $b->title }}
                                                        </a>
                                                    </h3>
                                                    <p class="custom-blog-desc">{{ $b->excerpt }}</p>
                                                    <a href="{{ route('single-blog', $b->slug) }}" class="custom-blog-btn">
                                                        Get Started
                                                        <span class="icon-circle"><i class="bi bi-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Slider Controls & Indicators -->
                    <div class="d-flex justify-content-center align-items-center gap-3 mt-5">
                        <button class="custom-blog-carousel-btn" type="button" data-bs-target="#blog6Carousel" data-bs-slide="prev" aria-label="Previous">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div class="d-flex align-items-center gap-2">
                            @foreach ($blogChunks as $chunkIndex => $chunk)
                                <button type="button" data-bs-target="#blog6Carousel" data-bs-slide-to="{{ $chunkIndex }}" 
                                    class="carousel-indicator-dot {{ $loop->first ? 'active' : '' }}" 
                                    aria-label="Slide {{ $chunkIndex + 1 }}"></button>
                            @endforeach
                        </div>
                        <button class="custom-blog-carousel-btn" type="button" data-bs-target="#blog6Carousel" data-bs-slide="next" aria-label="Next">
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            @endif

        </div>
    </section>

@endsection
