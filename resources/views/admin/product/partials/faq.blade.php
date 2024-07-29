<input type="hidden" name="step" value="faqs">
<input type="hidden" name="product_id" value="{{ $product_id }}">
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="faqheading">Question ?</label>
                    <input type="text" name="faq[question]" class="form-control" id="faqheading" required>
                </div>
                @error('faq.0.question')
                    <div class="alert mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="faqans">Answer </label>
                    <input type="text" name="faq[answer]" class="form-control" id="faqans" required>
                </div>
                @error('faq.0.answer')
                    <div class="alert mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary float-end" type="button" id='saveFaqBtn'>Submit</button>
            </div>
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
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $d->question }}</td>
                            <td>{!! $d->answer !!}</td>
                            <td>
                                <form action="{{ route('admin.product.productDelete', 'pro_testimonial/' . $d->id) }}"
                                    method="POST" id="delete-form-{{ $d->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="deleteResource({{ $d->id }})">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
<script>
    $('#saveFaqBtn').on('click', function() {
       var form = $('#product_form')[0];
       var formData = new FormData(form);
       $.ajax({
           url: $('#product_form').attr('action'),
           type: 'POST',
           data: formData,
           processData: false,
           contentType: false,
           success: function(response) {
             $('#faqs').click();
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
