@extends('admin.includes.layout', ['breadcrumb_title' => 'Plan'])
@section('title', 'Plan')

@section('main-content')
    <style>
        .ck-editor__editable {
            min-height: 100px;
            /* Set your desired height */
        }
    </style>

    <form id="teamForm"
        action="{{ isset($editPricePlan) ? route('admin.price-plan.update', $editPricePlan->id) : route('admin.price-plan.store') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        @if (isset($editPricePlan))
            @method('PUT')
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">price-plan Plan </h3>
                <a class="btn btn-primary float-end" href="{{ route('admin.price-plan.index') }}"> Plan</a>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Title </label>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" id="title" required
                                value="{{ old('title', isset($editPricePlan) ? $editPricePlan->title : '') }}">
                        </div>
                        @error('title')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 ">
                        <label for="price">Price</label>
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" id="price" required
                                value="{{ old('price', isset($editPricePlan) ? $editPricePlan->price : '') }}">
                        </div>
                        @error('price')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 ">
                        <label for="billing_cycle">Billing Cycle</label>
                        <div class="form-group">
                            <select name="billing_cycle" id="billing_cycle" class="form-control">
                                <option Selected disabled> Billing Cycle</option>
                                <option value="Year"
                                    {{ old('billing_cycle', isset($editPricePlan) ? $editPricePlan->billing_cycle : '') === 'Year' ? 'selected' : '' }}>
                                    Year</option>
                                <option value="Month"
                                    {{ old('billing_cycle', isset($editPricePlan) ? $editPricePlan->billing_cycle : '') === 'Month' ? 'selected' : '' }}>
                                    Month</option>
                                <option value="Days"
                                    {{ old('billing_cycle', isset($editPricePlan) ? $editPricePlan->billing_cycle : '') === 'Days' ? 'selected' : '' }}>
                                    Days</option>
                            </select>
                            {{-- <input type="text" name="billing_cycle" class="form-control" id="billing_cycle" required
                                value="{{ old('billing_cycle', isset($editPricePlan) ? $editPricePlan->billing_cycle : '') }}"> --}}
                        </div>
                        @error('billing_cycle')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 ">
                        <label for="trial_days">Tial Days</label>
                        <div class="form-group">
                            <input type="text" name="trial_days" class="form-control" id="trial_days" required
                                value="{{ old('trial_days', isset($editPricePlan) ? $editPricePlan->trial_days : '') }}">
                        </div>
                        @error('trial_days')
                            <div class="alert mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12 ">
                                <label for="features">Features</label>
                                <div class="input-group plusFeature">
                                    <input type="text" name="features[]" class="form-control" id="features"
                                        value="{{ old('features[0]', isset($editPricePlan) && is_array(json_decode($editPricePlan->features)) ? json_decode($editPricePlan->features)[0] : '') }}">
                                    <a id="" class="btn btn-success plusBtn" href="#"
                                        role="button"><b>+</b></a>
                                </div>
                                @error('features.0')
                                    <div class="alert  text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="showFea">
                                @if (isset($editPricePlan) && is_array(json_decode($editPricePlan->features)))
                                    @foreach (json_decode($editPricePlan->features) as $index => $feature)
                                        @if ($index > 0)
                                            <div class="input-group plusFeature mt-2">
                                                <input type="text" name="features[]" class="form-control" required
                                                    value="{{ old("features[$index]", $feature) }}">
                                                <a class="btn btn-danger removeFeature" href="javascript:void(0);"
                                                    role="button"><b>-</b></a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
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
        $(document).ready(function() {
            // Add new feature input on click of plus button
            $(document).on('click', '.plusBtn', function(e) {
                e.preventDefault();
                let featureHTML = `

                    <div class="input-group plusFeature mt-2">
                        <input type="text" name="features[]" class="form-control" required>
                        <a class="btn btn-danger removeFeature" href="javascript:void(0);" role="button"><b>-</b></a>

                </div>`;
                $('.showFea').append(featureHTML);
            });

            // Remove feature input on click of minus button
            $(document).on('click', '.removeFeature', function(e) {
                e.preventDefault();
                $(this).closest('.plusFeature').remove();
            });
        });
    </script>
@endsection
