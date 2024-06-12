@extends('admin.includes.layout', ['breadcrumb_title' => 'Web Setting'])
@section('title', 'Setting')

@section('main-content')

    <div class="container-fluid">
        <form action="{{ route('admin.updateWebSettings') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                @foreach ($webSettings as $k => $item)
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $k }}</h4>
                        </div>
                        <div class="card-body">

                            <table class="table ">
                                <thead>
                                    <th> Name</th>
                                    <th> Value </th>
                                </thead>
                                <tbody>
                                    @foreach ($item as $i)
                                        <tr>
                                            <td>{{ $i->key }}</td>
                                            <td>
                                                @if ($i->type === 'color')
                                                    <input type="text" value="{{ settingValue($i->key) }}"
                                                        class="form-control text-input"
                                                        style="margin-top:5px; border:none; background-color:transparent;"
                                                        id="textchange_{{ $i->key }}" readonly>
                                                    <input type="color" value="{{ settingValue($i->key) }}"
                                                        class="form-control color-input" style="border:none;"
                                                        id="colorchange_{{ $i->key }}"
                                                        name="settings[{{ $i->key }}]">
                                                @else
                                                    <input type="{{ $i->type }}" value="{{ settingValue($i->key) }}"
                                                        class="form-control" style="border:none;"
                                                        name="settings[{{ $i->key }}]">
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <input type="submit" class="form-control btn-success btn" value="update">
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

        });
    </script>

@endsection()
