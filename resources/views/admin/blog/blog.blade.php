@extends('home.includes.layout', ['breadcrumb_title' => 'Blog'])
@section('title', 'BLog')
@section('content')
    <style>
        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: #ffffff;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(https://i.ibb.co/G32GT0L/heading-line.png);
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <section class="user-blog" class="footer-top">


            <div class="heading">
                {{ $blog->title }}
            </div>

            <div class="container text-center">
                <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('storage/' . $blog->blogImage->media) }}" alt="{{ $blog->title }}" class="img-fluid">
                <p>{!! $blog->description !!}</p>
            </div>

            <div class="col-6 col-md-4">
                <div class="d-flex mb-2">
                    <img src="{{ asset('storage/' . $blog->blogImage->media) }}" alt="{{ $blog->title }}" class="img-thumbnai" style="height: 100px; width: auto;">
                    <div class="ms-3">{{ Str::limit(strip_tags($blog->description), 50) }}</div>
                   </div>
                  <div class="d-flex">
                    <img src="{{ asset('storage/' . $blog->blogImage->media) }}" alt="{{ $blog->title }}" class="img-thumbnai" style="height: 100px; width: auto;">
                    <div class="ms-3">Custom column padding</div>
                   </div>

            </div>


        </div>
        </div>

    </section>
@endsection
