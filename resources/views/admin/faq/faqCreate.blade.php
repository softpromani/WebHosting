@extends('admin.includes.layout', ['breadcrumb_title' => 'Faq'])
@section('title', 'Faq')

@section('main-content')
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
            /* Set your desired minimum height here */
        }
    </style>

    <form id="faqForm" action="{{ isset($editFaq) ? route('admin.faqs.update', $editFaq->id) : route('admin.faqs.store') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        @if (isset($editFaq))
            @method('PUT')
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Faq </h3>
                <a class="btn btn-primary float-end" href="{{ route('admin.faqs.index') }}">Create Faq</a>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-2">
                        <label for="question">Question : </label>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <input type="text" name="question" class="form-control" id="question" required
                                value="{{ old('question', isset($editFaq) ? $editFaq->question : '') }}">
                        </div>
                        @error('question')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <label for="answer">Answer : </label>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group faqdesc">
                            <textarea name="answer" id="answer" class="form-control ck-editor__editable_inline">{!! old('answer',isset($editFaq) ? $editFaq->answer : '') !!}</textarea>

                        </div>
                        @error('answer')
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
@section('script-area')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#answer'), {
                height: '300px' // Set your desired height here
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
