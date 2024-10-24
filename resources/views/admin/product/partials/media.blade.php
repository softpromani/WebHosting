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
<input type="hidden" name="product_id" value="{{ session()->has('product_id') ? session()->get('product_id') : '1' }}">
<div class="card">
    <div class="card-body">
        <span class="text-warning">Images must be maximum 1 MB each</span>
        <div class="row">
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
                <label for="product_banner">Product Banner <span class="text-danger"></span></label>
                <input type="file" name="product_banner" id="product_banner" class="form-control" accept="image/*">
            </div>
            <div class="col-md-6 mb-3">
                <label for="service_section2">Service Description 2 <span class="text-danger"></span></label>
                <input type="file" name="service_section2" id="service_section2" class="form-control"
                    accept="image/*">
            </div>
        </div>
        <input type="hidden" name="removed_images" id="removed_images">
        @if (isset($data))
            @if ($data && $data->media->count() > 0)
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="row">

                            @if ($data->faqImg)
                                <div class="col-md-4 mb-3">
                                    <h5>Faqs Image</h5>
                                    <img src="{{ asset('storage/' . $data->faqImg->media ?? '') }}" alt=""
                                        class="img-responsive content-image me-4">
                                </div>
                            @endif

                            @if ($data->product_banner)
                                <div class="col-md-4 mb-3">
                                    <h5>Product Banner</h5>
                                    <img src="{{ asset('storage/' . $data->product_banner->media ?? '') }}"
                                        alt="" class="img-responsive content-image me-4">
                                </div>
                            @endif
                            @if ($data->serviceSection2)
                                <div class="col-md-4 mb-3">
                                    <h5>Service Section 2</h5>
                                    <img src="{{ asset('storage/' . $data->serviceSection2->media ?? '') }}"
                                        alt="" class="img-responsive content-image me-4">
                                </div>
                            @endif
                        </div>


                    </div>
                    @isset($data->slide_img)
                        <div class="col-md-12 mt-5">
                            <div class="row">
                                <h4 class="mt-3">Slider Image</h4>
                                @foreach ($data->slide_img as $d)
                                    <div class="col-md-3">
                                        <div class="mt-3 image-container" style="position: relative;">
                                            <img src="{{ asset('storage/' . $d->media ?? '') }}" alt=""
                                                class="img-responsive slide-image">

                                            <!-- Cross Button to Remove Image -->
                                            <button type="button" class="btn btn-danger btn-sm remove-image-btn me-3 mt-2"
                                                data-media-id="{{ $d->id }}"
                                                style="position: absolute; top: 5px; right: 5px;">
                                                X
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endisset

                </div>
            @endif
        @endif


    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-12 text-end">
                <button class="btn btn-primary ">Submit</button>
            </div>
        </div>
    </div>


</div>


<script>
    let removedImages = [];
    $('.remove-image-btn').on('click', function() {
        const mediaId = $(this).data('media-id');
        $(this).closest('.image-container').fadeOut();
        removedImages.push(mediaId); // Add media ID to the array
        $('#removed_images').val(JSON.stringify(removedImages)); // Update hidden input field
    });
</script>
