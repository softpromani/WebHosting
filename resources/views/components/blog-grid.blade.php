<div>
    <style>
        .blog-grid-container {
            max-width: 1200px;
            margin: auto;
        }

        .blog-post-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid #e2e8f0;
        }

        .blog-post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        .blog-post-img-wrapper {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .blog-post-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            display: block;
        }

        .blog-post-card:hover .blog-post-img-wrapper img {
            transform: scale(1.05);
        }

        .blog-post-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .blog-post-body .category {
            color: #2563eb;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 8px;
        }

        .blog-post-body h3 {
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 10px;
            line-height: 1.4;
            color: #0b1c3d;
        }

        .blog-post-body h3 a {
            color: inherit;
            text-decoration: none;
            transition: color 0.25s ease;
        }

        .blog-post-body h3 a:hover {
            color: #2563eb;
        }

        .blog-post-body .meta {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 10px;
        }

        .blog-post-body p {
            font-size: 14px;
            color: #475569;
            line-height: 1.5;
            margin-bottom: 15px;
            flex-grow: 1;
        }
    </style>

    @php
        $gridBlogs = ($blogs ?? \App\Models\Blog::with('blogImage')->latest()->get())->take(3);
    @endphp

    <div class="blog-grid-container">
        <div class="row g-4">
            @foreach ($gridBlogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <article class="blog-post-card">
                        <div class="blog-post-img-wrapper">
                            <a href="{{ route('single-blog', $blog->slug) }}">
                                <img loading="lazy" src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
                            </a>
                        </div>
                        <div class="blog-post-body">
                            <span class="category">{{ $blog->category_name ?? (isset($page) ? $page : 'Technology') }}</span>
                            <h3>
                                <a href="{{ route('single-blog', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <div class="meta"><i class="bi bi-calendar3 me-1"></i> {{ $blog->formatted_date }}</div>
                            <p>{{ \Illuminate\Support\Str::words(strip_tags($blog->description), 20, '...') }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <!-- See More Blogs Button -->
        <div class="text-center mt-4 pt-2 mb-2">
            <a href="{{ route('blog.index') }}" class="btn text-white rounded-pill px-4 py-2.5 fw-bold" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); border: none; box-shadow: 0 6px 18px rgba(37,99,235,0.25); font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
                See More Blogs <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

