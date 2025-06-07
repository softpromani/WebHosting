@extends('home.includes.layout')

@section('content')
    <style>
        .text-muted {
            font-size: 12px;
        }

        .blogIm {
            height: 65% !important;
            width: 100%;
        }
    </style>

    <div class="row mt-3 p-3">

        <div class="col-12 col-md-8 col-lg-10">
            <img src="{{ asset('storage/' . $blog->blogImage->media) }}" class="img-fluid rounded  blogIm" alt="..."
               >
            <h1 class="mt-4">{{ $blog->title }}</h1>
            {!! $blog->description !!}
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <h5 class="mb-3">Related Blogs</h5>
            @foreach ($relatedblogs as $blog)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('storage/' . $blog->blogImage->media) }}" class="img-fluid"
                                    alt="Blog Image">
                            </div>
                            <div class="col-sm-8">
                                <h6 class="blog-title">{{ $blog->title }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="text-muted">{{ $blog->created_at->format('d-M-y') }}</span>
                                <a href="{{ route('single-blog', $blog->slug) }}" class="text-primary">Read More ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
