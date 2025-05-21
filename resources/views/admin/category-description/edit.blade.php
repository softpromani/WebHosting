@extends('admin.includes.layout', ['breadcrumb_title' => 'Edit Category description'])
@section('title', 'Edit Category description')
@section('header-area')
    <style>
        .description .ck-editor__editable {
            min-height: 200px;
            /* Set your desired height */
        }
        .ck-editor__editable {
            min-height: 200px;
            /* Set your desired height */
        }
    </style>
@endsection
@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $category->name??''}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('admin.category-description.update', $category->id??0) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <input type="hidden" name="category_id" id="category_id" value="{{ $category->id }}"
                            class="form-control">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Title </label>
                            <input class="form-control" type="text" name="title" id="title"
                                value="{{ isset($descriptioncat->title) ? $descriptioncat->title : '' }}">
                        </div>
                        @error('title')
                            <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control"
                            accept="image/*">
                            @if (!empty($descriptioncat->image) && Storage::exists('public/' . $descriptioncat->image))
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $descriptioncat->image) }}" alt="Current Image" width="60" height="60" style="object-fit: cover; border: 1px solid #ccc;">
                                </div>
                            @endif
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="description"> Description</label>
                            <textarea class="form-control" name="description" id="description">{{ $descriptioncat->description ?? '' }}</textarea>
                        </div>
                        @error('description')
                            <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success btn-sm">Save</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
@section('script-area')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>

@endsection
