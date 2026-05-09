@extends('home.includes.layout')

@section('content')

    <!-- Blog Hero Section -->
    <section class="blog-hero-section">
        <div class="container text-center">
            <h1 class="blog-hero-title">Blog</h1>
            <div class="blog-hero-breadcrumbs">
                <a href="{{ route('home') }}">Home</a> 
                <span class="separator"><i class="bi bi-arrow-right"></i></span> 
                <a href="{{ route('blog.index') }}">Blog</a> 
                <span class="separator"><i class="bi bi-arrow-right"></i></span> 
                <span class="current">Blog</span>
            </div>
        </div>
    </section>

    <section class="custom-blog-list-section">
        <div class="container">
            <div class="row g-4">
                @foreach ($blogs as $index => $b)
                    @php
                        $staticData = null;
                        if ($blogs->currentPage() == 1) {
                            if ($index === 0) {
                                $staticData = [
                                    'img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800',
                                    'cat' => 'Strategy',
                                    'title' => 'Building an AI-First Culture: A Leadership Guide',
                                    'desc' => 'Lorem ipsum dolor sit amet adipiscing elit Ut et massa mi. Aliquam in hendrerit.',
                                ];
                            } elseif ($index === 1) {
                                $staticData = [
                                    'img' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800',
                                    'cat' => 'Technical',
                                    'title' => 'MLOps Best Practices for Enterprise Deployment',
                                    'desc' => 'Lorem ipsum dolor sit amet adipiscing elit Ut et massa mi. Aliquam in hendrerit.',
                                ];
                            } elseif ($index === 2) {
                                $staticData = [
                                    'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
                                    'cat' => 'ROI',
                                    'title' => 'Measuring AI ROI: Beyond the Hype',
                                    'desc' => 'Lorem ipsum dolor sit amet adipiscing elit Ut et massa mi. Aliquam in hendrerit.',
                                ];
                            } elseif ($index === 3) {
                                $staticData = [
                                    'img' => asset('home/assets/homepage/images/ai_assistant_robot.png'),
                                    'cat' => 'AI Assistants',
                                    'title' => 'Building AI Assistants That Actually Help',
                                    'desc' => 'Lorem ipsum dolor sit amet adipiscing elit Ut et massa mi. Aliquam in hendrerit.',
                                ];
                            } elseif ($index === 4) {
                                $staticData = [
                                    'img' => asset('home/assets/homepage/images/ai_security_shield.png'),
                                    'cat' => 'Security',
                                    'title' => 'AI Security & Compliance: Protecting Your Data',
                                    'desc' => 'Lorem ipsum dolor sit amet adipiscing elit Ut et massa mi. Aliquam in hendrerit.',
                                ];
                            } elseif ($index === 5) {
                                $staticData = [
                                    'img' => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800',
                                    'cat' => 'Trends',
                                    'title' => 'Measuring AI ROI: Beyond the Hype',
                                    'desc' => 'Lorem ipsum dolor sit amet adipiscing elit Ut et massa mi. Aliquam in hendrerit.',
                                ];
                            }
                        }

                        $displayImg = $staticData ? $staticData['img'] : ($b->blogImage && $b->blogImage->media && file_exists(public_path('storage/' . $b->blogImage->media)) ? asset('storage/' . $b->blogImage->media) : 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');
                        $displayCat = $staticData ? $staticData['cat'] : ($b->category->name ?? 'Technology');
                        $displayTitle = $staticData ? $staticData['title'] : $b->title;
                        $displayDesc = $staticData ? $staticData['desc'] : Str::limit(strip_tags($b->description), 90);
                    @endphp

                    <div class="col-md-4">
                        <div class="custom-blog-card">
                            <div class="custom-blog-img-wrapper">
                                <img src="{{ $displayImg }}" alt="{{ $displayTitle }}">
                            </div>
                            <div class="custom-blog-content">
                                <span class="custom-blog-category">{{ $displayCat }}</span>
                                <h3 class="custom-blog-title">{{ $displayTitle }}</h3>
                                <p class="custom-blog-desc">{{ $displayDesc }}</p>
                                <a href="{{ route('single-blog', $b->slug) }}" class="custom-blog-btn">
                                    Get Started 
                                    <span class="icon-circle"><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="custom-blog-pagination mt-5">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>

    <!-- Featured Dark Blog Section (After List) -->
    <section class="dark-single-blog-section">
        <div class="container">
            <div class="row g-4">
                <!-- Left Content -->
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&q=80&w=1200" class="featured-image" alt="Team collaborating on strategy">
                    
                    <h1 class="dark-single-title mt-3">Building an AI-First Culture: A Leadership Guide</h1>
                    
                    <div class="dark-single-content">
                        <p>Scelerisque sapien magna etiam potenti. Vivamus blandit placerat laoreet a enim nisl vitae tellus. Nam non egestas sed bibendum turpis placerat sed molestie pharetra. Turpis morbi malesuada quis dictum morbi hendrerit auctor neque. Nunc et in malesuada sit amet scelerisque. Consequat sem vel tellus enim sagittis a in diam nulla. At leo mollis mattis morbi scelerisque dolor. Mattis ultrices id fusce pulvinar ac vulputate lacus.</p>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-lg-5 offset-lg-1">
                    <!-- Search Widget -->
                    <div class="dark-sidebar-widget">
                        <h3 class="widget-title">Search</h3>
                        <div class="sidebar-search-box">
                            <input type="text" placeholder="Search here">
                            <button><i class="bi bi-search"></i></button>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="dark-sidebar-widget mt-5">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="sidebar-category-list">
                            <li>
                                <a href="#">
                                    Strategy & Roadmaps 
                                    <span class="badge">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Design & Research 
                                    <span class="badge">08</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Data & Governance 
                                    <span class="badge">10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Use Cases by Industry 
                                    <span class="badge">06</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Security & Compliance 
                                    <span class="badge">09</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Popular Tags Widget -->
                    <div class="dark-sidebar-widget mt-5">
                        <h3 class="widget-title">Popular Tag</h3>
                        <div class="sidebar-tags">
                            <a href="#">AI</a>
                            <a href="#">Security</a>
                            <a href="#">Data</a>
                            <a href="#">Cloud</a>
                            <a href="#">Analytics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
