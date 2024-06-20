@extends('admin.includes.layout', ['breadcrumb_title' => 'Add New Product'])
@section('title', 'Add New Product')
@section('header-area')
    <style>
        .productdesc .ck-editor__editable {
            min-height: 500px;
            /* Set your desired height */
        }

        .ck-editor__editable {
            min-height: 200px;
            /* Set your desired height */
        }
    </style>
@endsection
@section('main-content')

<form action="{{isset($edit)?route('admin.product.update',$product->id):route('admin.product.store')}}" method="POST">
    @isset($edit) @method('PUT') @endisset
    @csrf
<div class="card">
    <div class="card-header">
        <nav>
            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
              <a class="nav-link active" id="step1-tab" data-toggle="tab" href="#step1">Product Detail</a>
              <a class="nav-link" id="step2-tab" data-toggle="tab" href="#step2">Features</a>
              <a class="nav-link" id="step3-tab" data-toggle="tab" href="#step3">Counter</a>
              <a class="nav-link" id="step4-tab" data-toggle="tab" href="#step4">Testimonial</a>
              <a class="nav-link" id="step5-tab" data-toggle="tab" href="#step5">Why-Us</a>
              <a class="nav-link" id="step6-tab" data-toggle="tab" href="#step6">FAQs</a>
              <a class="nav-link" id="step7-tab" data-toggle="tab" href="#step7">Media</a>
            </div>
          </nav>
    </div>
    <div class="card-body">
        <div class="tab-content py-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="step1">
               {{-- product detail --}}
               <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="" id="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="meta_keyword">Meta Keywords <small class="text-danger">(multiple Seperate with
                                ',')</small></label>
                        <input class="form-control" type="text" name="meta_keyword" id="meta_keyword">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="meta_desc">Meta Description</label>
                        <input class="form-control" type="text" name="meta_desc" id="meta_desc">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group productdesc">
                        <label for="product_desciption">Product Description</label>
                        <textarea name="product_desciption" id="product_desciption"></textarea>
                    </div>
                </div>
            </div>

            </div>
            <div class="tab-pane fade" id="step2">
                {{-- feature tab --}}
             
                <div class="row feature-div">
                    <div class="col-md-6 ">
                        <div class="card">
                            <span class="text-white p-2 btn btn">x</span>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_icon">Icon <small class="text-danger">(icon class from <a
                                                    href="https://fontawesome.com/icons" target="_blank">here
                                                    ...</a>)</small></label>
                                        <input type="text" name="feature[]['icon']" id="feature_icon"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_title">Title </label>
                                        <input type="text" name="feature[]['title']" id="feature_title"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_desc">Detail </label>
                                        <textarea name="feature[]['desc']" id="feature_desc" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 float-end">
                        <button type="button" class="btn btn-success mt-3 float-end" onclick="add_feature_div()"
                        type="button">+</button>
                    </div>
                </div>
            </div>

            {{-- Counter tab --}}
            
            <div class="tab-pane fade" id="step3">
                <div class="row counter-div">
                    <div class="col-md-6">
                        <div class="card">
                            <span class="text-white p-2 btn btn">x</span>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="counter_icon">Icon <small class="text-danger">(icon class from <a
                                                    href="https://fontawesome.com/icons" target="_blank">here
                                                    ...</a>)</small></label>
                                        <input type="text" name="counter[]['count']" id="feature_icon" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="counter_count">Count </label>
                                        <input type="number" name="counter[]['count']" id="counter_count" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="counter_title">Title </label>
                                        <input type="text" name="counter[]['title']" id="counter_title"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <button class="btn btn-success float-end" onclick="add_counter_div()"
                    type="button">+</button>
                    </div>
                </div>
            </div>
            {{-- Testimonial tab--}}
            <div class="tab-pane fade" id="step4">
                
                <div class="row testimonial-div">
                    <div class="col-md-6">
                        <div class="card">
                            <span class="text-white p-2 btn btn">x</span>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testipic">Image <span class="text-danger">(max 300kb)</span></label>
                                        <input type="file" name="testi[]['pic']" id="testipic" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testiname">Name</label>
                                        <input type="text" name="testi[]['name']" id="testiname" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testideg">Designation</label>
                                        <input type="text" name="testi[]['deg']" id="testideg" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testicomment">Comment</label>
                                        <input type="text" name="testi[]['comment']" id="testicomment"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-success float-end" onclick="add_testimonial_div()" type="button">+</button>
                    </div>
                </div>
            </div>
            {{-- why-us tab --}}
            <div class="tab-pane fade" id="step5">
            </div>

            {{-- FAQs --}}
            
            <div class="tab-pane fade" id="step6">
                <div class="row faq-div">
                    <div class="col-md-6">
                        <div class="card">
                            <span class="text-white p-2 btn btn">x</span>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="faqheading">Question ?</label>
                                        <input type="text" name="faq[]['heading']" class="form-control"
                                            id="faqheading" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="faqans">Answer </label>
                                        <input type="text" name="faq[]['ans']" class="form-control" id="faqans"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-success float-end" onclick="add_faq_div()" type="button">+</button></div>
                    </div>
                </div>

            {{-- Media --}}
            
            <div class="tab-pane fade" id="step7">
                <span class="text-warning">Images must be  maximum 1 MB each</span>
                <div class="row">
                    <div class="col-md-6">
                        <label for="main_img">Content Image</label>
                        <input type="file" name="main_img" id="main_img" class="form-control" accept="image/*">
                    </div>
                    <div class="col-md-6">
                        <label for="slider_img">Silder Images <span class="text-danger">(Select Multiple)</span></label>
                        <input type="file" name="slider_img[]" id="main_img" class="form-control" accept="image/*" multiple>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary float-end" type="submit">Submit</button>
    </div>
