@extends('admin.includes.layout', ['breadcrumb_title' => 'Blog'])
@section('title', 'BLog')

@section('main-content')
    <style>
        .ck-editor__editable {
            min-height: 100px;
            /* Set your desired height */
        }
    </style>

    <form id="teamForm"
<<<<<<< HEAD
        action="{{ isset($editBlog) ? route('admin.blogs.update', $editBlog->id) : route('admin.blogs.store') }}"
        method="post" enctype="multipart/form-data">
=======
        action="{{ isset($editBlog) ? route('admin.blog.update', $editBlog->id) : route('admin.blog.store') }}" method="post"
        enctype="multipart/form-data">
>>>>>>> 99d4e18e977090e1521f20c7f3511055a4a7806d
        @csrf
        @if (isset($editBlog))
            @method('PUT')
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Blog </h3>
<<<<<<< HEAD
                <a class="btn btn-primary float-end" href="{{ route('admin.blogs.index') }}">+ Add Blog</a>
=======
                <a class="btn btn-primary float-end" href="{{ route('admin.blog.index') }}">+ Add Blog</a>
>>>>>>> 99d4e18e977090e1521f20c7f3511055a4a7806d
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="name">Title </label>
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="title" required
                                        value="{{ old('title', isset($editBlog) ? $editBlog->title : '') }}">
                                </div>
                                @error('title')
                                    <div class="alert mt-2 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 mt-3">
                                <label for="pic">Upload Image</label>
                                <div class="form-group">
                                    <input type="file" name="blog_image" class="form-control" id="blogPic">
                                    <div class="conImage mt-3">
<<<<<<< HEAD
                                        <img id="imagePreview"
                                            src="{{ isset($editBlog) ? asset($editBlog->blog_image) : '#' }}"
                                            alt="Image preview"
                                            style="display: none; width: 150px; height: 150px; border-radius:5px;">
=======
                                        @if (isset($editBlog->blogImage) && $editBlog->blogImage->media)
                                            <img id="imagePreview"
                                                src="{{ asset('storage/' . $editBlog->blogImage->media) }}"
                                            alt="Image preview"
                                            style="display: block; width: 150px; height: 150px; border-radius:5px;">
                                        @else
                                            <img id="imagePreview" src="#" alt="No image"
                                                style="display: none; width: 150px; height: 150px; border-radius:5px;">
                                        @endif
>>>>>>> 99d4e18e977090e1521f20c7f3511055a4a7806d
                                    </div>
                                    @error('blog_image')
                                        <div class="alert mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <label for="description">Description </label>
                        <div class="form-group">
                            <textarea name="description" id="description" class="form-control description" rows="5">{{ old('description', isset($editBlog) ? $editBlog->description : '') }}</textarea>
                        </div>
                    </div>


                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary float-end" type="submit">Submit</button>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </form>


@endsection
@section('script-area')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                height: '400px' // Set your desired height here
            })
            .catch(error => {
                console.error(error);
            });
        $(document).ready(function() {
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
        });
    </script>
@endsection
