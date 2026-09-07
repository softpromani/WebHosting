@extends('home.includes.layout')

@section('title', !empty($blog->meta_title) ? $blog->meta_title : $blog->title . ' | Mounteko Blog')
@section('meta-keyword', !empty($blog->focus_keywords) ? $blog->focus_keywords : (!empty($blog->tags) ? $blog->tags : 'managed IT services, cybersecurity, cloud infrastructure, AI automation, network solutions, Mounteko'))
@section('meta-description', !empty($blog->meta_description) ? $blog->meta_description : Str::limit(strip_tags($blog->description), 160))

@section('content')

    <!-- Theme Styles for Dark & Light Mode Toggle -->
    <style>
        /* Smooth theme transition */
        .blog-theme-container,
        .blog-theme-container * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        /* --- DARK THEME (BY DEFAULT - MATCHING USER SCREENSHOT) --- */
        .blog-theme-container.theme-dark {
            background-color: #000000 !important;
            color: #cbd5e1;
        }
        .blog-theme-container.theme-dark .blog-hero-section {
            position: relative;
            padding: 70px 0 65px 0;
            background: #021f11;
            background-image: linear-gradient(rgba(0, 20, 10, 0.8), rgba(0, 20, 10, 0.9)), url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=1920') !important;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            text-align: center;
            border-bottom: 2px solid #064e3b;
        }
        .blog-theme-container.theme-dark .blog-hero-title {
            color: #ffffff !important;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.35;
            max-width: 880px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 14px;
            letter-spacing: -0.5px;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.8);
        }
        .blog-theme-container.theme-dark .blog-hero-breadcrumbs {
            font-size: 14px;
            color: #a7f3d0;
            font-weight: 600;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }
        .blog-theme-container.theme-dark .blog-hero-breadcrumbs a {
            color: #ffffff !important;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .blog-theme-container.theme-dark .blog-hero-breadcrumbs a:hover {
            color: #10b981 !important;
        }
        .blog-theme-container.theme-dark .blog-hero-breadcrumbs .separator {
            color: #059669;
            font-size: 11px;
        }
        .blog-theme-container.theme-dark .blog-hero-breadcrumbs .current {
            color: #a7f3d0 !important;
        }
        .blog-theme-container.theme-dark .single-blog-detail-section {
            background-color: #000000 !important;
        }
        .blog-theme-container.theme-dark .single-article-wrapper {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
            padding: 0 !important;
        }
        .blog-theme-container.theme-dark .single-article-heading {
            color: #ffffff !important;
        }
        /* --- Dark Theme Article Meta Bar --- */
        .blog-theme-container.theme-dark .article-meta-bar {
            color: #cbd5e1 !important;
        }
        .blog-theme-container.theme-dark .article-meta-bar .meta-item,
        .blog-theme-container.theme-dark .article-meta-bar .meta-item * {
            color: #cbd5e1 !important;
        }
        .blog-theme-container.theme-dark .article-meta-bar .meta-date,
        .blog-theme-container.theme-dark .article-meta-bar .meta-date * {
            color: #34d399 !important;
        }
        .blog-theme-container.theme-dark .article-meta-bar .meta-separator {
            color: #10b981 !important;
            font-weight: 700;
        }
        .blog-theme-container.theme-dark .category-badge {
            background-color: #021f11 !important;
            color: #10b981 !important;
            border: 1.5px solid #10b981 !important;
        }
        .blog-theme-container.theme-dark .blog-tags-wrapper {
            color: #cbd5e1 !important;
        }
        .blog-theme-container.theme-dark .text-muted {
            color: #cbd5e1 !important;
        }
        /* --- DARK THEME TEXT & INLINE STYLES OVERRIDE (CKEditor HTML Content) --- */
        .blog-theme-container.theme-dark .single-article-body,
        .blog-theme-container.theme-dark .single-article-body * {
            color: #cbd5e1;
        }
        .blog-theme-container.theme-dark .single-article-body p,
        .blog-theme-container.theme-dark .single-article-body span,
        .blog-theme-container.theme-dark .single-article-body div,
        .blog-theme-container.theme-dark .single-article-body li,
        .blog-theme-container.theme-dark .single-article-body ul,
        .blog-theme-container.theme-dark .single-article-body ol,
        .blog-theme-container.theme-dark .single-article-body em,
        .blog-theme-container.theme-dark .single-article-body i,
        .blog-theme-container.theme-dark .single-article-body u,
        .blog-theme-container.theme-dark .single-article-body font,
        .blog-theme-container.theme-dark .single-article-body label {
            color: #cbd5e1 !important;
            background-color: transparent !important;
        }
        .blog-theme-container.theme-dark .single-article-body h1,
        .blog-theme-container.theme-dark .single-article-body h2,
        .blog-theme-container.theme-dark .single-article-body h3,
        .blog-theme-container.theme-dark .single-article-body h4,
        .blog-theme-container.theme-dark .single-article-body h5,
        .blog-theme-container.theme-dark .single-article-body h6,
        .blog-theme-container.theme-dark .single-article-body h1 *,
        .blog-theme-container.theme-dark .single-article-body h2 *,
        .blog-theme-container.theme-dark .single-article-body h3 *,
        .blog-theme-container.theme-dark .single-article-body h4 *,
        .blog-theme-container.theme-dark .single-article-body h5 *,
        .blog-theme-container.theme-dark .single-article-body h6 *,
        .blog-theme-container.theme-dark .single-article-body strong,
        .blog-theme-container.theme-dark .single-article-body b,
        .blog-theme-container.theme-dark .single-article-body strong *,
        .blog-theme-container.theme-dark .single-article-body b * {
            color: #ffffff !important;
        }
        .blog-theme-container.theme-dark .single-article-body h2 {
            border-left: 3px solid #10b981;
            padding-left: 12px;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        .blog-theme-container.theme-dark .single-article-body a,
        .blog-theme-container.theme-dark .single-article-body a * {
            color: #10b981 !important;
            text-decoration: underline;
        }
        .blog-theme-container.theme-dark .single-article-body a:hover,
        .blog-theme-container.theme-dark .single-article-body a:hover * {
            color: #34d399 !important;
        }
        .blog-theme-container.theme-dark .single-article-body blockquote,
        .blog-theme-container.theme-dark .single-article-body blockquote * {
            background-color: #05140d !important;
            border-left: 4px solid #10b981 !important;
            color: #e2e8f0 !important;
        }

        /* --- DARK THEME TABLES (CKEditor & Custom Markdown) --- */
        .blog-theme-container.theme-dark .single-article-body figure.table {
            width: 100% !important;
            margin: 28px 0 !important;
            overflow-x: auto;
        }
        .blog-theme-container.theme-dark .single-article-body table {
            width: 100% !important;
            border-collapse: separate !important;
            border-spacing: 0 !important;
            background-color: #030d07 !important;
            border: 1.5px solid #064e3b !important;
            border-radius: 12px !important;
            overflow: hidden !important;
            margin: 25px 0 !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6), 0 0 15px rgba(16, 185, 129, 0.08) !important;
        }
        .blog-theme-container.theme-dark .single-article-body table thead,
        .blog-theme-container.theme-dark .single-article-body table th,
        .blog-theme-container.theme-dark .single-article-body table tr:first-child th,
        .blog-theme-container.theme-dark .single-article-body table thead th {
            background: linear-gradient(135deg, #022c22 0%, #064e3b 100%) !important;
            background-color: #064e3b !important;
            color: #ffffff !important;
            font-weight: 700 !important;
            font-size: 15px !important;
            padding: 14px 18px !important;
            border-bottom: 2px solid #10b981 !important;
            border-right: 1px solid rgba(16, 185, 129, 0.25) !important;
            border-top: none !important;
            border-left: none !important;
            text-align: left !important;
            letter-spacing: 0.2px;
        }
        .blog-theme-container.theme-dark .single-article-body table th strong,
        .blog-theme-container.theme-dark .single-article-body table th b,
        .blog-theme-container.theme-dark .single-article-body table th p {
            color: #ffffff !important;
            margin: 0 !important;
            font-weight: 700 !important;
        }
        .blog-theme-container.theme-dark .single-article-body table td {
            background-color: #020b06 !important;
            color: #cbd5e1 !important;
            padding: 13px 18px !important;
            font-size: 14.5px !important;
            border-bottom: 1px solid rgba(16, 185, 129, 0.15) !important;
            border-right: 1px solid rgba(16, 185, 129, 0.12) !important;
            border-top: none !important;
            border-left: none !important;
            line-height: 1.65 !important;
        }
        .blog-theme-container.theme-dark .single-article-body table td p {
            margin-bottom: 0 !important;
            color: #cbd5e1 !important;
        }
        .blog-theme-container.theme-dark .single-article-body table tbody tr:nth-child(even) td {
            background-color: #05140b !important;
        }
        .blog-theme-container.theme-dark .single-article-body table tbody tr:hover td,
        .blog-theme-container.theme-dark .single-article-body table tbody tr:hover th,
        .blog-theme-container.theme-dark .single-article-body table tbody tr:hover > *,
        .blog-theme-container.theme-dark .single-article-body table.table-hover > tbody > tr:hover > * {
            background-color: #0c2b1e !important;
            color: #34d399 !important;
            --bs-table-hover-bg: #0c2b1e !important;
            --bs-table-hover-color: #34d399 !important;
            --bs-table-accent-bg: transparent !important;
        }
        .blog-theme-container.theme-dark .single-article-body table tbody tr:hover td p,
        .blog-theme-container.theme-dark .single-article-body table tbody tr:hover td strong,
        .blog-theme-container.theme-dark .single-article-body table tbody tr:hover td b,
        .blog-theme-container.theme-dark .single-article-body table tbody tr:hover td span {
            color: #34d399 !important;
        }
        .blog-theme-container.theme-dark .single-article-body table tr:last-child td {
            border-bottom: none !important;
        }
        .blog-theme-container.theme-dark .single-article-body table tr td:last-child,
        .blog-theme-container.theme-dark .single-article-body table tr th:last-child {
            border-right: none !important;
        }

        .blog-theme-container.theme-dark .sidebar-box {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
            padding: 0 !important;
            margin-bottom: 35px !important;
        }
        .blog-theme-container.theme-dark .sidebar-box-title {
            color: #ffffff !important;
            position: relative;
            padding-bottom: 8px;
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 20px;
        }
        .blog-theme-container.theme-dark .sidebar-box-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 32px;
            height: 2px;
            background-color: #10b981;
        }
        .blog-theme-container.theme-dark .sidebar-search-box {
            background-color: #000000 !important;
            border: 1.5px solid #10b981 !important;
            border-radius: 50px !important;
            padding: 5px 8px 5px 20px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            height: 50px;
        }
        .blog-theme-container.theme-dark .sidebar-search-box input {
            background: transparent !important;
            border: none !important;
            color: #ffffff !important;
            font-size: 14px;
            outline: none !important;
            width: 100%;
        }
        .blog-theme-container.theme-dark .sidebar-search-box input::placeholder {
            color: #64748b !important;
        }
        .blog-theme-container.theme-dark .sidebar-search-box button {
            background-color: #10b981 !important;
            color: #000000 !important;
            border: none !important;
            border-radius: 50% !important;
            width: 38px !important;
            height: 38px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            flex-shrink: 0;
        }
        .blog-theme-container.theme-dark .category-pill-item {
            background-color: #000000 !important;
            border: 1.5px solid #10b981 !important;
            color: #ffffff !important;
            border-radius: 50px !important;
            min-height: 48px;
            padding: 10px 20px !important;
            font-size: 14px !important;
            font-weight: 700 !important;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
        }
        .blog-theme-container.theme-dark .category-pill-item:hover {
            background-color: rgba(16, 185, 129, 0.15) !important;
            border-color: #34d399 !important;
            transform: translateX(4px);
        }
        .blog-theme-container.theme-dark .category-pill-badge {
            background-color: #10b981 !important;
            color: #000000 !important;
            font-weight: 800 !important;
            width: 28px !important;
            height: 28px !important;
            border-radius: 50% !important;
            font-size: 12px !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* --- Related Articles Card Styling (Dark Theme) --- */
        .related-article-card {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none !important;
            padding: 8px 10px;
            border-radius: 12px;
            transition: all 0.25s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
        }
        .related-article-card:last-child {
            border-bottom: none !important;
        }
        .related-article-thumb {
            width: 64px;
            height: 52px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
            position: relative;
            background: #000000;
        }
        .related-article-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .related-article-card:hover .related-article-thumb img {
            transform: scale(1.08);
        }
        .related-item-title {
            font-size: 13px;
            font-weight: 600;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            word-break: break-word;
            transition: color 0.2s ease;
        }
        .related-item-meta {
            font-size: 11.5px;
        }
        .blog-theme-container.theme-dark .related-article-card {
            background: transparent;
        }
        .blog-theme-container.theme-dark .related-article-card:hover {
            background: rgba(16, 185, 129, 0.12) !important;
        }
        .blog-theme-container.theme-dark .related-article-thumb {
            border: 1px solid rgba(16, 185, 129, 0.35);
        }
        .blog-theme-container.theme-dark .related-item-title {
            color: #f8fafc !important;
        }
        .blog-theme-container.theme-dark .related-article-card:hover .related-item-title {
            color: #34d399 !important;
        }
        .blog-theme-container.theme-dark .popular-tag-badge {
            background-color: #000000 !important;
            border: 1.5px solid #10b981 !important;
            color: #ffffff !important;
            border-radius: 50px !important;
            min-height: 36px;
            display: inline-flex;
            align-items: center;
            padding: 8px 18px !important;
            font-size: 13px !important;
            font-weight: 600 !important;
        }
        .blog-theme-container.theme-dark .popular-tag-badge:hover {
            background-color: #10b981 !important;
            color: #000000 !important;
            transform: translateY(-2px);
        }

        /* --- LIGHT THEME --- */
        .blog-theme-container.theme-light {
            background-color: #f8fafc !important;
            color: #334155;
        }
        .blog-theme-container.theme-light .blog-hero-section {
            position: relative;
            padding: 70px 0 65px 0;
            background: #021f11;
            background-image: linear-gradient(rgba(0, 20, 10, 0.8), rgba(0, 20, 10, 0.9)), url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=1920') !important;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            text-align: center;
            border-bottom: 2px solid #064e3b;
        }
        .blog-theme-container.theme-light .blog-hero-title {
            color: #ffffff !important;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.35;
            max-width: 880px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 14px;
            letter-spacing: -0.5px;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.8);
        }
        .blog-theme-container.theme-light .blog-hero-breadcrumbs {
            font-size: 14px;
            color: #a7f3d0;
            font-weight: 600;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }
        .blog-theme-container.theme-light .blog-hero-breadcrumbs a {
            color: #ffffff !important;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .blog-theme-container.theme-light .blog-hero-breadcrumbs a:hover {
            color: #10b981 !important;
        }
        .blog-theme-container.theme-light .blog-hero-breadcrumbs .separator {
            color: #059669;
            font-size: 11px;
        }
        .blog-theme-container.theme-light .blog-hero-breadcrumbs .current {
            color: #a7f3d0 !important;
        }
        .blog-theme-container.theme-light .single-blog-detail-section {
            background-color: #f8fafc !important;
        }
        .blog-theme-container.theme-light .single-article-wrapper {
            background-color: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05) !important;
            padding: 24px !important;
            border-radius: 16px;
        }
        .blog-theme-container.theme-light .single-article-heading {
            color: #0f172a !important;
        }
        /* --- Light Theme Article Meta Bar --- */
        .blog-theme-container.theme-light .article-meta-bar {
            color: #64748b !important;
        }
        .blog-theme-container.theme-light .article-meta-bar .meta-item,
        .blog-theme-container.theme-light .article-meta-bar .meta-item * {
            color: #475569 !important;
        }
        .blog-theme-container.theme-light .article-meta-bar .meta-date,
        .blog-theme-container.theme-light .article-meta-bar .meta-date * {
            color: #059669 !important;
        }
        .blog-theme-container.theme-light .article-meta-bar .meta-separator {
            color: #cbd5e1 !important;
            font-weight: 700;
        }
        .blog-theme-container.theme-light .category-badge {
            background-color: #ecfdf5 !important;
            color: #059669 !important;
            border: 1.5px solid #10b981 !important;
        }
        /* --- LIGHT THEME TEXT & INLINE STYLES (CKEditor HTML Content) --- */
        .blog-theme-container.theme-light .single-article-body,
        .blog-theme-container.theme-light .single-article-body * {
            color: #334155;
        }
        .blog-theme-container.theme-light .single-article-body p,
        .blog-theme-container.theme-light .single-article-body span,
        .blog-theme-container.theme-light .single-article-body div,
        .blog-theme-container.theme-light .single-article-body li,
        .blog-theme-container.theme-light .single-article-body ul,
        .blog-theme-container.theme-light .single-article-body ol,
        .blog-theme-container.theme-light .single-article-body em,
        .blog-theme-container.theme-light .single-article-body i,
        .blog-theme-container.theme-light .single-article-body u,
        .blog-theme-container.theme-light .single-article-body font,
        .blog-theme-container.theme-light .single-article-body label {
            color: #334155 !important;
            background-color: transparent !important;
        }
        .blog-theme-container.theme-light .single-article-body h1,
        .blog-theme-container.theme-light .single-article-body h2,
        .blog-theme-container.theme-light .single-article-body h3,
        .blog-theme-container.theme-light .single-article-body h4,
        .blog-theme-container.theme-light .single-article-body h5,
        .blog-theme-container.theme-light .single-article-body h6,
        .blog-theme-container.theme-light .single-article-body h1 *,
        .blog-theme-container.theme-light .single-article-body h2 *,
        .blog-theme-container.theme-light .single-article-body h3 *,
        .blog-theme-container.theme-light .single-article-body h4 *,
        .blog-theme-container.theme-light .single-article-body h5 *,
        .blog-theme-container.theme-light .single-article-body h6 *,
        .blog-theme-container.theme-light .single-article-body strong,
        .blog-theme-container.theme-light .single-article-body b,
        .blog-theme-container.theme-light .single-article-body strong *,
        .blog-theme-container.theme-light .single-article-body b * {
            color: #0f172a !important;
        }
        .blog-theme-container.theme-light .single-article-body h2 {
            border-left: 3px solid #10b981;
            padding-left: 12px;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        .blog-theme-container.theme-light .single-article-body a,
        .blog-theme-container.theme-light .single-article-body a * {
            color: #059669 !important;
            text-decoration: underline;
        }
        .blog-theme-container.theme-light .single-article-body a:hover,
        .blog-theme-container.theme-light .single-article-body a:hover * {
            color: #10b981 !important;
        }

        /* --- LIGHT THEME TABLES --- */
        .blog-theme-container.theme-light .single-article-body figure.table {
            width: 100% !important;
            margin: 28px 0 !important;
            overflow-x: auto;
        }
        .blog-theme-container.theme-light .single-article-body table {
            width: 100% !important;
            border-collapse: separate !important;
            border-spacing: 0 !important;
            background-color: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 12px !important;
            overflow: hidden !important;
            margin: 25px 0 !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04) !important;
        }
        .blog-theme-container.theme-light .single-article-body table thead,
        .blog-theme-container.theme-light .single-article-body table th,
        .blog-theme-container.theme-light .single-article-body table tr:first-child th,
        .blog-theme-container.theme-light .single-article-body table thead th {
            background-color: #f1f5f9 !important;
            color: #0f172a !important;
            font-weight: 700 !important;
            font-size: 15px !important;
            padding: 14px 18px !important;
            border-bottom: 2px solid #cbd5e1 !important;
            border-right: 1px solid #e2e8f0 !important;
            border-top: none !important;
            border-left: none !important;
            text-align: left !important;
        }
        .blog-theme-container.theme-light .single-article-body table th strong,
        .blog-theme-container.theme-light .single-article-body table th b,
        .blog-theme-container.theme-light .single-article-body table th p {
            color: #0f172a !important;
            margin: 0 !important;
            font-weight: 700 !important;
        }
        .blog-theme-container.theme-light .single-article-body table td {
            background-color: #ffffff !important;
            color: #334155 !important;
            padding: 13px 18px !important;
            font-size: 14.5px !important;
            border-bottom: 1px solid #f1f5f9 !important;
            border-right: 1px solid #f1f5f9 !important;
            border-top: none !important;
            border-left: none !important;
            line-height: 1.65 !important;
        }
        .blog-theme-container.theme-light .single-article-body table td p {
            margin-bottom: 0 !important;
            color: #334155 !important;
        }
        .blog-theme-container.theme-light .single-article-body table tbody tr:nth-child(even) td {
            background-color: #f8fafc !important;
        }
        .blog-theme-container.theme-light .single-article-body table tbody tr:hover td,
        .blog-theme-container.theme-light .single-article-body table tbody tr:hover th,
        .blog-theme-container.theme-light .single-article-body table tbody tr:hover > *,
        .blog-theme-container.theme-light .single-article-body table.table-hover > tbody > tr:hover > * {
            background-color: #ecfdf5 !important;
            color: #065f46 !important;
            --bs-table-hover-bg: #ecfdf5 !important;
            --bs-table-hover-color: #065f46 !important;
            --bs-table-accent-bg: transparent !important;
        }
        .blog-theme-container.theme-light .single-article-body table tbody tr:hover td p,
        .blog-theme-container.theme-light .single-article-body table tbody tr:hover td strong,
        .blog-theme-container.theme-light .single-article-body table tbody tr:hover td b,
        .blog-theme-container.theme-light .single-article-body table tbody tr:hover td span {
            color: #065f46 !important;
        }
        .blog-theme-container.theme-light .single-article-body table tr:last-child td {
            border-bottom: none !important;
        }
        .blog-theme-container.theme-light .single-article-body table tr td:last-child,
        .blog-theme-container.theme-light .single-article-body table tr th:last-child {
            border-right: none !important;
        }

        .blog-theme-container.theme-light .sidebar-box {
            background-color: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04) !important;
            border-radius: 16px;
            padding: 22px 20px;
            margin-bottom: 24px;
        }
        .blog-theme-container.theme-light .sidebar-box-title {
            color: #0f172a !important;
            position: relative;
            padding-bottom: 8px;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 18px;
        }
        .blog-theme-container.theme-light .sidebar-box-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 32px;
            height: 2px;
            background-color: #10b981;
        }
        .blog-theme-container.theme-light .sidebar-search-box {
            background-color: #f8fafc !important;
            border: 1px solid #cbd5e1 !important;
            border-radius: 50px !important;
            padding: 5px 8px 5px 18px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            height: 48px;
        }
        .blog-theme-container.theme-light .sidebar-search-box input {
            background: transparent !important;
            border: none !important;
            color: #0f172a !important;
            font-size: 14px;
            outline: none !important;
            width: 100%;
        }
        .blog-theme-container.theme-light .sidebar-search-box button {
            background-color: #10b981 !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 50% !important;
            width: 36px !important;
            height: 36px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            flex-shrink: 0;
        }
        .blog-theme-container.theme-light .category-pill-item {
            background-color: #f8fafc !important;
            border: 1px solid #e2e8f0 !important;
            color: #334155 !important;
            min-height: 48px;
            padding: 10px 18px !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .blog-theme-container.theme-light .category-pill-item:hover {
            background-color: #ecfdf5 !important;
            border-color: #10b981 !important;
            color: #059669 !important;
            transform: translateX(4px);
        }
        .blog-theme-container.theme-light .category-pill-badge {
            background-color: #dcfce7 !important;
            color: #166534 !important;
            font-weight: 700 !important;
            width: 28px !important;
            height: 28px !important;
            font-size: 12px !important;
            border-radius: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* --- Related Articles Card Styling (Light Theme) --- */
        .blog-theme-container.theme-light .related-article-card {
            background: transparent;
            border-bottom: 1px solid #e2e8f0 !important;
        }
        .blog-theme-container.theme-light .related-article-card:hover {
            background: #f1f5f9 !important;
        }
        .blog-theme-container.theme-light .related-article-thumb {
            border: 1px solid #e2e8f0;
        }
        .blog-theme-container.theme-light .related-item-title {
            color: #0f172a !important;
        }
        .blog-theme-container.theme-light .related-article-card:hover .related-item-title {
            color: #059669 !important;
        }
        .blog-theme-container.theme-light .popular-tag-badge {
            background-color: #f1f5f9 !important;
            border: 1px solid #e2e8f0 !important;
            color: #475569 !important;
            min-height: 36px;
            display: inline-flex;
            align-items: center;
            padding: 8px 16px !important;
            font-size: 13px !important;
            font-weight: 600 !important;
        }
        .blog-theme-container.theme-light .popular-tag-badge:hover {
            background-color: #10b981 !important;
            color: #ffffff !important;
            border-color: #10b981 !important;
            transform: translateY(-2px);
        }

        /* --- PERFECT HORIZONTAL ALIGNMENT (LEFT & RIGHT SIDE LEVEL) --- */
        .single-blog-detail-section .row {
            align-items: flex-start !important;
        }
        .single-article-wrapper {
            margin-top: 0 !important;
        }
        .single-blog-sidebar {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        .single-blog-sidebar .sidebar-box:first-child {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        .single-article-featured-img:first-child {
            margin-top: 0 !important;
        }
        .sidebar-box-title:first-child {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }

        /* --- FLOATING THEME TOGGLE SWITCH ON SIDE --- */
        .blog-theme-floating-toggle {
            position: fixed;
            right: 25px;
            bottom: 40px;
            z-index: 1050;
            display: flex;
            align-items: center;
            gap: 8px;
            background: #05160e;
            color: #ffffff;
            border: 2px solid #10b981;
            padding: 8px 18px;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4), 0 0 15px rgba(16, 185, 129, 0.3);
            cursor: pointer;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .blog-theme-floating-toggle:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5), 0 0 20px rgba(16, 185, 129, 0.5);
            color: #10b981;
        }
        .blog-theme-floating-toggle .toggle-icon {
            font-size: 18px;
            color: #10b981;
            transition: transform 0.4s ease;
        }
        .blog-theme-floating-toggle:hover .toggle-icon {
            transform: rotate(30deg);
        }

        @media (max-width: 768px) {
            .blog-hero-title {
                font-size: 22px !important;
            }
            .blog-hero-section {
                padding: 45px 0 40px 0 !important;
            }
        }
    </style>

    <!-- Reading Progress Bar (Top of Screen) -->
    <div id="readingProgressBar" style="position: fixed; top: 0; left: 0; height: 3.5px; background: linear-gradient(90deg, #10b981, #34d399); width: 0%; z-index: 9999; transition: width 0.1s ease;"></div>

    <!-- Theme Wrapper Container (Default: theme-dark) -->
    <div id="blogThemeWrapper" class="blog-theme-container theme-dark">

        <!-- Single Blog Hero Section (Full Rich Banner) -->
        <section class="blog-hero-section">
            <div class="container text-center">
                <h1 class="blog-hero-title">{{ $blog->title }}</h1>
                <div class="blog-hero-breadcrumbs">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="separator"><i class="bi bi-arrow-right"></i></span>
                    <a href="{{ route('blog.index') }}">Blog</a>
                    <span class="separator"><i class="bi bi-arrow-right"></i></span>
                    <span class="current">{{ Str::limit($blog->title, 45) }}</span>
                </div>
            </div>
        </section>

        <!-- Single Blog Content Section -->
        <section class="single-blog-detail-section py-4 py-lg-5">
            <div class="container-fluid px-3 px-xl-4" style="max-width: 1680px;">
                <div class="row g-4 g-lg-5 align-items-start">

                    <!-- Main Article Column (Wide & Direct on Pitch Black) -->
                    <div class="col-lg-8 col-xl-9 col-xxl-9">
                        <article class="single-article-wrapper">

                            <!-- Featured Image -->
                            <div class="single-article-featured-img mb-4 overflow-hidden rounded-4 shadow">
                                <img src="{{ $blog->image_url }}" class="img-fluid w-100" alt="{{ $blog->title }}"
                                    style="max-height: 520px; object-fit: cover;">
                            </div>

                            <!-- Article Meta -->
                            <div class="article-meta-bar d-flex flex-wrap align-items-center gap-3 mb-3 pb-3 border-bottom"
                                style="font-size: 13.5px; border-color: rgba(16, 185, 129, 0.25) !important;">
                                <span class="badge px-3 py-1 rounded-pill category-badge">
                                    <i class="bi bi-folder2-open me-1"></i> {{ $blog->category_name }}
                                </span>
                                <span class="meta-item meta-date d-flex align-items-center fw-semibold">
                                    <i class="bi bi-calendar3 me-1 text-success"></i> {{ $blog->formatted_date }}
                                </span>
                                <span class="meta-separator">•</span>
                                <span class="meta-item meta-readtime d-flex align-items-center">
                                    <i class="bi bi-clock me-1 text-success"></i> {{ $blog->reading_time }}
                                </span>
                                <span class="meta-separator">•</span>
                                <span class="meta-item meta-author d-flex align-items-center">
                                    <i class="bi bi-person-check me-1 text-success"></i> Mounteko Editorial Team
                                </span>
                            </div>

                            <!-- Article Title -->
                            <h1 class="single-article-heading fw-bold mb-3"
                                style="font-size: 34px; line-height: 1.3; letter-spacing: -0.01em;">
                                {{ $blog->title }}
                            </h1>

                            <!-- Article Body Content -->
                            <div class="single-article-body" style="font-size: 16px; line-height: 1.85;">
                                {!! $blog->description !!}
                            </div>

                            <!-- Tags Section for SEO & Navigation -->
                            @if(!empty($blog->tags_array) && count($blog->tags_array) > 0)
                                <div class="blog-tags-wrapper mt-4 pt-3 border-top" style="border-color: rgba(16, 185, 129, 0.25) !important;">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <span class="fw-semibold me-1"><i class="bi bi-tags text-success me-1"></i> Tags:</span>
                                        @foreach($blog->tags_array as $tag)
                                            <a href="{{ route('blog.index', ['search' => $tag]) }}" 
                                               class="badge rounded-pill text-decoration-none popular-tag-badge"
                                               style="font-size: 13px; font-weight: 600; padding: 7px 16px;">
                                                #{{ $tag }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Article Footer & Navigation -->
                            <div class="mt-4 pt-4 border-top d-flex flex-wrap justify-content-between align-items-center gap-3" style="border-color: rgba(16, 185, 129, 0.25) !important;">
                                <a href="{{ route('blog.index') }}" class="btn rounded-pill px-4 fw-semibold"
                                   style="background-color: transparent; color: #10b981; border: 1.5px solid #10b981; transition: all 0.3s ease;">
                                    <i class="bi bi-arrow-left me-1"></i> Back to All Articles
                                </a>

                                <div class="d-flex align-items-center gap-2">
                                    <span class="text-muted fw-semibold" style="font-size: 14px;">Share:</span>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                                        target="_blank" rel="noopener" class="btn btn-sm rounded-circle shadow-sm popular-tag-badge d-flex align-items-center justify-content-center"
                                        style="width: 38px; height: 38px; padding: 0 !important;" aria-label="Share on X">
                                        <i class="bi bi-twitter-x"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                                        target="_blank" rel="noopener" class="btn btn-sm rounded-circle shadow-sm popular-tag-badge d-flex align-items-center justify-content-center"
                                        style="width: 38px; height: 38px; padding: 0 !important;" aria-label="Share on LinkedIn">
                                        <i class="bi bi-linkedin text-primary"></i>
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                        target="_blank" rel="noopener" class="btn btn-sm rounded-circle shadow-sm popular-tag-badge d-flex align-items-center justify-content-center"
                                        style="width: 38px; height: 38px; padding: 0 !important;" aria-label="Share on Facebook">
                                        <i class="bi bi-facebook text-primary"></i>
                                    </a>
                                </div>
                            </div>

                        </article>
                    </div>

                    <!-- Sidebar Column (Direct Clean Widgets with Sticky Scrolling) -->
                    <div class="col-lg-4 col-xl-3 col-xxl-3">
                        <aside class="single-blog-sidebar">

                            <!-- Search Widget -->
                            <div class="sidebar-box mb-4">
                                <h4 class="sidebar-box-title fw-bold">Search</h4>
                                <form action="{{ route('blog.index') }}" method="GET" class="sidebar-search-box">
                                    <input type="text" name="search" placeholder="Search here..." required>
                                    <button type="submit" aria-label="Search">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Categories Widget -->
                            @if (!empty($categoriesList) && count($categoriesList) > 0)
                                <div class="sidebar-box mb-4">
                                    <h4 class="sidebar-box-title fw-bold">Categories</h4>
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-1">
                                        @foreach ($categoriesList as $catName => $count)
                                            <li>
                                                <a href="{{ route('blog.index', ['category' => $catName]) }}" 
                                                   class="text-decoration-none category-pill-item"
                                                   style="transition: all 0.25s ease;">
                                                    <span class="text-truncate me-2" style="max-width: 75%;">{{ $catName }}</span>
                                                    <span class="category-pill-badge flex-shrink-0">{{ $count }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Popular Tags Cloud -->
                            @if(!empty($popularTags) && count($popularTags) > 0)
                                <div class="sidebar-box mb-4">
                                    <h4 class="sidebar-box-title fw-bold">Popular Tag</h4>
                                    <div class="d-flex flex-wrap gap-2 pt-1">
                                        @foreach ($popularTags as $popTag)
                                            <a href="{{ route('blog.index', ['search' => $popTag]) }}" 
                                                class="badge rounded-pill text-decoration-none popular-tag-badge"
                                                style="letter-spacing: 0.2px; transition: all 0.25s ease;">
                                                #{{ $popTag }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Related Articles Widget -->
                            @if (isset($relatedblogs) && $relatedblogs->count() > 0)
                                <div class="sidebar-box mb-4">
                                    <h4 class="sidebar-box-title fw-bold">Related Articles</h4>
                                    <div class="related-articles-list d-flex flex-column gap-1">
                                        @foreach ($relatedblogs as $related)
                                            <a href="{{ route('single-blog', $related->slug) }}"
                                                class="related-article-card">
                                                <div class="related-article-thumb">
                                                    <img src="{{ $related->image_url }}" alt="{{ $related->title }}">
                                                </div>
                                                <div class="flex-grow-1 min-w-0">
                                                    <h6 class="mb-1 related-item-title">
                                                        {{ $related->title }}
                                                    </h6>
                                                    <div class="related-item-meta text-success">
                                                        <i class="bi bi-calendar3 me-1"></i> {{ $related->formatted_date }}
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- CTA Widget -->
                            <div class="sidebar-cta-card p-4 rounded-4 text-white text-center shadow-sm"
                                style="background: linear-gradient(135deg, #022c22 0%, #064e3b 100%); border: 1.5px solid rgba(16, 185, 129, 0.4);">
                                <div class="cta-icon mb-2" style="font-size: 30px; color: #10b981;">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold mb-2 text-white" style="font-size: 17px;">Ready to Scale?</h5>
                                <p class="text-white-50 mb-3" style="font-size: 12.5px; line-height: 1.45;">
                                    Get high-performance cloud hosting, automated security, and 24/7 dedicated support.
                                </p>
                                <a href="{{ route('contactUs') }}"
                                    class="btn btn-success rounded-pill px-3 py-2 w-100 fw-bold shadow-sm" style="font-size: 13.5px;">
                                    Talk to an Expert
                                </a>
                            </div>

                        </aside>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <!-- Floating Theme Switcher on Side (Fixed Bottom-Right) -->
    <div id="floatingThemeToggle" class="blog-theme-floating-toggle blog-theme-switch-btn" title="Click to toggle Dark/Light mode">
        <span class="toggle-icon theme-btn-icon"><i class="bi bi-moon-stars-fill"></i></span>
        <span class="theme-btn-text">Dark Mode</span>
    </div>

@endsection

@section('script-area')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var themeWrapper = document.getElementById('blogThemeWrapper');
            var switchButtons = document.querySelectorAll('.blog-theme-switch-btn');

            // 1. Theme Toggle
            var savedTheme = localStorage.getItem('mounteko_blog_theme') || 'dark';

            function applyTheme(theme) {
                if (theme === 'light') {
                    themeWrapper.classList.remove('theme-dark');
                    themeWrapper.classList.add('theme-light');
                    switchButtons.forEach(function(btn) {
                        btn.querySelector('.theme-btn-icon').innerHTML = '<i class="bi bi-sun-fill text-warning"></i>';
                        btn.querySelector('.theme-btn-text').textContent = 'Light Mode';
                    });
                } else {
                    themeWrapper.classList.remove('theme-light');
                    themeWrapper.classList.add('theme-dark');
                    switchButtons.forEach(function(btn) {
                        btn.querySelector('.theme-btn-icon').innerHTML = '<i class="bi bi-moon-stars-fill text-success"></i>';
                        btn.querySelector('.theme-btn-text').textContent = 'Dark Mode';
                    });
                }
                localStorage.setItem('mounteko_blog_theme', theme);
            }

            applyTheme(savedTheme);

            switchButtons.forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    var currentTheme = themeWrapper.classList.contains('theme-dark') ? 'dark' : 'light';
                    var newTheme = (currentTheme === 'dark') ? 'light' : 'dark';
                    applyTheme(newTheme);
                });
            });

            // 2. Reading Progress Indicator
            var progressBar = document.getElementById('readingProgressBar');
            window.addEventListener('scroll', function() {
                var totalHeight = document.documentElement.scrollHeight - window.innerHeight;
                if (totalHeight > 0) {
                    var progress = (window.scrollY / totalHeight) * 100;
                    if (progressBar) progressBar.style.width = Math.min(100, Math.max(0, progress)) + '%';
                }
            }, { passive: true });
        });
    </script>
@endsection
