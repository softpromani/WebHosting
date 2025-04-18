@extends('admin.includes.layout', ['breadcrumb_title' => 'Add New Product'])
@section('title', 'Add New Product')
@section('header-area')
    <style>
        .productdesc .ck-editor__editable {
            min-height: 200px;
            /* Set your desired height */
        }

        .ck-editor__editable {
            min-height: 100px;
            /* Set your desired height */
        }

        hr.custom-style {
            border: 0;
            height: 1px;
            /* Thickness of the line */
            background: #000;
            /* Color of the line */
            opacity: 0.4;
            /* Optional: to make it a bit lighter or darker */
        }
    </style>
@endsection
@section('main-content')

    <form action="{{ isset($product_id) ? route('admin.product.update', $product_id) : route('admin.product.store') }}"
        method="POST" enctype="multipart/form-data" id='product_form'>
        @isset($product_id)
            @method('PUT')
        @endisset
        @csrf
        <div class="head">
            <div class="card-header mb-0">
                <nav>
                    <div class="nav nav-pills nav-fill pronav" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="pro_detail" data-toggle="tab" href="#step1"
                            data-url="{{ route('admin.product.PageLayout', 1) }}">Product Detail</a>
                        <a class="nav-link" id="layout" data-toggle="tab" href="#step2"
                            data-url="{{ route('admin.product.PageLayout', 2) }}">Layout</a>
                        <a class="nav-link" id="feature" data-toggle="tab" href="#step3"
                            data-url="{{ route('admin.product.PageLayout', 3) }}">Features</a>

                        <a class="nav-link" id="pro_testimonal" data-toggle="tab" href="#step4"
                            data-url="{{ route('admin.product.PageLayout', 4) }}">Testimonial</a>
                        {{-- <a class="nav-link" id="why-us" data-toggle="tab" href="#step5"
                            data-url="{{ route('admin.product.PageLayout', 5) }}">Why-Us</a> --}}
                        <a class="nav-link" id="faqs" data-toggle="tab" href="#step6"
                            data-url="{{ route('admin.product.PageLayout', 6) }}">FAQs</a>
                        <a class="nav-link" id="media" data-toggle="tab" href="#step7"
                            data-url="{{ route('admin.product.PageLayout', 7) }}">Media</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="productTabPage">
            <div class="tab-content py-4" id="nav-tabContent">
                <div class="tab-pane fade show active" id="step1">
                    {{-- product detail --}}
                </div>
                <div class="tab-pane fade" id="step2">
                    {{-- Counter tab --}}
                </div>
                <div class="tab-pane fade" id="step3">
                    {{-- feature tab --}}

                </div>




                {{-- Testimonial tab --}}
                <div class="tab-pane fade" id="step4">

                </div>
                {{-- why-us tab --}}
                <div class="tab-pane fade" id="step5">
                </div>

                {{-- FAQs --}}

                <div class="tab-pane fade" id="step6">

                </div>

                {{-- Media --}}

                <div class="tab-pane fade" id="step7">

                </div>
            </div>
        </div>
    </form>
@endsection
@section('script-area')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        let testimonialIndex = 1;

        function add_testimonial_div() {
            var testimonialIndex = document.querySelectorAll('.testimonial-item').length;

            var html = `<div class="col-md-6 testimonial-item">
                <div class="card">
                    <span class="text-danger p-2 btn btn feature-del">x</span>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="testipic_${testimonialIndex}">Image <span class="text-danger">(max 300kb)</span></label>
                                <input type="file" name="testi[${testimonialIndex}][pic]" id="testipic_${testimonialIndex}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="testiname_${testimonialIndex}">Name</label>
                                <input type="text" name="testi[${testimonialIndex}][name]" id="testiname_${testimonialIndex}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="testideg_${testimonialIndex}">Designation</label>
                                <input type="text" name="testi[${testimonialIndex}][designation]" id="testideg_${testimonialIndex}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="testicomment_${testimonialIndex}">Comment</label>
                                <input type="text" name="testi[${testimonialIndex}][comment]" id="testicomment_${testimonialIndex}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;

            $('.testimonial-div').append(html);
            testimonialIndex++;
        }

        // faq div
        let faqIndex = 1;

        function add_faq_div() {
            var faqIndex = document.querySelectorAll('.faq-item').length;

            var html = `<div class="col-md-6 faq-item">
                <div class="card">
                    <span class="text-danger p-2 btn faq-del">x</span>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="faqheading_${faqIndex}">Question ?</label>
                                <input type="text" name="faq[${faqIndex}][question]" class="form-control" id="faqheading_${faqIndex}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="faqans_${faqIndex}">Answer </label>
                                <input type="text" name="faq[${faqIndex}][answer]" class="form-control" id="faqans_${faqIndex}" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;

            $('.faq-div').append(html);

            faqIndex++; // Increment faqIndex for next added FAQ
        }

        // preview of images
        function previewImages(input, previewContainerId) {
            const previewContainer = document.getElementById(previewContainerId);
            previewContainer.innerHTML = '';

            if (input.files) {
                const filesArray = Array.from(input.files);

                filesArray.forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgElement = document.createElement('img');
                        imgElement.src = e.target.result;
                        imgElement.classList.add('preview-img');
                        previewContainer.appendChild(imgElement);
                    }
                    reader.readAsDataURL(file);
                });
            }
        }

        // ajax call on tab chnage
        $(document).ready(function() {
            // Handle tab click events
            $(document).on('click', '.pronav a.nav-link', function(e) {
                e.preventDefault();
                var targetTab = $(this).attr('href');
                var url = $(this).data('url');
                var product_id =
                    @if (session()->has('product_id'))
                        {{ session()->get('product_id') }}
                    @else
                        0
                    @endif ;
                if (product_id != 0) {
                    url = url + '/' + product_id;
                }
                $('.tab-pane').not(targetTab).empty();

                // Load content via AJAX
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        $(targetTab).html(response);
                        $(targetTab).tab('show');
                    },

                    error: function(xhr, status, error) {
                        console.error('Error fetching tab content:', status, error);
                        $(targetTab).html('<p>Error loading content.</p>');
                    }
                });
            });

            // Trigger click on the active tab to load its content initially
            @if (session()->has('activeTab'))
                $('#{{ session()->get('activeTab') }}').click();
            @else
                $('#nav-tab .nav-link.active').click();
            @endif

        });

        // delete
        function deleteResource(resourceId) {
            if (confirm('Are you sure you want to delete this resource?')) {
                document.getElementById('delete-form-' + resourceId).submit();
            }
        }
    </script>
@endsection
