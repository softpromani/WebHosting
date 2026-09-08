<style>
/* --- DYNAMIC LATEST BLOGS SECTION --- */
.dev-blog-section {
    padding: 50px 0 60px;
    background: #f8fafc;
    font-family: 'Inter', sans-serif;
    text-align: center;
    position: relative;
    width: 100%;
}

.dev-blog-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.dev-blog-tag {
    display: inline-block;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 3px;
    color: #2563eb;
    text-transform: uppercase;
    margin-bottom: 15px;
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

.dev-blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    text-align: left;
}

.dev-blog-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.4s ease;
    border: 1px solid #f1f5f9;
    display: flex;
    flex-direction: column;
}

.dev-blog-card:hover {
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    transform: translateY(-8px);
}

.dev-blog-img {
    overflow: hidden;
    height: 185px;
    width: 100%;
}

.dev-blog-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}

.dev-blog-card:hover .dev-blog-img img {
    transform: scale(1.08);
}

.dev-blog-body {
    padding: 18px 20px 22px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.dev-blog-cat {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 4px 10px;
    border-radius: 4px;
    margin-bottom: 10px;
    width: fit-content;
}

.cat-it-support { background: #eff6ff; color: #2563eb; }
.cat-security { background: #f0fdf4; color: #16a34a; }
.cat-management { background: #fefce8; color: #ca8a04; }

.dev-blog-meta {
    display: flex;
    gap: 15px;
    font-size: 12px;
    color: #64748b;
    margin-bottom: 10px;
    align-items: center;
}

.dev-blog-meta i {
    margin-right: 5px;
    color: #2563eb;
}

.dev-blog-heading {
    font-size: 18px;
    font-weight: 800;
    color: #0b1c3d;
    line-height: 1.4;
    margin: 0;
    transition: color 0.3s ease;
}

.dev-blog-card:hover .dev-blog-heading {
    color: #2563eb;
}

@media (max-width: 991px) {
    .dev-blog-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 650px) {
    .dev-blog-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- SECTION: LATEST FROM OUR BLOG -->
<section class="dev-blog-section">
    <div class="dev-blog-container">
        <span class="dev-blog-tag">{{ $sectionTag ?? 'IT INSIGHTS' }}</span>
        <h2 class="dev-blog-title">{{ $sectionTitle ?? 'Latest From Our Blog' }}</h2>
        <div class="dev-blog-divider"></div>

        <div class="dev-blog-grid">
            @php
                $sectionBlogs = $aiBlogs ?? \App\Models\Blog::getAiRelatedBlogs(3);
            @endphp

            @foreach ($sectionBlogs as $blog)
                <div class="dev-blog-card">
                    <div class="dev-blog-img">
                        <a href="{{ route('single-blog', $blog->slug) }}">
                            <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" loading="lazy">
                        </a>
                    </div>
                    <div class="dev-blog-body">
                        @php
                            $displayTag = !empty($blog->tags_array) ? $blog->tags_array[0] : ($blog->category_name ?? 'AI');
                            $catClasses = ['cat-it-support', 'cat-management', 'cat-security'];
                            $catClass = $catClasses[$loop->index % count($catClasses)];
                        @endphp
                        <span class="dev-blog-cat {{ $catClass }}">{{ strtoupper($displayTag) }}</span>
                        <h4 class="dev-blog-heading">
                            <a href="{{ route('single-blog', $blog->slug) }}" style="color: inherit; text-decoration: none;">
                                {{ $blog->title }}
                            </a>
                        </h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
