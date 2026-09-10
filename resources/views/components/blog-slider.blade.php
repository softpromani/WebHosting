<div>
    <link rel="stylesheet" href="{{ asset('home/assets/blog-slider/font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/blog-slider/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/blog-slider/style.css') }}">

    @php
        $blogs = (isset($blogs) && count($blogs) > 0) ? $blogs : \App\Models\Blog::with('blogImage')->latest()->get();
    @endphp

    <div class="content">

        <div class="container">
          <div class="slider-92911">
            <div class="owl-carousel slide-one-item">
            @foreach($blogs as $blog)
              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image" style="background-image: url({{ $blog->image_url }});"></div>
                <div class="text">
                  <blockquote class="text-light">
                    <a href="{{ route('single-blog', $blog->slug) }}" style="color: white; text-decoration: none;">
                        {{ \Illuminate\Support\Str::words(strip_tags($blog->description), 75, '...') }}
                    </a>
                    <div class="author">&mdash; <a href="{{ route('single-blog', $blog->slug) }}" style="color: white;">{{ $blog->title }}</a></div>
                  </blockquote>
                </div>
              </div>  <!-- .item -->
            @endforeach

            </div>

            <div class="my-5 text-center">
              <ul class="thumbnail">
                @foreach($blogs as $blog)
                    <li class="{{ $loop->first ? 'active' : '' }}"><a href="{{ route('single-blog', $blog->slug) }}"><img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="img-fluid"></a></li>
                @endforeach
              </ul>
            </div>

            <!-- See More Blogs Button -->
            <div class="text-center mt-4 mb-3">
                <a href="{{ route('blog.index') }}" class="btn text-white rounded-pill px-4 py-2.5 fw-bold" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); border: none; box-shadow: 0 6px 18px rgba(37,99,235,0.25); font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
                    See More Blogs <i class="bi bi-arrow-right"></i>
                </a>
            </div>
          </div>


        </div>
      </div>

        <script src="{{ asset('home/assets/blog-slider/jquery-3.3.1.min.js') }}" defer></script>
        <script src="{{ asset('home/assets/blog-slider/owl.carousel.min.js') }}" defer></script>
        <script src="{{ asset('home/assets/blog-slider/main.js') }}" defer></script>

</div>