</div>
</form>
@endsection
@section('script-area')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#product_desciption'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#feature_desc'))
            .catch(error => {
                console.error(error);
            });

        function add_feature_div() {
            var featdiv = ` <div class="col-md-6 feature-item">
                        <div class="card">
                            <span class="text-danger p-2 btn feature-del ">X</span>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_icon">Icon <small class="text-danger">(icon class from <a
                                                    href="https://fontawesome.com/icons" target="_blank">here
                                                    ...</a>)</small></label>
                                        <input type="text" name="feature[]['icon']" id="feature_icon" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_title">Title </label>
                                        <input type="text" name="feature[]['title']" id="feature_title"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_desc">Detail </label>
                                        <textarea name="feature[]['desc']" id="feature_desc" class="form-control feature_desc" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
            $('.feature-div').append(featdiv);
            document.querySelectorAll('.feature_desc').forEach((element) => {
                if (!element.classList.contains('ck-editor-initialized')) {
                    ClassicEditor.create(element)
                        .then(editor => {
                            element.classList.add('ck-editor-initialized');
                        })
                        .catch(error => {
                            console.error(error);
                        });
                }
            });
        }
        $(document).on('click', '.feature-del', function() {
            $(this).closest('.col-md-6').remove();
        });


        function add_counter_div() {
            var counterdiv = `<div class="col-md-6">
                        <div class="card">
                            <span class="text-danger p-2 btn btn feature-del">x</span>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="counter_icon">Icon <small class="text-danger">(icon class from <a
                                                    href="https://fontawesome.com/icons" target="_blank">here
                                                    ...</a>)</small></label>
                                        <input type="text" name="counter[]['icon']" id="feature_icon" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="counter_count">Count </label>
                                        <input type="number" name="counter[]['count']" id="counter_count" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="counter_title">Title </label>
                                        <input type="text" name="counter[]['title']" id="counter_title" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
            $('.counter-div').append(counterdiv);
        }

        // function add testimonial div
        function add_testimonial_div() {
            var html = `<div class="col-md-6">
                        <div class="card">
                            <span class="text-danger p-2 btn btn feature-del">x</span>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testipic">Image <span class="text-danger">(max 300kb)</span></label>
                                        <input type="file" name="testi[]['pic']" id="testipic" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testiname">Name</label>
                                        <input type="text" name="testi[]['name']" id="testiname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testideg">Designation</label>
                                        <input type="text" name="testi[]['deg']" id="testideg" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testicomment">Comment</label>
                                        <input type="text" name="testi[]['comment']" id="testicomment" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
            $('.testimonial-div').append(html);
        }

        // faq div
        function add_faq_div() {
            var html = `<div class="col-md-6">
                        <div class="card">
                        <span class="text-danger p-2 btn feature-del">x</span>
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="faqheading">Question ?</label>
                                    <input type="text" name="faq[]['heading']" class="form-control" id="faqheading" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="faqans">Answer </label>
                                    <input type="text" name="faq[]['ans']" class="form-control" id="faqans" required>
                                </div>
                            </div>
                        </div>
                    </div>`;
            $('.faq-div').append(html)
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
    </script>
@endsection
