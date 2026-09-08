@extends('admin.includes.layout', ['breadcrumb_title' => 'Dashboard'])
@section('title', 'Admin Dashboard')

@section('main-content')
<style>
    /* Modern Dashboard Styling */
    .dash-hero-card {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #2563eb 100%);
        border-radius: 16px;
        padding: 28px 32px;
        color: #ffffff;
        box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.25), 0 8px 10px -6px rgba(15, 23, 42, 0.2);
        position: relative;
        overflow: hidden;
        margin-bottom: 24px;
    }
    .dash-hero-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 380px;
        height: 380px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, rgba(255,255,255,0) 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .dash-hero-title {
        font-size: 1.65rem;
        font-weight: 700;
        letter-spacing: -0.02em;
        margin-bottom: 6px;
    }
    .dash-hero-subtitle {
        color: #cbd5e1;
        font-size: 0.95rem;
        margin-bottom: 0;
        max-width: 600px;
    }
    .dash-btn-glass {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        color: #ffffff !important;
        border-radius: 10px;
        padding: 8px 16px;
        font-size: 0.875rem;
        font-weight: 600;
        transition: all 0.2s ease-in-out;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .dash-btn-glass:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.45);
        transform: translateY(-2px);
        color: #ffffff !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .dash-btn-glass-primary {
        background: #ffffff;
        color: #0f172a !important;
        border: 1px solid #ffffff;
    }
    .dash-btn-glass-primary:hover {
        background: #f1f5f9;
        color: #0284c7 !important;
        border-color: #ffffff;
    }

    /* KPI Stat Cards */
    .stat-card-pro {
        border-radius: 16px;
        border: none;
        padding: 22px;
        background: #ffffff;
        box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05), 0 2px 6px -1px rgba(0, 0, 0, 0.03);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .stat-card-pro:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px -4px rgba(0, 0, 0, 0.1), 0 4px 12px -2px rgba(0, 0, 0, 0.05);
    }
    .stat-icon-wrapper {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        flex-shrink: 0;
    }
    .stat-value {
        font-size: 2rem;
        font-weight: 800;
        line-height: 1.1;
        letter-spacing: -0.03em;
        color: #0f172a;
        margin-top: 8px;
    }
    .stat-label {
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        color: #64748b;
        margin-bottom: 2px;
    }
    .stat-footer-link {
        font-size: 0.82rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 14px;
        padding-top: 12px;
        border-top: 1px solid #f1f5f9;
        text-decoration: none !important;
        transition: gap 0.2s ease;
    }
    .stat-card-pro:hover .stat-footer-link i {
        transform: translateX(3px);
    }
    .stat-footer-link i {
        transition: transform 0.2s ease;
        font-size: 0.75rem;
    }

    /* Gradients for KPI Cards */
    .icon-blue { background: rgba(37, 99, 235, 0.12); color: #2563eb; }
    .icon-emerald { background: rgba(16, 185, 129, 0.12); color: #059669; }
    .icon-amber { background: rgba(245, 158, 11, 0.12); color: #d97706; }
    .icon-purple { background: rgba(139, 92, 246, 0.12); color: #7c3aed; }
    .icon-rose { background: rgba(244, 63, 94, 0.12); color: #e11d48; }
    .icon-cyan { background: rgba(6, 182, 212, 0.12); color: #0891b2; }

    /* Secondary Stat Pills */
    .secondary-stat-box {
        background: #ffffff;
        border-radius: 12px;
        padding: 14px 18px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        display: flex;
        align-items: center;
        gap: 14px;
        border: 1px solid #e2e8f0;
        transition: all 0.2s ease;
        height: 100%;
        text-decoration: none !important;
    }
    .secondary-stat-box:hover {
        border-color: #cbd5e1;
        background: #f8fafc;
        transform: translateY(-2px);
    }
    .secondary-stat-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
    }

    /* Content Cards */
    .card-modern {
        background: #ffffff;
        border-radius: 16px;
        border: none;
        box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05), 0 2px 6px -1px rgba(0, 0, 0, 0.03);
        margin-bottom: 24px;
        overflow: hidden;
    }
    .card-modern-header {
        padding: 18px 24px;
        border-bottom: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #ffffff;
    }
    .card-modern-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .card-modern-body {
        padding: 20px 24px;
    }

    /* Modern Table Styles */
    .table-modern {
        margin: 0;
        width: 100%;
    }
    .table-modern thead th {
        background: #f8fafc;
        font-size: 0.78rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #64748b;
        border-top: none;
        border-bottom: 1px solid #e2e8f0;
        padding: 12px 16px;
    }
    .table-modern tbody td {
        padding: 14px 16px;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
        color: #334155;
        font-size: 0.88rem;
    }
    .table-modern tbody tr:last-child td {
        border-bottom: none;
    }
    .table-modern tbody tr:hover td {
        background: #f8fafc;
    }

    /* Badges & Avatars */
    .avatar-circle {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
        color: #4338ca;
        font-weight: 700;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .badge-soft-primary { background: #eff6ff; color: #2563eb; font-weight: 600; padding: 4px 10px; border-radius: 6px; }
    .badge-soft-success { background: #ecfdf5; color: #059669; font-weight: 600; padding: 4px 10px; border-radius: 6px; }
    .badge-soft-warning { background: #fffbeb; color: #d97706; font-weight: 600; padding: 4px 10px; border-radius: 6px; }

    /* Blog List Item */
    .blog-mini-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 0;
        border-bottom: 1px solid #f1f5f9;
        transition: background 0.2s ease;
    }
    .blog-mini-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .blog-mini-item:first-child {
        padding-top: 0;
    }
    .blog-mini-thumb {
        width: 58px;
        height: 58px;
        border-radius: 10px;
        object-fit: cover;
        background: #f1f5f9;
        flex-shrink: 0;
    }
    .blog-mini-thumb-empty {
        width: 58px;
        height: 58px;
        border-radius: 10px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 1.2rem;
        flex-shrink: 0;
    }
    .blog-mini-title {
        font-size: 0.92rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 4px;
        line-height: 1.35;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .blog-mini-meta {
        font-size: 0.78rem;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 8px;
    }
</style>

<div class="container-fluid px-3 pt-2 pb-4">
    <!-- Welcome Greeting Hero Banner -->
    <div class="dash-hero-card">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <div class="d-inline-flex align-items-center px-3 py-1 mb-2 rounded-pill bg-white bg-opacity-10" style="font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(255,255,255,0.2);">
                    <span class="d-inline-block rounded-circle bg-success mr-2" style="width: 8px; height: 8px; box-shadow: 0 0 8px #22c55e;"></span>
                    System Live & Active &bull; {{ now()->format('l, M d, Y') }}
                </div>
                <h1 class="dash-hero-title">Welcome back, {{ auth()->user()->first_name ?? 'Admin' }}! 👋</h1>
                <p class="dash-hero-subtitle">
                    Here is your centralized control dashboard. Track real-time inquiries, manage published content, and monitor portal growth.
                </p>
            </div>
            <div class="col-lg-5 text-lg-right">
                <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                    <a href="{{ route('admin.blog.create') }}" class="dash-btn-glass dash-btn-glass-primary">
                        <i class="fa-solid fa-circle-plus"></i> Write Blog
                    </a>
                    <a href="{{ route('admin.product.create') }}" class="dash-btn-glass">
                        <i class="fa-solid fa-plus"></i> Add Product
                    </a>
                    <a href="{{ route('home') }}" target="_blank" class="dash-btn-glass">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i> Live Site
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Primary KPI Metric Cards -->
    <div class="row g-3 mb-4">
        <!-- Card 1: Blogs -->
        <div class="col-xl-3 col-md-6 mb-3 mb-xl-0">
            <div class="stat-card-pro">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div class="stat-label">Published Blogs</div>
                        <div class="stat-value">{{ number_format($totalBlogs) }}</div>
                    </div>
                    <div class="stat-icon-wrapper icon-blue">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                </div>
                <a href="{{ route('admin.blog.index') }}" class="stat-footer-link text-primary">
                    <span>Manage all articles</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Card 2: Products / Services -->
        <div class="col-xl-3 col-md-6 mb-3 mb-xl-0">
            <div class="stat-card-pro">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div class="stat-label">Catalog Products</div>
                        <div class="stat-value">{{ number_format($totalProducts) }}</div>
                    </div>
                    <div class="stat-icon-wrapper icon-emerald">
                        <i class="fa-solid fa-cubes"></i>
                    </div>
                </div>
                <a href="{{ route('admin.product.index') }}" class="stat-footer-link text-success">
                    <span>View all products</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Card 3: Contact Inquiries -->
        <div class="col-xl-3 col-md-6 mb-3 mb-xl-0">
            <div class="stat-card-pro">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div class="stat-label">Contact Inquiries</div>
                        <div class="stat-value">{{ number_format($totalContacts) }}</div>
                    </div>
                    <div class="stat-icon-wrapper icon-amber">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                </div>
                <a href="{{ route('admin.contact-us.index') }}" class="stat-footer-link text-warning">
                    <span>Review customer leads</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Card 4: Newsletter Subscribers -->
        <div class="col-xl-3 col-md-6 mb-3 mb-xl-0">
            <div class="stat-card-pro">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div class="stat-label">Subscribers</div>
                        <div class="stat-value">{{ number_format($totalNewsletters) }}</div>
                    </div>
                    <div class="stat-icon-wrapper icon-purple">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>
                </div>
                <a href="{{ route('admin.newsletter.index') }}" class="stat-footer-link text-purple" style="color: #7c3aed;">
                    <span>Manage mailing list</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Secondary Stats Bar -->
    <div class="row g-3 mb-4">
        <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
            <a href="{{ route('admin.team.index') }}" class="secondary-stat-box">
                <div class="secondary-stat-icon icon-cyan">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <div>
                    <h5 class="mb-0 font-weight-bold text-dark">{{ $totalTeams }}</h5>
                    <span class="text-muted" style="font-size: 0.8rem;">Team Members</span>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
            <a href="{{ route('admin.testimonial.index') }}" class="secondary-stat-box">
                <div class="secondary-stat-icon icon-rose">
                    <i class="fa-solid fa-quote-left"></i>
                </div>
                <div>
                    <h5 class="mb-0 font-weight-bold text-dark">{{ $totalTestimonials }}</h5>
                    <span class="text-muted" style="font-size: 0.8rem;">Client Reviews</span>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
            <a href="{{ route('admin.price-plan.index') }}" class="secondary-stat-box">
                <div class="secondary-stat-icon icon-blue">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <div>
                    <h5 class="mb-0 font-weight-bold text-dark">{{ $totalPricePlans }}</h5>
                    <span class="text-muted" style="font-size: 0.8rem;">Pricing Packages</span>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
            <a href="{{ route('admin.faqs.index') }}" class="secondary-stat-box">
                <div class="secondary-stat-icon icon-amber">
                    <i class="fa-solid fa-circle-question"></i>
                </div>
                <div>
                    <h5 class="mb-0 font-weight-bold text-dark">{{ $totalFaqs }}</h5>
                    <span class="text-muted" style="font-size: 0.8rem;">Frequently Asked FAQs</span>
                </div>
            </a>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row g-3 mb-4">
        <!-- 6-Month Inquiries & Subscriber Trend Chart -->
        <div class="col-lg-8 mb-3 mb-lg-0">
            <div class="card-modern h-100">
                <div class="card-modern-header">
                    <h3 class="card-modern-title">
                        <i class="fa-solid fa-chart-line text-primary"></i>
                        Customer Engagement & Lead Growth
                    </h3>
                    <span class="badge badge-soft-primary">Last 6 Months</span>
                </div>
                <div class="card-modern-body">
                    <div style="height: 310px; position: relative;">
                        <canvas id="growthTrendChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Distribution Chart -->
        <div class="col-lg-4">
            <div class="card-modern h-100">
                <div class="card-modern-header">
                    <h3 class="card-modern-title">
                        <i class="fa-solid fa-chart-pie text-success"></i>
                        Content & Modules
                    </h3>
                    <span class="badge badge-soft-success">Overview</span>
                </div>
                <div class="card-modern-body d-flex flex-column justify-content-center">
                    <div style="height: 240px; position: relative;">
                        <canvas id="contentDistributionChart"></canvas>
                    </div>
                    <div class="row text-center mt-3 pt-3 border-top">
                        <div class="col-6">
                            <small class="text-muted text-uppercase d-block" style="font-size: 0.72rem; font-weight: 700;">Content Items</small>
                            <span class="font-weight-bold text-dark" style="font-size: 1.15rem;">{{ $totalBlogs + $totalProducts + $totalFaqs }}</span>
                        </div>
                        <div class="col-6 border-left">
                            <small class="text-muted text-uppercase d-block" style="font-size: 0.72rem; font-weight: 700;">Engagement</small>
                            <span class="font-weight-bold text-dark" style="font-size: 1.15rem;">{{ $totalContacts + $totalNewsletters }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Tables / Activity Section -->
    <div class="row g-3">
        <!-- Recent Inquiries Table -->
        <div class="col-lg-7 mb-3 mb-lg-0">
            <div class="card-modern h-100">
                <div class="card-modern-header">
                    <h3 class="card-modern-title">
                        <i class="fa-solid fa-inbox text-warning"></i>
                        Recent Contact Inquiries
                    </h3>
                    <a href="{{ route('admin.contact-us.index') }}" class="btn btn-sm btn-outline-primary" style="border-radius: 8px; font-weight: 600;">
                        View All ({{ $totalContacts }})
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-modern">
                        <thead>
                            <tr>
                                <th>Contact / Sender</th>
                                <th>Message Details</th>
                                <th>Date</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentContacts as $contact)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-circle">
                                                {{ strtoupper(substr($contact->name ?? 'U', 0, 2)) }}
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div class="font-weight-bold text-dark" style="font-size: 0.9rem;">
                                                    {{ $contact->name ?? 'Anonymous' }}
                                                </div>
                                                <small class="text-muted" style="font-size: 0.78rem;">
                                                    {{ $contact->email ?? 'No email' }}
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-truncate" style="max-width: 220px; font-weight: 500;" title="{{ $contact->message ?? $contact->subject }}">
                                            {{ $contact->subject ?? Str::limit($contact->message, 40) }}
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted" style="font-size: 0.8rem; white-space: nowrap;">
                                            {{ $contact->created_at ? $contact->created_at->diffForHumans() : 'Recently' }}
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('admin.contact-us.index') }}" class="btn btn-xs btn-light border" style="border-radius: 6px; padding: 4px 8px;" title="View in Contact List">
                                            <i class="fa-solid fa-eye text-muted"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">
                                        <i class="fa-regular fa-envelope-open d-block mb-2 text-secondary" style="font-size: 2rem;"></i>
                                        No recent inquiries received yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recent Blog Posts -->
        <div class="col-lg-5">
            <div class="card-modern h-100">
                <div class="card-modern-header">
                    <h3 class="card-modern-title">
                        <i class="fa-solid fa-pen-nib text-info"></i>
                        Latest Blog Posts
                    </h3>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-sm btn-outline-primary" style="border-radius: 8px; font-weight: 600;">
                        Manage Blogs
                    </a>
                </div>
                <div class="card-modern-body">
                    @forelse($recentBlogs as $blog)
                        <div class="blog-mini-item">
                            @if(isset($blog->blogImage) && !empty($blog->blogImage->first_image))
                                <img src="{{ asset('storage/' . $blog->blogImage->first_image) }}" alt="{{ $blog->title }}" class="blog-mini-thumb">
                            @else
                                <div class="blog-mini-thumb-empty">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                            @endif
                            <div class="flex-grow-1" style="min-width: 0;">
                                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="blog-mini-title text-decoration-none" title="{{ $blog->title }}">
                                    {{ $blog->title }}
                                </a>
                                <div class="blog-mini-meta">
                                    <span class="badge badge-soft-primary" style="font-size: 0.72rem;">
                                        {{ $blog->category ?? 'Blog' }}
                                    </span>
                                    <span>&bull;</span>
                                    <span>{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A' }}</span>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-xs btn-light border" style="border-radius: 6px; padding: 4px 8px;" title="Edit Post">
                                    <i class="fa-solid fa-pen text-primary" style="font-size: 0.75rem;"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-4 text-muted">
                            <i class="fa-regular fa-file-lines d-block mb-2 text-secondary" style="font-size: 2rem;"></i>
                            No blog posts created yet.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-area')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Line Chart: 6-Month Lead & Engagement Trend
        var trendCtx = document.getElementById('growthTrendChart');
        if (trendCtx) {
            var months = {!! json_encode($months) !!};
            var contactData = {!! json_encode($contactCounts) !!};
            var newsletterData = {!! json_encode($newsletterCounts) !!};

            new Chart(trendCtx.getContext('2d'), {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'Contact Inquiries',
                            data: contactData,
                            borderColor: '#2563eb',
                            backgroundColor: 'rgba(37, 99, 235, 0.08)',
                            borderWidth: 3,
                            fill: true,
                            tension: 0.35,
                            pointBackgroundColor: '#2563eb',
                            pointBorderColor: '#ffffff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            pointHoverRadius: 6
                        },
                        {
                            label: 'Subscribers',
                            data: newsletterData,
                            borderColor: '#8b5cf6',
                            backgroundColor: 'rgba(139, 92, 246, 0.08)',
                            borderWidth: 3,
                            fill: true,
                            tension: 0.35,
                            pointBackgroundColor: '#8b5cf6',
                            pointBorderColor: '#ffffff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            pointHoverRadius: 6
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            fontFamily: "'Source Sans Pro', sans-serif",
                            fontColor: '#475569',
                            boxWidth: 12,
                            usePointStyle: true,
                            padding: 16
                        }
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                fontColor: '#94a3b8',
                                fontSize: 11
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: '#f1f5f9',
                                zeroLineColor: '#e2e8f0',
                                drawBorder: false
                            },
                            ticks: {
                                beginAtZero: true,
                                stepSize: 1,
                                fontColor: '#94a3b8',
                                fontSize: 11
                            }
                        }]
                    },
                    tooltips: {
                        backgroundColor: '#0f172a',
                        titleFontFamily: "'Source Sans Pro', sans-serif",
                        bodyFontFamily: "'Source Sans Pro', sans-serif",
                        titleFontSize: 12,
                        bodyFontSize: 12,
                        xPadding: 12,
                        yPadding: 10,
                        cornerRadius: 8,
                        displayColors: false
                    }
                }
            });
        }

        // Doughnut Chart: Content Distribution
        var distCtx = document.getElementById('contentDistributionChart');
        if (distCtx) {
            new Chart(distCtx.getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: ['Blogs', 'Products', 'Team', 'Testimonials', 'Plans', 'FAQs'],
                    datasets: [{
                        data: [
                            {{ $totalBlogs }},
                            {{ $totalProducts }},
                            {{ $totalTeams }},
                            {{ $totalTestimonials }},
                            {{ $totalPricePlans }},
                            {{ $totalFaqs }}
                        ],
                        backgroundColor: [
                            '#2563eb', // Blue
                            '#10b981', // Emerald
                            '#06b6d4', // Cyan
                            '#f43f5e', // Rose
                            '#8b5cf6', // Violet
                            '#f59e0b'  // Amber
                        ],
                        borderWidth: 3,
                        borderColor: '#ffffff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutoutPercentage: 70,
                    legend: {
                        position: 'bottom',
                        labels: {
                            fontFamily: "'Source Sans Pro', sans-serif",
                            fontColor: '#475569',
                            boxWidth: 10,
                            usePointStyle: true,
                            padding: 12,
                            fontSize: 11
                        }
                    },
                    tooltips: {
                        backgroundColor: '#0f172a',
                        cornerRadius: 8,
                        xPadding: 10,
                        yPadding: 8
                    }
                }
            });
        }
    });
</script>
@endsection

