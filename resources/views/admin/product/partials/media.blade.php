<input type="hidden" name="step" value="media">
<input type="hidden" name="product_id" value="{{ $product_id }}">
<span class="text-warning">Images must be maximum 1 MB each</span>
<div class="row">
    <div class="col-md-6">
        <label for="main_img">Content Image</label>
        <input type="file" name="main_img" id="main_img" class="form-control" accept="image/*">
    </div>
    <div class="col-md-6">
        <label for="slider_img">Silder Images <span class="text-danger">(Select
                Multiple)</span></label>
        <input type="file" name="slider_img[]" id="main_img" class="form-control" accept="image/*" multiple>
    </div>
</div>

@if($data->media->count()>0)
<div class="row">
    <div class="col-md-12">
        <h6>Main Image</h6>
        <img src="{{ asset('storage/' . $data->content_img->media??'') }}" alt="" class="img-responsive">
    </div>
    @foreach ($data->slide_img as $d)
        <div class="col-md-3 mt-3"> <img src="{{ asset('storage/' . $data->content_img->media??'') }}" alt=""
                class="img-responsive" height="300px">

        </div>
    @endforeach
</div>
@endif  
