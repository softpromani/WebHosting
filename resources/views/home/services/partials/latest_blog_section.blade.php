<style>
/* --- DYNAMIC LATEST BLOGS SECTION --- */
.dev-blog-section {
    padding: 60px 0 70px;
    background: #f8fafc;
    font-family: 'Inter', sans-serif;
    text-align: center;
    position: relative;
    width: 100%;
}

.dev-blog-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
}

.dev-blog-tag {
    display: inline-block;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 3px;
    color: #2563eb;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.dev-blog-title {
    font-size: 1.8rem;
    font-weight: 800;
    color: #0b1c3d;
    margin-bottom: 12px;
}

.dev-blog-divider {
    width: 60px;
    height: 4px;
    background: #2563eb;
    border-radius: 2px;
    margin: 0 auto 35px;
}

/* Swiper Wrapper & Card styling */
.latest-blog-swiper {
    padding-bottom: 50px !important;
    position: relative;
}

.dev-blog-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    display: flex;
    flex-direction: column;
    height: 100%;
    text-align: left;
}

.dev-blog-card:hover {
    box-shadow: 0 16px 36px rgba(37, 99, 235, 0.12);
    transform: translateY(-6px);
    border-color: #cbd5e1;
}

.dev-blog-img {
    overflow: hidden;
    height: 195px;
    width: 100%;
    position: relative;
}

.dev-blog-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}

.dev-blog-card:hover .dev-blog-img img {
    transform: scale(1.06);
}

.dev-blog-body {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.dev-blog-meta-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
}

.dev-blog-cat {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 4px 12px;
    border-radius: 20px;
    text-transform: uppercase;
}

.cat-it-support { background: #eff6ff; color: #2563eb; }
.cat-security { background: #f0fdf4; color: #16a34a; }
.cat-management { background: #fefce8; color: #ca8a04; }

.dev-blog-date {
    font-size: 12px;
    color: #64748b;
    font-weight: 500;
}

.dev-blog-heading {
    font-size: 17px;
    font-weight: 700;
    color: #0b1c3d;
    line-height: 1.45;
    margin: 0 0 10px;
    transition: color 0.3s ease;
}

.dev-blog-card:hover .dev-blog-heading {
    color: #2563eb;
}

.dev-blog-excerpt {
    font-size: 13px;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 15px;
    flex-grow: 1;
}

.dev-blog-link-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 700;
    color: #2563eb;
    text-decoration: none;
    transition: gap 0.25s ease;
    margin-top: auto;
}

.dev-blog-link-btn:hover {
    gap: 10px;
    color: #1d4ed8;
}

/* Slider Controls Styling */
.latest-blog-slider-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 15px;
}

.latest-blog-nav-btn {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #ffffff;
    border: 1px solid #cbd5e1;
    color: #0b1c3d;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    z-index: 10;
}

.latest-blog-nav-btn:hover {
    background: #2563eb;
    color: #ffffff;
    border-color: #2563eb;
    box-shadow: 0 6px 18px rgba(37, 99, 235, 0.3);
}

.latest-blog-nav-btn.swiper-button-disabled {
    opacity: 0.4;
    cursor: not-allowed;
    pointer-events: none;
}

/* See More Button Styling */
.dev-blog-see-more-wrap {
    margin-top: 35px;
    text-align: center;
}

.dev-blog-see-more-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: #ffffff !important;
    font-size: 15px;
    font-weight: 700;
    padding: 14px 34px;
    border-radius: 50px;
    text-decoration: none !important;
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
    transition: all 0.3s ease;
}

.dev-blog-see-more-btn:hover {
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
    box-shadow: 0 12px 28px rgba(37, 99, 235, 0.38);
    transform: translateY(-2px);
}

.dev-blog-see-more-btn i {
    font-size: 16px;
    transition: transform 0.3s ease;
}

.dev-blog-see-more-btn:hover i {
    transform: translateX(4px);
}
</style>

<!-- SECTION: LATEST FROM OUR BLOG -->
<section class="dev-blog-section">
    <div class="dev-blog-container">
        <span class="dev-blog-tag">{{ $sectionTag ?? 'IT INSIGHTS' }}</span>
        <h2 class="dev-blog-title">{{ $sectionTitle ?? 'Latest From Our Blog' }}</h2>
        <div class="dev-blog-divider"></div>

        @php
            $sectionBlogs = $blogs ?? $aiBlogs ?? \App\Models\Blog::with('blogImage')->latest()->get();
        @endphp

        @if($sectionBlogs->count() > 0)
            <div class="swiper latest-blog-swiper">
                <div class="swiper-wrapper">
                    @foreach ($sectionBlogs as $blog)
                        <div class="swiper-slide">
                            <article class="dev-blog-card">
                                <div class="dev-blog-img">
                                    <a href="{{ route('single-blog', $blog->slug) }}">
                                        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" loading="lazy">
                                    </a>
                                </div>
                                <div class="dev-blog-body">
                                    @php
                                        $displayTag = !empty($blog->tags_array) ? $blog->tags_array[0] : ($blog->category_name ?? 'Technology');
                                        $catClasses = ['cat-it-support', 'cat-management', 'cat-security'];
                                        $catClass = $catClasses[$loop->index % count($catClasses)];
                                    @endphp
                                    <div class="dev-blog-meta-top">
                                        <span class="dev-blog-cat {{ $catClass }}">{{ strtoupper($displayTag) }}</span>
                                        <span class="dev-blog-date"><i class="bi bi-calendar3 me-1"></i> {{ $blog->formatted_date }}</span>
                                    </div>
                                    <h4 class="dev-blog-heading">
                                        <a href="{{ route('single-blog', $blog->slug) }}" style="color: inherit; text-decoration: none;">
                                            {{ $blog->title }}
                                        </a>
                                    </h4>
                                    <p class="dev-blog-excerpt">{{ $blog->excerpt }}</p>
                                    <a href="{{ route('single-blog', $blog->slug) }}" class="dev-blog-link-btn">
                                        Read Full Article <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>

                <!-- Slider Navigation & Dots -->
                <div class="latest-blog-slider-controls">
                    <button class="latest-blog-nav-btn latest-blog-prev" type="button" aria-label="Previous Slide">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <div class="swiper-pagination latest-blog-pagination" style="position: static; width: auto;"></div>
                    <button class="latest-blog-nav-btn latest-blog-next" type="button" aria-label="Next Slide">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        @endif

        <!-- SEE MORE BLOGS BUTTON -->
        <div class="dev-blog-see-more-wrap">
            <a href="{{ route('blog.index') }}" class="dev-blog-see-more-btn">
                See More Blogs <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- Swiper Initialization Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    function initSwiper() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.latest-blog-swiper', {
                slidesPerView: 1,
                spaceBetween: 25,
                loop: {{ $sectionBlogs->count() > 3 ? 'true' : 'false' }},
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: '.latest-blog-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.latest-blog-next',
                    prevEl: '.latest-blog-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 25,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                }
            });
        } else {
            setTimeout(initSwiper, 150);
        }
    }
    initSwiper();
});
</script>

