@extends('admin.includes.layout', ['breadcrumb_title' => 'Team'])
@section('title', 'Team')

@section('main-content')
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
            /* Set your desired minimum height here */
        }
    </style>
    @if (isset($showTeam))
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Details</h3>
                <a class="btn btn-primary float-end" href="{{ route('admin.team.index') }}">+ Add Team</a>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-2">
                        <label for="position"> Image </label>
                    </div>

                    <div class="col-lg-10">
                        <div class="form-group">
                            {{-- <input type="file" name="pic" class="form-control" id="pic" required> --}}
                            <img src="{{ asset($showTeam->pic ?? '') }}" alt=""
                                style="width:90px;height:90px; border-radius:5px">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label for="name">Name :</label>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            {{-- <p>{{ $showTeam->name ?? '' }}</p> --}}
                            <input type="text" name="name" class="form-control" id="name" readonly
                                value="{{ $showTeam->name ?? '' }}">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label for="position">Position :</label>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            {{-- <p>{{ $showTeam->position ?? '' }}</p> --}}
                            <input type="text" name="position" class="form-control" id="name" readonly
                                value="{{ $showTeam->position ?? '' }}">

                        </div>
                    </div>

                    <div class="col-lg-2">
                        <label for="twitter">Twitter <small class="text-danger">(optional)</small> :</label>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            {{-- <p>{{ $showTeam->twitter ?? '' }}</p> --}}
                            <input type="text" name="twitter" class="form-control" id="twitter"
                                value="{{ $showTeam->twitter ?? '' }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label for="facebook">Facebook <small class="text-danger">(optional)</small> :</label>
                    </div>
                    <div class="col-lg-10">
                        {{-- <p>{{ $showTeam->facebook ?? '' }}</p> --}}
                        <div class="form-group">
                            <input type="text" name="facebook" class="form-control" id="facebook"
                                value="{{ $showTeam->facebook ?? '' }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label for="instagram">Instagram <small class="text-danger">(optional)</small>: </label>
                    </div>
                    <div class="col-lg-10">
                        {{-- <p>{{ $showTeam->instagram ?? '' }}</p> --}}
                        <div class="form-group">
                            <input type="text" name="instagram" class="form-control" id="instagram"
                                value="{{ $showTeam->instagram ?? '' }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label for="linkedin">Linkdin <small class="text-danger">(optional)</small> : </label>
                    </div>
                    <div class="col-lg-10">
                        {{-- <p>{{ $showTeam->linkedin ?? '' }}</p> --}}
                        <div class="form-group">
                            <input type="text" name="linkedin" class="form-control" id="linkedin"
                                value="{{ $showTeam->linkedin ?? '' }}" readonly>
                        </div>
                    </div>

                </div>

            </div>

            <!-- /.card-body -->
        </div>
    @else
        <form id="teamForm"
            action="{{ isset($editTeam) ? route('admin.team.update', $editTeam->id) : route('admin.team.store') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($editTeam))
                @method('PUT')
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Team </h3>
                    <a class="btn btn-primary float-end" href="{{ route('admin.team.index') }}">+ Add Team</a>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name">Name </label>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" required
                                    value="{{ old('name', isset($editTeam) ? $editTeam->name : '') }}">
                            </div>
                            @error('name')
                                <div class="alert mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="position">Position </label>
                            <div class="form-group">
                                <input type="text" name="position" class="form-control" id="position" required
                                    value="{{ old('position', isset($editTeam) ? $editTeam->position : '') }}">
                            </div>
                            @error('position')
                                <div class="alert mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="pic">Upload Image </label>
                            <div class="form-group">
                                <input type="file" name="pic" class="form-control" id="pic">
                                @if (isset($editTeam))
                                    <img src="{{ asset($editTeam->pic) }}" alt="" id="teamPic"
                                        style="width:90px;height:90px; border-radius:5px " class="mt-2">
                                @endif
                            </div>
                            @error('pic')
                                <div class="alert mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="twitter">Twitter <small class="text-danger">(optional)</small> </label>
                            <div class="form-group">
                                <input type="text" name="twitter" class="form-control" id="twitter"
                                    value="{{ old('twitter', isset($editTeam) ? $editTeam->twitter : '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="facebook">Facebook <small class="text-danger">(optional)</small> </label>
                            <div class="form-group">
                                <input type="text" name="facebook" class="form-control" id="facebook"
                                    value="{{ old('facebook', isset($editTeam) ? $editTeam->facebook : '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="instagram">Instagram <small class="text-danger">(optional)</small> </label>
                            <div class="form-group">
                                <input type="text" name="instagram" class="form-control" id="instagram"
                                    value="{{ old('instagram', isset($editTeam) ? $editTeam->instagram : '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="linkedin">Linkdin <small class="text-danger">(optional)</small> </label>
                            <div class="form-group">
                                <input type="text" name="linkedin" class="form-control" id="linkedin"
                                    value="{{ old('linkedin', isset($editTeam) ? $editTeam->linkedin : '') }}">
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
    @endif


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
