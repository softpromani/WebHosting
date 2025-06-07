@extends('home.includes.layout')

@section('content')
{{--header  --}}
 <div
        style="background-image: url('{{ asset('storage/' . settingValue('breadcrumb_image')) }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;
           padding: 80px 0;
           height: 450px;">
        <div class="container">
            <div class="row gy-4 mt-33">
               <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-start pt-5" data-aos="fade-up"
                    data-aos-delay="200" style="color: white;">
                    <p class="mt-5">{{ $blog->title }}</p>
                    <br>
                    <x-cta-btn :links="[
                        'contact_us' => '/contact-us',
                        'start_7_days_free_trial' => '/apply-now',
                    ]" />
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200"
                    style="display: flex; justify-content: center; align-items: center;">

                </div>
            </div>
        </div>
    </div>
{{-- header --}}

    <style>
        .text-muted {
            font-size: 12px;
        }

        .blogIm {

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
