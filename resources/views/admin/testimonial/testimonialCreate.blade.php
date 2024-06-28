@extends('admin.includes.layout', ['breadcrumb_title' => 'Testimonial'])
@section('title', 'Testimonial')

@section('main-content')
    
    <form id="teamForm"
        action="{{ isset($editTestimonial) ? route('admin.testimonial.update', $editTestimonial->id) : route('admin.testimonial.store') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        @if (isset($editTestimonial))
            @method('PUT')
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Testimonial </h3>
                <a class="btn btn-primary float-end" href="{{ route('admin.team.index') }}">+ Add Testimonial</a>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Name </label>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" required
                                value="{{ old('name', isset($editTestimonial) ? $editTestimonial->name : '') }}">
                        </div>
                        @error('name')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="position">Position </label>
                        <div class="form-group">
                            <input type="text" name="position" class="form-control" id="position" required
                                value="{{ old('position', isset($editTestimonial) ? $editTestimonial->position : '') }}">
                        </div>
                        @error('position')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label for="description">Description <small class="text-danger">(optional)</small> </label>
                        <div class="form-group">
                            <textarea name="description" id="description" class="form-control" rows="5">{{ old('description', isset($editTestimonial) ? $editTestimonial->description : '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="pic">Upload Image </label>
                        <div class="form-group">
                            <input type="file" name="pic" class="form-control" id="pic">
                            @if (isset($editTestimonial))
                                <img src="{{ asset($editTestimonial->pic) }}" alt="" id="teamPic"
                                    style="width:90px;height:90px; border-radius:5px " class="mt-2">
                            @endif
                        </div>
                        @error('pic')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
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

