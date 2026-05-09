@extends('home.includes.layout')

@section('content')

    <!-- Blog Hero Section -->
    <section class="blog-hero-section">
        <div class="container text-center">
            <h1 class="blog-hero-title">Blog</h1>
            <div class="blog-hero-breadcrumbs">
                <a href="{{ route('home') }}">Home</a> 
                <span class="separator"><i class="bi bi-arrow-right"></i></span> 
                <a href="{{ url('/blog') }}">Blog</a> 
                <span class="separator"><i class="bi bi-arrow-right"></i></span> 
                <span class="current">Blog</span>
            </div>
        </div>
    </section>


    <div class="row mt-3 p-3">

        <div class="col-12 col-md-8 col-lg-10">
            @if($blog->blogImage && $blog->blogImage->media && file_exists(public_path('storage/' . $blog->blogImage->media)))
                <img src="{{ asset('storage/' . $blog->blogImage->media) }}" class="img-fluid rounded blogIm" alt="{{ $blog->title }}">
            @else
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=1200" class="img-fluid rounded blogIm" alt="{{ $blog->title }}">
            @endif
            <h1 class="mt-4">{{ $blog->title }}</h1>
            {!! $blog->description !!}
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <h5 class="mb-3">Related Blogs</h5>
            @foreach ($relatedblogs as $related)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                @if($related->blogImage && $related->blogImage->media && file_exists(public_path('storage/' . $related->blogImage->media)))
                                    <img src="{{ asset('storage/' . $related->blogImage->media) }}" class="img-fluid rounded" alt="Blog Image">
                                @else
                                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=400" class="img-fluid rounded" alt="Blog Image">
                                @endif
                            </div>
                            <div class="col-sm-8">
                                <h6 class="blog-title">{{ $related->title }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                 <span class="blog-text-muted">{{ $related->created_at->format('d-M-y') }}</span>
                                <a href="{{ route('single-blog', $related->slug) }}" class="text-primary">Read More ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
