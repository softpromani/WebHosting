@php
    $cloudBlogs = \App\Models\Blog::getAiRelatedBlogs(3);
@endphp

@foreach ($cloudBlogs as $blog)
    <div class="dev-blog-card">
        <div class="dev-blog-img">
            <a href="{{ route('single-blog', $blog->slug) }}">
                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" loading="lazy">
            </a>
        </div>
        <div class="dev-blog-body">
            @php
                $displayTag = !empty($blog->tags_array) ? $blog->tags_array[0] : ($blog->category_name ?? 'AI');
                $catClasses = ['cat-tech', 'cat-firewall', 'cat-security'];
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
