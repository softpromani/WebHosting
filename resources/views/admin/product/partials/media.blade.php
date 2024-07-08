<style>
    .image-container {
        padding: 5px;
        height: 250px;
    }

    .slide-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    .content-image {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 5px;
    }
</style>
<input type="hidden" name="step" value="media">
<input type="hidden" name="product_id" value="{{ $product_id }}">
<span class="text-warning">Images must be maximum 1 MB each</span>
<div class="row">
    <div class="col-md-6 mb-3 mt-3">
        <label for="main_img">Content Image</label>
        <input type="file" name="main_img" id="main_img" class="form-control" accept="image/*">
    </div>
    <div class="col-md-6 mb-3">
        <label for="slider_img">Silder Images <span class="text-danger">(Select
                Multiple)</span></label>
        <input type="file" name="slider_img[]" id="slide_img" class="form-control" accept="image/*" multiple>
    </div>
    <div class="col-md-6 mb-3">
        <label for="faq_img">Faqs Images</span></label>
        <input type="file" name="faq_img" id="faq_img" class="form-control" accept="image/*">
    </div>
    <div class="col-md-6 mb-3">
        <label for="whyUs_img">Why Us Images <span class="text-danger"></span></label>
        <input type="file" name="whyUs_img" id="whyUs_img" class="form-control" accept="image/*">
    </div>
    <div class="col-md-6 mb-3">
        <label for="product_banner">Product Banner <span class="text-danger"></span></label>
        <input type="file" name="product_banner" id="product_banner" class="form-control" accept="image/*">
    </div>
</div>

@if ($data && $data->media->count() > 0)
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row">
                @if ($data->content_img)
                    <div class="col-md-4 mb-3">
                        <h5>Main Image</h5>
                        <img src="{{ asset('storage/' . $data->content_img->media ?? '') }}" alt=""
                            class="img-responsive content-image">
                    </div>
                @endif
                @if ($data->faqImg)
                    <div class="col-md-4 mb-3">
                        <h5>Faqs Image</h5>
                        <img src="{{ asset('storage/' . $data->faqImg->media ?? '') }}" alt=""
                            class="img-responsive content-image">
                    </div>
                @endif
                @if ($data->whyUsImg)
                    <div class="col-md-4 mb-3">
                        <h5>Why Us Image</h5>
                        <img src="{{ asset('storage/' . $data->whyUsImg->media ?? '') }}" alt=""
                            class="img-responsive content-image">
                    </div>
                @endif
                @if ($data->product_banner)
                    <div class="col-md-6 mb-3">
                        <h5>Product Banner</h5>
                        <img src="{{ asset('storage/' . $data->product_banner->media ?? '') }}" alt=""
                            class="img-responsive content-image">
                    </div>
                @endif
            </div>


        </div>
        <div class="col-md-12 mt-5">
            <div class="row">
                <h4 class="mt-3">Slider Image</h4>
                @foreach ($data->slide_img as $d)
                    <div class="col-md-3">
                        <div class="mt-3 image-container">
                            <img src="{{ asset('storage/' . $d->media ?? '') }}" alt=""
                                class="img-responsive slide-image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endif
