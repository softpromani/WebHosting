<div>
    <link rel="stylesheet" href="{{ asset('home/assets/blog-slider/font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/blog-slider/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/blog-slider/style.css') }}">
    <div class="content">
    
        <div class="container">
          <div class="slider-92911">
            <div class="owl-carousel slide-one-item">
            @foreach($blogs as $blog)   
              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image" style="background-image: url({{ asset('storage/'.$blog?->blog_image) }});"></div>
                <div class="text">
                  <blockquote>
                    {{ \Illuminate\Support\Str::words(strip_tags($blog->description), 100, '...') }}
                    <div class="author">&mdash; {{ $blog->title }}</div>
                  </blockquote>
                </div>
              </div>  <!-- .item -->
            @endforeach
    
            </div>
          
            <div class="my-5 text-center">
              <ul class="thumbnail">
                @foreach($blogs as $blog)
                    @if($loop->first)  
                        <li class="active"><a href="#"><img src="{{ asset('storage/'.$blog?->blog_image) }}" alt="Image" class="img-fluid"></a></li>
                    @else
                        <li><a href="#"><img src="{{ asset('storage/'.$blog->blogImage->media) }}" alt="Image" class="img-fluid"></a></li>
                    @endif
                @endforeach
              </ul>
            </div>
          </div>
    
    
        </div>
      </div>
      
        <script src="{{ asset('home/assets/blog-slider/jquery-3.3.1.min.js') }}" defer></script>
        <script src="{{ asset('home/assets/blog-slider/owl.carousel.min.js') }}" defer></script>
        <script src="{{ asset('home/assets/blog-slider/main.js') }}" defer></script>
       
</div>