 <div class="row feature-div">
     <input type="hidden" name="step" value="feature">
     <input type="hidden" name="product_id" value="{{ $product_id }}">


     <div class="col-md-6 feature-item">
         <div class="card">
             <span class="text-white p-2 btn feature-del">x</span>
             <div class="card-body">
                 <div class="col-12">

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
 <div class="row mt-5">
     <div class="col-12">
         @if (isset($data))
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th>Sr No</th>
                         <th>Icon</th>
                         <th>Title</th>
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
                             <td>{!! $d->detail !!}</td>
                             <td>
                                <form action="{{ route('admin.product.destroy','feature/'.$d->id) }}" method="POST"
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
         .create(document.querySelector('.feature_desc'))
         .catch(error => {
             console.error(error);
         });

   
 </script>
