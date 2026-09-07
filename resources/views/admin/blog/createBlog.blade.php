@extends('admin.includes.layout', ['breadcrumb_title' => 'Blog'])
@section('title', 'Blog')

@section('main-content')
    <style>
        .ck-editor__editable {
            min-height: 420px !important;
            max-height: 750px !important;
        }

        .ck.ck-toolbar {
            border-top-left-radius: 8px !important;
            border-top-right-radius: 8px !important;
            background-color: #f8fafc !important;
        }

        .ck.ck-editor__main>.ck-editor__editable {
            border-bottom-left-radius: 8px !important;
            border-bottom-right-radius: 8px !important;
        }

        /* Interactive Tag Badge Pills */
        .tag-input-container {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            min-height: 42px;
            cursor: text;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .tag-input-container:focus-within {
            border-color: #86b7fe !important;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
        }
        .tag-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #e0f2fe;
            color: #0369a1;
            border: 1px solid #bae6fd;
            border-radius: 50px;
            padding: 3px 10px;
            font-size: 12.5px;
            font-weight: 600;
            line-height: 1.3;
            transition: all 0.2s ease;
        }
        .tag-badge-pill:hover {
            background: #bae6fd;
            border-color: #7dd3fc;
        }
        .tag-badge-remove {
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: rgba(3, 105, 161, 0.15);
            color: #0369a1;
            font-size: 13px;
            font-weight: 800;
            transition: all 0.15s ease;
            line-height: 1;
        }
        .tag-badge-remove:hover {
            background: #ef4444;
            color: #ffffff;
            transform: scale(1.15);
        }
        .keyword-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
            border-radius: 50px;
            padding: 3px 10px;
            font-size: 12.5px;
            font-weight: 600;
            line-height: 1.3;
            transition: all 0.2s ease;
        }
        .keyword-badge-pill:hover {
            background: #d1fae5;
            border-color: #6ee7b7;
        }
        .keyword-badge-remove {
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: rgba(6, 95, 70, 0.15);
            color: #065f46;
            font-size: 13px;
            font-weight: 800;
            transition: all 0.15s ease;
            line-height: 1;
        }
        .keyword-badge-remove:hover {
            background: #ef4444;
            color: #ffffff;
            transform: scale(1.15);
        }
    </style>

    <form id="teamForm"
        action="{{ isset($editBlog) ? route('admin.blog.update', $editBlog->id) : route('admin.blog.store') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @if (isset($editBlog))
            @method('PUT')
        @endif
        <div class="card shadow-sm border-0">
            <div
                class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div>
                    <h4 class="card-title fw-bold mb-0 text-dark">{{ isset($editBlog) ? 'Edit Blog' : '+ Add New Blog' }}
                    </h4>
                    <small class="text-muted">Fill out general details, SEO metadata, and blog content below.</small>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <a class="btn btn-outline-secondary btn-sm px-3" href="{{ route('admin.blog.index') }}"><i
                            class="fa-solid fa-arrow-left me-1"></i> Back to List</a>
                    <button class="btn btn-primary btn-sm px-3 fw-semibold" type="submit">
                        <i class="fa-solid fa-cloud-arrow-up me-1"></i>
                        {{ isset($editBlog) ? 'Update Blog' : 'Publish Blog' }}
                    </button>
                </div>
            </div>

            <div class="card-body p-4">

                <!-- 1. General Fields (Side by Side in Grid) -->
                <div class="row g-3">
                    <div class="col-lg-6">
                        <label for="title" class="fw-bold">Blog Title <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" id="title" required
                                value="{{ old('title', isset($editBlog) ? $editBlog->title : '') }}"
                                placeholder="Enter blog title">
                        </div>
                        @error('title')
                            <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label for="slug" class="fw-bold">Custom URL Slug <small class="text-muted fw-normal">(e.g.
                                ransomware-protection-for-smbs)</small></label>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted">/blog/</span>
                                <input type="text" name="slug" class="form-control" id="slug"
                                    placeholder="custom-url-slug (auto-generated if empty)"
                                    value="{{ old('slug', isset($editBlog) ? $editBlog->slug : '') }}">
                            </div>
                        </div>
                        @error('slug')
                            <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label for="category" class="fw-bold">Category</label>
                        <div class="form-group">
                            <input type="text" list="categoryOptions" name="category" class="form-control" id="category"
                                placeholder="Select / type category"
                                value="{{ old('category', isset($editBlog) ? $editBlog->category : '') }}">
                            <datalist id="categoryOptions">
                                <option value="Security & Compliance">
                                <option value="Cloud Architecture">
                                <option value="Strategy & Roadmaps">
                                <option value="Design & Research">
                                <option value="Data & Governance">
                                <option value="Use Cases by Industry">
                                <option value="DevOps & Infrastructure">
                                <option value="AI & Automation">
                            </datalist>
                        </div>
                        @error('category')
                            <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label for="tagInputField" class="fw-bold d-flex align-items-center justify-content-between mb-1">
                            <span>Blog Tags <small class="text-muted fw-normal">(Cards & Pills)</small></span>
                            <span class="badge bg-light text-primary border" style="font-size: 10.5px;">Type + Comma (,)</span>
                        </label>
                        <div class="form-group">
                            <div class="tag-input-container d-flex flex-wrap align-items-center gap-1 p-2" id="tagInputWrapper">
                                <div id="tagBadgeList" class="d-flex flex-wrap align-items-center gap-1"></div>
                                <input type="text" id="tagInputField" class="border-0 p-0 flex-grow-1"
                                    placeholder="Type tag & press comma (,)..."
                                    style="outline: none; min-width: 130px; font-size: 13.5px; background: transparent;">
                                <input type="hidden" name="tags" id="tagsHiddenInput"
                                    value="{{ old('tags', isset($editBlog) ? $editBlog->tags : '') }}">
                            </div>
                            <small class="text-muted d-block mt-1" style="font-size: 11px;">
                                <i class="fa-solid fa-tags text-primary me-1"></i> Type tag name and press <strong>comma (,)</strong> or <strong>Enter</strong> to create tag badge.
                            </small>
                        </div>
                        @error('tags')
                            <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label for="pic" class="fw-bold d-flex align-items-center justify-content-between mb-1">
                            <span>Featured Image</span>
                            <span class="badge bg-primary text-white" style="font-size: 11px;">1200 × 630 px (16:9)</span>
                        </label>
                        <div class="form-group">
                            <input type="file" name="blog_image" class="form-control" id="blogPic"
                                accept="image/png, image/jpeg, image/webp">
                            <small class="text-muted d-block mt-1" style="font-size: 11.5px; line-height: 1.4;">
                                <i class="fa-solid fa-circle-info text-primary me-1"></i>
                                <strong>Size:</strong> <code>1200 × 630 px</code> (or <code>1200 × 675 px</code>) •
                                <strong>Ratio:</strong> 16:9 • WebP / JPG / PNG (Max: 1 MB)
                            </small>
                            <div class="conImage mt-2">
                                @if (isset($editBlog->blogImage) && $editBlog->blogImage->media)
                                    <img id="imagePreview" src="{{ asset('storage/' . $editBlog->blogImage->media) }}"
                                        alt="Image preview"
                                        style="display: block; width: 140px; height: 80px; border-radius: 8px; object-fit: cover; border: 1.5px solid #0d6efd; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                @else
                                    <img id="imagePreview" src="#" alt="No image"
                                        style="display: none; width: 140px; height: 80px; border-radius: 8px; object-fit: cover; border: 1.5px solid #0d6efd; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                @endif
                            </div>
                            @error('blog_image')
                                <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <!-- 2. SEO Configuration Section (Moved to the Top Above Description) -->
                <div class="border rounded-3 p-3 bg-light shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge bg-primary me-2 p-2"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <h5 class="fw-bold text-dark mb-0">SEO & Meta Configuration <small
                                class="text-muted fw-normal fs-6">(Google Search Engine & Social Media)</small></h5>
                    </div>

                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label for="meta_title" class="fw-bold">SEO Meta Title</label>
                            <div class="form-group">
                                <input type="text" name="meta_title" class="form-control" id="meta_title"
                                    placeholder="e.g. Ransomware Protection for SMBs: Complete Cybersecurity Guide for 2026"
                                    value="{{ old('meta_title', isset($editBlog) ? $editBlog->meta_title : '') }}">
                                <small class="text-muted">Target: 50-60 characters for Google title ranking.</small>
                            </div>
                            @error('meta_title')
                                <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="keywordInputField" class="fw-bold d-flex align-items-center justify-content-between mb-1">
                                <span>Focus Keywords <small class="text-muted fw-normal">(SEO Target Phrases)</small></span>
                                <span class="badge bg-light text-success border" style="font-size: 10.5px;">Type + Comma (,)</span>
                            </label>
                            <div class="form-group">
                                <div class="tag-input-container d-flex flex-wrap align-items-center gap-1 p-2" id="keywordsInputWrapper">
                                    <div id="keywordBadgeList" class="d-flex flex-wrap align-items-center gap-1"></div>
                                    <input type="text" id="keywordInputField" class="border-0 p-0 flex-grow-1"
                                        placeholder="Type keyword & press comma (,)..."
                                        style="outline: none; min-width: 140px; font-size: 13.5px; background: transparent;">
                                    <input type="hidden" name="focus_keywords" id="keywordsHiddenInput"
                                        value="{{ old('focus_keywords', isset($editBlog) ? $editBlog->focus_keywords : '') }}">
                                </div>
                                <small class="text-muted d-block mt-1" style="font-size: 11px;">
                                    <i class="fa-solid fa-key text-success me-1"></i> Comma-separated target queries for Google indexing (<span class="badge bg-secondary">meta keywords</span>).
                                </small>
                            </div>
                            @error('focus_keywords')
                                <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="meta_description" class="fw-bold">SEO Meta Description</label>
                            <div class="form-group">
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="2"
                                    placeholder="e.g. Learn how to protect your small business from ransomware attacks. Discover backup strategies, endpoint security, cloud protection, employee training, and managed IT services for SMBs.">{{ old('meta_description', isset($editBlog) ? $editBlog->meta_description : '') }}</textarea>
                                <small class="text-muted">Target: 150-160 characters snippet preview in search
                                    results.</small>
                            </div>
                            @error('meta_description')
                                <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <!-- 3. Blog Content Full Width (col-12) -->
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <label for="description" class="fw-bold fs-6 mb-0">Blog Content / Description <span
                                    class="text-danger">*</span></label>
                            <small class="text-muted">Full-width rich text editor for easy writing and layout</small>
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="description" class="form-control description">{{ old('description', isset($editBlog) ? $editBlog->description : '') }}</textarea>
                        </div>
                        @error('description')
                            <div class="alert mt-1 p-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
                <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button class="btn btn-primary px-4 py-2 fw-semibold" type="submit">
                    <i class="fa-solid fa-cloud-arrow-up me-1"></i>
                    {{ isset($editBlog) ? 'Update Blog' : 'Publish Blog' }}
                </button>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </form>


