 <input type="hidden" name="step" value="pro_testimonial">
 <input type="hidden" name="product_id"  value="{{ session()->has('product_id') ? session()->get('product_id') : '1' }}">
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="testipic">Image <span class="text-danger">(max 300kb)</span></label>
                <input type="file" name="testi[pic]" id="testipic" class="form-control">
                @error('testi.0.pic')
                    <div class="alert mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="testiname">Name</label>
                <input type="text" name="testi[name]" id="testiname" class="form-control" required>
                @error('testi.0.name')
                    <div class="alert mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="testideg">Designation</label>
                <input type="text" name="testi[designation]" id="testideg" class="form-control"
                    required>
                @error('testi.0.designation')
                    <div class="alert mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="testicomment">Comment</label>
                <input type="text" name="testi[comment]" id="testicomment" class="form-control" required>
                @error('testi.0.comment')
                    <div class="alert mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <button type="button" id="saveTestiBtn" class="btn btn-primary">Save</button>
        </div>
    </div>
    </div>
</div>

<div class="container">
    @if (isset($data))
        <table class="table table-bordered">
            <thead class="bg-primary text-light">
                <tr>
                    <th>Sr No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td> @isset($d->media)
                                <img src="{{ asset('storage/' . $d->media->media) }}" alt="" height="50px"
                                    width="50px">
                            @endisset
                        </td>
                        <td>{{ $d->name }}</td>
                        <td>{!! $d->designation !!}</td>
                        <td>{!! $d->comment !!}</td>
                        <td>
                            <form action="{{ route('admin.product.productDelete', 'pro_testimonial/' . $d->id) }}"
                                method="POST" id="delete-form-{{ $d->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger"
                                    onclick="deleteResource({{ $d->id }})">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<script>
     $('#saveTestiBtn').on('click', function() {
        var form = $('#product_form')[0];
        var formData = new FormData(form);
        $.ajax({
            url: $('#product_form').attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
              $('#pro_testimonal').click();
                // Optionally handle the response from the server
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
