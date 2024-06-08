@extends('admin.includes.layout', ['breadcrumb_title' => 'Web Setting'])
@section('title', 'Setting')

@section('main-content')

    <div class="container-fluid">
        {{-- <div class="row"> --}}
        @foreach ($webSettings as $k => $item)
            <div class="card">
                <div class="card-header">
                    <h4>{{ $k }}</h4> 
                </div>
                <div class="card-body">
                    <table class="table">
                        @foreach ($item as $i)
                            <tr>
                                <td>{{ $i->key }}</td>
                                <td> <input type="text" value="{{ $i->value }}"> </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        @endforeach
        {{-- </div> --}}
    </div>
@endsection()
