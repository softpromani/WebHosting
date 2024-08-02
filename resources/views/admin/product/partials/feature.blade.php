<div class="card ">
    <div class="card-body">
        <div class="row">
            <input type="hidden" name="step" value="feature">
            <input type="hidden" name="product_id"
                value="{{ session()->has('product_id') ? session()->get('product_id') : '1' }}">

            <div class="col-md-12 feature-item" data-index="0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="feature_icon_0">Icon <small class="text-danger">(icon class from
                                            <a href="https://fontawesome.com/icons" target="_blank">here
                                                ...
                                            </a>)</small>
                                    </label>
                                    <input type="text" name="feature[icon]" id="feature_icon_0" class="form-control"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="feature_title_0">Title </label>
                                    <input type="text" name="feature[title]" id="feature_title_0"
                                        class="form-control" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="feature_desc_0">Detail </label>
                            <textarea name="feature[detail]" id="feature_desc_0" class="form-control feature_desc"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 float-end">
            </div>
            <div class="col-lg-12 float-end">
                <button id="saveFeatureBtn" type="button" class="btn btn-primary mt-3 float-end saveFeatureData">Save
                    Feature</button>
            </div>
        </div>
    </div>
</div>







<div class="container-fluid">
    <table class="table table-bordered">
        <thead class="bg-primary text-light">
            <tr>
                <th>Sr No</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="bg-light">
            @if (isset($data))
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td> <i class="{{ $d->icon }}"></i></td>
                        <td>{{ $d->title }}</td>
                        <td>{!! $d->detail !!}</td>
                        <td>
                            <form action="{{ route('admin.product.productDelete', 'feature/' . $d->id) }}"
                                method="POST" id="delete-form-{{ $d->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="deleteResource({{ $d->id }})">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>
</div>



<script>
    var editors = {};

    ClassicEditor
        .create(document.querySelector('.feature_desc'))
        .then(editor => {
            editors['feature_desc_0'] = editor;
        })
        .catch(error => {
            console.error(error);
        });

    $('#saveFeatureBtn').on('click', function() {
        // Update CKEditor instances
        for (var instance in editors) {
            editors[instance].updateSourceElement();
        }

        var form = $('#product_form')[0];
        var formData = new FormData(form);

        $.ajax({
            url: $('#product_form').attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#feature').click();
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
