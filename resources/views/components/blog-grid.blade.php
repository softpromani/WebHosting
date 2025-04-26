<div>
    <style>
        .blog-post {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            position: relative;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-post img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.5s ease;
            display: block;
        }

        .blog-post:hover img {
            transform: scale(1.05);
        }

        .post-content {
            padding: 15px 20px;
        }

        .post-content .category {
            color: #ff5722;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
            display: inline-block;
            margin-bottom: 5px;
        }

        .post-content h3 {
            font-size: 20px;
            margin: 0 0 5px;
        }

        .post-content .meta {
            font-size: 13px;
            color: #888;
            margin-bottom: 10px;
        }

        .post-content p {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
        }

        .blog-slider-wrapper {
            position: relative;
            max-width: 1200px;
            margin: auto;
            padding: 40px 0;
        }

        .custom-nav {
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 22px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .custom-nav:hover {
            background-color: #ff5722;
            color: #fff;
        }

        .custom-nav.left {
            left: -20px;
        }

        .custom-nav.right {
            right: -20px;
        }

        .arrow {
            font-weight: bold;
        }

        .image-wrapper {
            position: relative;
            width: 100%;
        }

        .image-loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 4px solid #f3f3f3;
            border-top: 4px solid #ff5722;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            z-index: 2;
        }

        .image-loaded .image-loader {
            display: none;
        }
        h3{
            line-height: 1.4rem;
        }
        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
    </style>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <div class="blog-slider-wrapper">
        <!-- Left Arrow -->
        <div class="custom-nav left"><i class="arrow">&#10094;</i></div>

        <!-- Owl Carousel -->
        <section class="blog-carousel owl-carousel owl-theme">
            @foreach ($blogs as $blog)
                <div class="blog-post">
                    <div class="image-wrapper">
                        <div class="image-loader"></div>
                        <img loading="lazy" src="{{ asset('storage/' . $blog?->blog_image) }}"
                             alt="{{ $blog->title }}" onload="this.closest('.image-wrapper').classList.add('image-loaded')">
                    </div>
                    <div class="post-content">
                        <span class="category">{{ $page }}</span>
                        <h3>{{ $blog->title }}</h3>
                        <div class="meta">{{ $blog->created_at?->format('d M Y') }}</div>
                        {{ \Illuminate\Support\Str::words(strip_tags($blog->description), 20, '...') }}
                    </div>
                </div>
            @endforeach
        </section>

        <!-- Right Arrow -->
        <div class="custom-nav right"><i class="arrow">&#10095;</i></div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        function setEqualHeight() {
            let maxHeight = 0;
            $('.blog-post').css('height', 'auto');
            $('.blog-post').each(function () {
                const h = $(this).outerHeight();
                if (h > maxHeight) maxHeight = h;
            });
            $('.blog-post').css('height', maxHeight + 'px');
        }

        const owl = $('.blog-carousel');

        owl.owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            navText: [
                '<i class="arrow left">‹</i>',
                '<i class="arrow right">›</i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            },
            onInitialized: setEqualHeight,
            onResized: setEqualHeight,
            onTranslated: setEqualHeight
        });

        $(window).on('resize', function () {
            setTimeout(setEqualHeight, 200);
        });

        // Custom nav actions
        $('.custom-nav.left').click(() => owl.trigger('prev.owl.carousel'));
        $('.custom-nav.right').click(() => owl.trigger('next.owl.carousel'));
    </script>
</div>
