<div class="row whyus-div">
    <input type="hidden" name="step" value="whyus">
    <input type="hidden" name="product_id" value="{{ $product_id }}">


    <div class="col-md-6 whyus-item">
        <div class="card">
            <span class="text-white p-2 btn whyus-del">x</span>
            <div class="card-body">
                <div class="col-12">

                    <div class="form-group">
                        <label for="whyusicon_0">Icon <small class="text-danger">(icon class from
                                <a href="https://fontawesome.com/icons" target="_blank">here ...</a>)</small></label>
                        <input type="text" name="whyus[0][icon]" id="whyusicon_0" class="form-control"
                            value="{{ isset($data->icon) ? $data->icon : '' }}">
                    </div>
                    @error('whyus.0.icon')
                        <div class="alert mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="whyus_title_0">Title </label>
                        <input type="text" name="whyus[0][title]" id="whyus_title_0" class="form-control"
                            value="{{ isset($data->title) ? $data->title : '' }}">
                    </div>
                    @error('whyus.0.title')
                        <div class="alert mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="col-12">
                    <div class="form-group">
                        <label for="whyus_colour_0">Colour </label>
                        <input type="text" name="whyus[0][colour]" id="whyus_colour_0" class="form-control"
                            value="{{ isset($data->colour) ? $data->colour : '' }}">
                    </div>
                    @error('whyus.0.colour')
                        <div class="alert mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="col-12">
                    <div class="form-group">
                        <label for="whyus_desc_0">Detail </label>
                        <textarea name="whyus[0][detail]" id="whyus_desc_0" class="form-control whyus_desc"
                            value="{{ isset($data->detail) ? $data->detail : '' }}"></textarea>
                    </div>
                    @error('whyus.0.detail')
                        <div class="alert mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-12 float-end">
        <button type="button" class="btn btn-success mt-3 float-end" onclick="add_whyus_div()"
            type="button">+</button>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
        @if (isset($data))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Colour</th>
                        <th>Detail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td> <i class="{{ $d->icon }}"></i></td>
                            <td>{{ $d->title }}</td>
                            <td>{{ $d->colour }}</td>
                            <td>{!! $d->detail !!}</td>
                            <td>
                               <form action="{{ route('admin.product.destroy','whyus/'.$d->id) }}" method="POST"
                                id="delete-form-{{ $d->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteResource({{ $d->id }})">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('.whyus_desc'))
        .catch(error => {
            console.error(error);
        });

  
</script>