@endsection
@section('script-area')
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            if (document.getElementById('description')) {
                CKEDITOR.replace('description', {
                    height: 450,
                    toolbarGroups: [{
                            name: 'document',
                            groups: ['mode', 'document', 'doctools']
                        },
                        {
                            name: 'clipboard',
                            groups: ['clipboard', 'undo']
                        },
                        {
                            name: 'editing',
                            groups: ['find', 'selection', 'spellchecker', 'editing']
                        },
                        {
                            name: 'forms',
                            groups: ['forms']
                        },
                        '/',
                        {
                            name: 'basicstyles',
                            groups: ['basicstyles', 'cleanup']
                        },
                        {
                            name: 'paragraph',
                            groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']
                        },
                        {
                            name: 'links',
                            groups: ['links']
                        },
                        {
                            name: 'insert',
                            groups: ['insert']
                        },
                        '/',
                        {
                            name: 'styles',
                            groups: ['styles']
                        },
                        {
                            name: 'colors',
                            groups: ['colors']
                        },
                        {
                            name: 'tools',
                            groups: ['tools']
                        },
                        {
                            name: 'others',
                            groups: ['others']
                        }
                    ]
                });
            }

            $('#blogPic').on('change', function() {
                var input = this;
                if (input.files && input.files[0] && input.files[0].type.startsWith('image/')) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imagePreview').attr('src', e.target.result).show();
                    };

                    reader.readAsDataURL(input.files[0]);
                } else {
                    alert('Please select a valid image file.');
                    $('#imagePreview').hide();
                }
            });

            // Show existing image on page load if it exists
            var existingImageSrc = $('#imagePreview').attr('src');
            if (existingImageSrc && existingImageSrc !== '#') {
                $('#imagePreview').show();
            }

            // --- INTERACTIVE TAG & KEYWORD BADGE PILLS SCRIPT ---
            function initTagInput(wrapperId, badgeListId, inputFieldId, hiddenInputId, isKeyword) {
                var wrapper = document.getElementById(wrapperId);
                var badgeList = document.getElementById(badgeListId);
                var input = document.getElementById(inputFieldId);
                var hidden = document.getElementById(hiddenInputId);
                if (!wrapper || !badgeList || !input || !hidden) return;

                var tags = [];
                var pillClass = isKeyword ? 'keyword-badge-pill' : 'tag-badge-pill';
                var removeClass = isKeyword ? 'keyword-badge-remove' : 'tag-badge-remove';
                var prefix = isKeyword ? '' : '#';

                function syncHidden() {
                    hidden.value = tags.join(', ');
                }

                function escapeHtml(text) {
                    var div = document.createElement('div');
                    div.textContent = text;
                    return div.innerHTML;
                }

                function renderBadges() {
                    badgeList.innerHTML = '';
                    tags.forEach(function(tag, index) {
                        var badge = document.createElement('span');
                        badge.className = pillClass;
                        badge.innerHTML = '<span>' + prefix + escapeHtml(tag) + '</span><span class="' + removeClass + '" data-index="' + index + '" title="Remove tag">&times;</span>';
                        badgeList.appendChild(badge);
                    });
                    syncHidden();
                }

                function addTag(text) {
                    text = text.replace(/,/g, '').trim();
                    if (text.length > 0 && tags.indexOf(text) === -1) {
                        tags.push(text);
                        renderBadges();
                    }
                    input.value = '';
                }

                // Initialize with existing comma-separated values
                if (hidden.value && hidden.value.trim() !== '') {
                    hidden.value.split(',').forEach(function(t) {
                        var trimmed = t.trim();
                        if (trimmed && tags.indexOf(trimmed) === -1) tags.push(trimmed);
                    });
                    renderBadges();
                }

                wrapper.addEventListener('click', function() {
                    input.focus();
                });

                input.addEventListener('keydown', function(e) {
                    if (e.key === ',' || e.key === 'Enter') {
                        e.preventDefault();
                        addTag(this.value);
                    } else if (e.key === 'Backspace' && this.value === '' && tags.length > 0) {
                        tags.pop();
                        renderBadges();
                    }
                });

                input.addEventListener('keyup', function(e) {
                    if (this.value.indexOf(',') !== -1) {
                        addTag(this.value);
                    }
                });

                input.addEventListener('blur', function() {
                    if (this.value.trim() !== '') {
                        addTag(this.value);
                    }
                });

                input.addEventListener('paste', function(e) {
                    e.preventDefault();
                    var pasteData = (e.clipboardData || window.clipboardData).getData('text');
                    pasteData.split(',').forEach(function(t) {
                        addTag(t);
                    });
                });

                badgeList.addEventListener('click', function(e) {
                    var removeBtn = e.target.closest('.' + removeClass);
                    if (removeBtn) {
                        e.stopPropagation();
                        var index = parseInt(removeBtn.getAttribute('data-index'), 10);
                        if (!isNaN(index)) {
                            tags.splice(index, 1);
                            renderBadges();
                        }
                    }
                });
            }

            // Initialize Tag and Keyword Badges
            initTagInput('tagInputWrapper', 'tagBadgeList', 'tagInputField', 'tagsHiddenInput', false);
            initTagInput('keywordsInputWrapper', 'keywordBadgeList', 'keywordInputField', 'keywordsHiddenInput', true);

            // Auto-slug generation from Title if slug is not manually specified
            var titleInput = document.getElementById('title');
            var slugInput = document.getElementById('slug');
            var isEditMode = {{ isset($editBlog) ? 'true' : 'false' }};
            var slugManuallyEdited = isEditMode && slugInput && slugInput.value.trim() !== '';

            if (titleInput && slugInput) {
                slugInput.addEventListener('input', function() {
                    slugManuallyEdited = this.value.trim() !== '';
                });

                titleInput.addEventListener('input', function() {
                    if (!slugManuallyEdited) {
                        var firstLine = this.value.split('\n')[0] || '';
                        var generatedSlug = firstLine
                            .toLowerCase()
                            .trim()
                            .replace(/[^a-z0-9\s-]/g, '')
                            .replace(/[\s-]+/g, '-')
                            .replace(/^-+|-+$/g, '');
                        slugInput.value = generatedSlug;
                    }
                });
            }
        });
    </script>
@endsection
