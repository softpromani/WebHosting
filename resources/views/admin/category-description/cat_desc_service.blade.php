@extends('admin.includes.layout', ['breadcrumb_title' => ' Category description Service'])
@section('title', ' Category description')
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
            <h3 class="card-title">Category Description Service </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                <form action="{{ isset($service) ? route('admin.cat_desc_service_update', $service->id) : route('admin.cat_desc_service_save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($service))
                        @method('PUT')
                    @endif
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category_id">Select Category Description</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ (old('category_id', $service->category_id ?? '') == $category->id) ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row counter-div">
                        <div class="col-md-12 counter-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tab_name">Tab Name</label>
                                        <input type="text" name="tab_name" id="tab_name" class="form-control" required value="{{ old('tab_name', $service->tab_name ?? '') }}">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tab_icon">Tab Icon</label>
                                        <input type="text" name="tab_icon" id="tab_icon" class="form-control" required value="{{ old('tab_icon', $service->tab_icon ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="header_icon">Header Icon</label>
                                        <input type="text" name="header_icon" id="header_icon" class="form-control"
                                            required value="{{ old('header_icon', $service->header_icon ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="header_text">Header Text</label>
                                        <input type="text" name="header_text" id="header_text" class="form-control"
                                            required value="{{ old('header_text', $service->header_text ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="service_image">Service Image</label>
                                        <input type="file" name="service_image" id="service_image" class="form-control"
                                            {{ isset($service) ? '' : 'required' }}>
                                        @if(isset($service) && $service->service_image)
                                            <img src="{{ asset('storage/' . $service->service_image) }}" alt="Service Image" width="100" class="mt-2">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title1">Title</label>
                                        <input type="text" name="title" id="title1" class="form-control" required value="{{ old('title', $service->title ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                       <textarea name="description" id="description_editor" class="form-control">{{ old('description', $service->description ?? '') }}</textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <button type="submit" class="btn btn-primary mt-3">
                        {{ isset($service) ? 'Update' : 'Save' }}
                    </button>


                </form>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <hr>
<h4>Existing Category Description Services</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Tab Name</th>
            <th>Tab Icon</th>
            <th>Header Icon</th>
            <th>Header Text</th>
            <th>Title</th>
            {{-- <th>Image</th> --}}
            {{-- <th>Description</th> --}}
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($services as $index => $service)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $service->category->title ?? 'N/A' }}</td>
                <td>{{ $service->tab_name }}</td>
                <td>{{ $service->tab_icon }}</td>
                <td>{{ $service->header_icon }}</td>
                <td>{{ $service->header_text }}</td>
                <td>{{ $service->title }}</td>
                {{-- <td>
                    @if ($service->service_image)
                        <img src="{{ asset('uploads/service_images/' . $service->service_image) }}" alt="Image" width="60">
                    @endif
                </td> --}}
                {{-- <td>{!! \Illuminate\Support\Str::limit(strip_tags($service->description), 50) !!}</td> --}}
                <td>
                    <a href="{{ route('admin.cat_desc_service_edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    {{-- <form action="{{ route('admin.cat_desc_service_delete', $service->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form> --}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10">No category description services found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
@section('script-area')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    $(document).ready(function () {

        ClassicEditor.create(document.querySelector('#description_editor'))
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection

