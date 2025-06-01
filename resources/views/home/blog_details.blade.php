@extends('home.includes.layout')
@section('title', 'Mounteko Cloud Hosting pricing & plans')
@section('meta-description', '')
@section('content')
    <style>
        .pricing-table-area {
            background-color: #f8faff;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .custom-container {
            max-width: 1140px;
            margin: 0 auto;
            position: relative;
        }



        .section-header {
            text-align: left;
            margin-bottom: 7rem;
            position: relative;
            z-index: 1;
            padding: 40px;
            background-color: #eef3fc;
            border-radius: 15px;
        }

        .section-subtitle {
            color: var(--primary-color);
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            margin-top: 10px;
        }

        .section-header p {
            margin-top: 20px;
            font-size: 16px;
            color: #6c757d;
        }

        .theme-btn {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .pricing-table-lists {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .pricing-table-box {
            background-color: #fff;
            /* background-color: #F3F6FD; */
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
            flex: 0 0 30%;
        }

        .pricing-table-box h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .pricing-table-box h1 sup {
            top: -15px;
            font-size: 20px;
        }

        .pricing-table-box h5 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .pricing-table-box ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .pricing-table-box ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .pricing-table-box ul li i {
            color: var(--primary-color);
            margin-right: 10px;
        }

        .our-team-2-header .bg-shape {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            object-fit: cover;
            height: 100%;
            pointer-events: none;
        }
    </style>
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            @php
            $baseColor =  settingValue('primary') ?? '#65E82E'; // Change this dynamically
            $lightColor = adjustBrightness($baseColor, 100); // Lighter Shade
            $darkColor = adjustBrightness($baseColor, -50); // Darker Shade
            @endphp
            <div class="optech-breadcrumb"
            style="background-image: url('{{ asset('storage/' . settingValue('breadcrumb_image')) }}');
                   background-size: cover;
                   background-position: center;
                   background-repeat: no-repeat;
                   display: flex;
                   align-items: center;
                   justify-content: center;
                   text-align: center;
                   height: 450px;">
           <div class="container">
               <h1 class="post__title" style="color: white;">Blog Details</h1>
               <nav class="breadcrumbs">
                   <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 10px;">
                       <li><a href="{{ route('home') }}" style="color: white; text-decoration: none;">Home</a></li>
                       <li aria-current="page" style="color: white;">Blog Details</li>
                   </ul>
               </nav>
           </div>
       </div>

       @section('content')
            <div class="container py-5">
                <h1>{{ $blog->title }}</h1>
                <p><strong>Published:</strong> {{ $blog->created_at->format('d M Y') }}</p>
                <img src="{{ asset('storage/' . $blog->blog_image) }}" alt="{{ $blog->title }}" style="max-width:100%; height:auto;" class="mb-4">
                <div>{!! $blog->description !!}</div>
            </div>
        @endsection



    </main><!-- End #main -->
@endsection
