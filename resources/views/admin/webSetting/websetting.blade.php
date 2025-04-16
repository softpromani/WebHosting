@extends('admin.includes.layout', ['breadcrumb_title' => 'Web Setting'])
@section('title', 'Setting')

@section('main-content')

    <div class="container-fluid">
        <style>
            .hre {
                color: black !important;
                opacity: 0.70;
            }
        </style>
        <form action="{{ route('admin.updateWebSettings') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($webSettings as $k => $item)
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $k }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"><b>Name</b></div>
                                    <div class="col-md-9"><b>Value</b></div>
                                </div>
                                <hr class="hre" />
                                @foreach ($item as $i)
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-weight: 500;">{{ $i->key }}</span>
                                        </div>
                                        <div class="col-md-9">
                                            @if ($i->type === 'color')
                                                <input type="text" value="{{ settingValue($i->key) }}"
                                                    class="form-control" style="border:none; background-color:transparent;"
                                                    id="textchange_{{ $i->key }}" readonly>
                                                <input type="color" value="{{ settingValue($i->key) }}"
                                                    class="form-control color-input" id="colorchange_{{ $i->key }}"
                                                    name="settings[{{ $i->key }}]">
                                            @elseif ($i->type === 'file' && $i->key === 'logo')
                                                <input type="file" class="form-control mb-3"
                                                    name="settings[{{ $i->key }}]" id="pic_{{ $i->key }}">

                                                <img src="{{ asset('storage/' . settingValue($i->key)) }}" alt="no image"
                                                    id="existingPhoto_{{ $i->key }}"
                                                    style="height: 100px; width:100px;">
                                            @elseif ($i->type === 'file' && $i->key === 'breadcrumb_image')
                                                <input type="file" class="form-control mb-3"
                                                    name="settings[{{ $i->key }}]" id="pic_{{ $i->key }}">

                                                <img src="{{ asset('storage/' . settingValue($i->key)) }}" alt="no image"
                                                    id="existingPhoto_{{ $i->key }}"
                                                    style="height: 100px; width:100px;">
                                            @elseif ($i->key === 'address')
                                                <textarea name="settings[{{ $i->key }}]" rows="3" class="form-control">{{ settingValue($i->key) }}</textarea>
                                            @else
                                                <input type="{{ $i->type }}" value="{{ settingValue($i->key) }}"
                                                    class="form-control mb-3" name="settings[{{ $i->key }}]">
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <input type="submit" class="form-control btn-success btn" value="Update">
                </div>
            </div>
        </form>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.color-input').on('input', function() {
                var key = $(this).attr('id').replace('colorchange_', '');
                $('#textchange_' + key).val($(this).val());
            });
            $('#pic').change(function() {
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#existingPhoto').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });

        });
    </script>

@endsection
