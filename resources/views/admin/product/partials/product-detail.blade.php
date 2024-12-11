<div class="card">
    <div class="card-body">
        <input type="hidden" name="step" value="pro_detail">
        @if (isset($product_id))
            <input type="hidden" name="product_id" value="{{ $product_id }}">
        @endif
        <div class="row">
            <div class="col-sm-6">
                <label for="menu_id">Product Category</label>
                <select name="menu_id" id="menu_id" class="form-control" required>
                    <option value="" disabled>--select menu--</option>
                    @php
                        $menu = \App\Models\Menu::whereNotNull('parent_id')->get();
                    @endphp
                    @foreach ($menu as $m)
                        <option value="{{ $m->id }}"
                            @isset($data)@selected($data->menu_id == $m->id)@endisset>
                            {{ $m->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="product_title" id=""
                        value="{{ isset($data->product_title) ? $data->product_title : '' }}">
                </div>
                @error('product_title')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="meta_keyword">Meta Keywords <small class="text-danger">(multiple Seperate with
                            ',')</small></label>
                    <input class="form-control" type="text" name="meta_keyword" id="meta_keyword"
                        value="{{ isset($data->meta_keyword) ? $data->meta_keyword : '' }}">
                </div>
                @error('meta_keyword')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="meta_desc">Meta Description</label>
                    <input class="form-control" type="text" name="meta_description" id="meta_desc"
                        value="{{ isset($data->meta_description) ? $data->meta_description : '' }}">
                </div>
                @error('meta_description')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="form-group productdesc">
                    <label for="product_desciption">Product Description</label>
                    <textarea name="product_description" id="product_description" class="product_description"> {!! isset($data->product_description) ? $data->product_description : '' !!} </textarea>
                </div>
                @error('product_desciption')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="form-group productdesc">
                    <label for="service_title">Service Title</label>
                    <textarea name="service_title" id="service_title" class="service_title"> {!! isset($data->service_title) ? $data->service_title : '' !!} </textarea>
                </div>
                @error('service_title')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="form-group productdesc">
                    <label for="service_description_1">Service Description 1</label>
                    <textarea name="service_description_1" id="service_description_1" class="product_description"> {!! isset($data->service_description_1) ? $data->service_description_1 : '' !!} </textarea>
                </div>
                @error('service_description_1')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="form-group productdesc">
                    <label for="service_description_2">Service Description 2</label>
                    <textarea name="service_description_2" id="service_description_2" class="product_description"> {!! isset($data->service_description_2) ? $data->service_description_2 : '' !!} </textarea>
                </div>
                @error('service_description_2')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="business_service">Layout</label>
                            <div class="d-flex align-items-center">
                                <div class="form-check me-5">
                                    <input class="form-check-input" type="radio" name="layout" id="business_service"
                                        value="business_service"
                                        @isset($data)@checked($data->layout == 'business_service')@endisset>
                                    <label class="form-check-label" for="business_service">
                                        Business Service
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="layout" id="pricePlan"
                                        value="pricePlan"
                                        @isset($data) @checked($data->layout == 'pricePlan')
                                    @endisset>
                                    <label class="form-check-label" for="pricePlan">
                                        Price Plan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="main_img">Content Image</label>
                            <input type="file" name="main_img" id="main_img" class="form-control"
                                accept="image/*">
                        </div>
                        <div>
                            <div class="conImage">
                                <img id="imagePreview" src="#" alt="Image preview"
                                    style="display: none; width: 150px; height: 150px; border-radius:5px;">
                            </div>
                            @if (isset($data->content_img))
                                <img src="{{ asset('storage/' . $data->content_img->media ?? '') }}" alt=""
                                    class="img-responsive content-image" id="content-image"
                                    style=" width: 150px; height: 150px; border-radius:5px;">
                            @endif
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="meta_page"> Meta Page</label>
                    <textarea name="meta_page" class="form-control" id="meta_page" rows="4">{{ isset($data->meta_page) ? $data->meta_page : '' }}</textarea>
                </div>
                @error('meta_page')
                    <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
                @enderror
            </div>


        </div>

        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Save Detail</button>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                ClassicEditor
                    .create(document.querySelector('#product_description'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#service_description_1'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#service_description_2'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#service_title'))
                    .catch(error => {
                        console.error(error);
                    });
                
                $('#main_img').on('change', function() {
                    var input = this;
                    if (input.files && input.files[0] && input.files[0].type.startsWith('image/')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#imagePreview').attr('src', e.target.result).show();
                        };

                        reader.readAsDataURL(input.files[0]);
                    } else {
                        alert('Please select a valid image file.');
                        $('#imagePreview').hide();
                    }
                });
            });
        </script>
    </div>
</div>
