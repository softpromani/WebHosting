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
                 $menu = \App\Models\Menu::get();
             @endphp
             @foreach ($menu as $m)
                 <option value="{{ $m->id }}">{{ $m->name }}</option>
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
     <div class="col-sm-12">
         <div class="form-group productdesc">
             <label for="product_desciption">Product Description</label>
             <textarea name="product_description" id="product_description" class="product_description"> {!! isset($data->product_description) ? $data->product_description : '' !!} </textarea>
         </div>
         @error('product_desciption')
             <div class="alert mt-2" style=" color:rgb(255, 60, 0); ">{{ $message }}</div>
         @enderror
     </div>
 </div>
 <script>
     $(document).ready(function() {
         ClassicEditor
             .create(document.querySelector('#product_description'))
             .catch(error => {
                 console.error(error);
             });
     });
 </script>
