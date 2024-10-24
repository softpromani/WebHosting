<style>

</style>
<div class="card ">
    <div class="card-body">
        <input type="hidden" name="step" value="layout">
        <input type="hidden" name="product_id" value="{{ isset($product_id) ? $product_id : '' }}">
        @if ($data->layout == 'pricePlan')
            <div class="row ">
                <div class="col-md-12 ">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title </label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description </label>
                                <textarea name="description" id="description" class="form-control" required> </textarea>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 float-end">
                    <button id="saveLayoutBtn" type="button" class="btn btn-primary mt-3 float-end">Save
                        Layout</button>
                </div>
            </div>
        @else
            <div class="row counter-div">
                <div class="col-md-12 counter-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tab_name">Tab Name </label>
                                <input type="text" name="tab_name" id="tab_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tab_icon">Tab Icon </label>
                                <input type="text" name="tab_icon" id="tab_icon" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="header_icon">Header Icon </label>
                                <input type="text" name="header_icon" id="header_icon" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="header_text">Header Text </label>
                                <input type="text" name="header_text" id="header_text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="service_image">Service Image </label>
                                <input type="file" name="service_image" id="service_image" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title1">Title </label>
                                <input type="text" name="title" id="title1" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="description1">Description </label>
                                <textarea name="description" id="description1" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 float-end">
                    <button id="saveLayoutBtn" type="button" class="btn btn-primary mt-3 float-end saveLayoutData">Save
                        Layout</button>
                </div>
            </div>
        @endif

    </div>
</div>

<div class="card ">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                @if ($data->layout == 'pricePlan')
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data->productPricePlans as $plan)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $plan->title ?? 'N/A' }}</td>
                                    <td>{{ $plan->description ?? 'N/A' }}</td>
                                    <td>
                                        <form
                                            action="{{ route('admin.product.productDelete', 'priceLayout/' . $plan->id) }}"
                                            method="POST" id="delete-form-{{ $plan->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                onclick="deleteResource({{ $plan->id }})">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No data found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Service Image</th>
                                <th>Tab Name</th>
                                <th>Tab Icon</th>
                                <th>Header Icon</th>
                                <th>Header Text</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data->productBusinessServices as $plan)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        @isset($plan->businessServiceImg->media)
                                            <img src="{{ asset('storage/' . $plan->businessServiceImg->media ?? '') }}"
                                                height="50" width="50" />
                                        @endisset
                                    </td>
                                    <td>{{ $plan->tab_name ?? 'N/A' }}</td>
                                    <td>{{ $plan->tab_icon ?? 'N/A' }}</td>
                                    <td>{{ $plan->header_icon ?? 'N/A' }}</td>
                                    <td>{{ $plan->header_text ?? 'N/A' }}</td>
                                    <td>{{ $plan->title ?? 'N/A' }}</td>
                                    <td>{{ $plan->description ?? 'N/A' }}</td>
                                    <td>
                                        <form
                                            action="{{ route('admin.product.productDelete', 'businessLayout/' . $plan->id) }}"
                                            method="POST" id="delete-form-{{ $plan->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                onclick="deleteResource({{ $plan->id }})">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">No data found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>
</div>
<script>
    $('#saveLayoutBtn').on('click', function() {
        var form = $('#product_form')[0];
        var formData = new FormData(form);

        $.ajax({
            url: $('#product_form').attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#layout').click();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 422) { // Laravel validation error status code
                    var errors = jqXHR.responseJSON.errors;
                    console.error('Server-side validation failed:', errors);
                } else {
                    console.error('Failed to submit form:', textStatus, errorThrown);
                }
            }
        });
    });
</script>
