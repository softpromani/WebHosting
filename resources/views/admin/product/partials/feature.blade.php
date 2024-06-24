 <div class="row feature-div">
     <div class="col-md-6 feature-item">
         <div class="card">
             <span class="text-white p-2 btn feature-del">x</span>
             <div class="card-body">
                 <div class="col-12">
                     <input type="hidden" name="step" value="feature">
                     <input type="hidden" name="product_id" value="{{ $product_id }}">


                     <div class="form-group">
                         <label for="feature_icon_0">Icon <small class="text-danger">(icon class from
                                 <a href="https://fontawesome.com/icons" target="_blank">here ...</a>)</small></label>
                         <input type="text" name="feature[0][icon]" id="feature_icon_0" class="form-control"
                             value="{{ isset($data->icon) ? $data->icon : '' }}">
                     </div>
                     @error('feature.0.icon')
                         <div class="alert mt-2 text-danger">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="col-12">
                     <div class="form-group">
                         <label for="feature_title_0">Title </label>
                         <input type="text" name="feature[0][title]" id="feature_title_0" class="form-control"
                             value="{{ isset($data->title) ? $data->title : '' }}">
                     </div>
                     @error('feature.0.title')
                         <div class="alert mt-2 text-danger">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="col-12">
                     <div class="form-group">
                         <label for="feature_desc_0">Detail </label>
                         <textarea name="feature[0][detail]" id="feature_desc_0" class="form-control feature_desc"
                             value="{{ isset($data->detail) ? $data->detail : '' }}"></textarea>
                     </div>
                     @error('feature.0.detail')
                         <div class="alert mt-2 text-danger">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="row">
     <div class="col-12 float-end">
         <button type="button" class="btn btn-success mt-3 float-end" onclick="add_feature_div()"
             type="button">+</button>
     </div>
 </div>
 <script>
     ClassicEditor
         .create(document.querySelector('.feature_desc'))
         .catch(error => {
             console.error(error);
         });
 </script>
