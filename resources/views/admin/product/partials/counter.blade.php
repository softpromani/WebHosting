 <input type="hidden" name="step" value="pro_counter">
 <input type="hidden" name="product_id" value="{{ $product_id }}">
 <div class="row counter-div">
     <div class="col-md-6 counter-item">
         <div class="card">
             <span class="text-white p-2 btn btn">x</span>
             <div class="card-body">
                 <div class="col-12">
                     <div class="form-group">
                         <label for="counter_icon">Icon <small class="text-danger">(icon class from
                                 <a href="https://fontawesome.com/icons" target="_blank">here
                                     ...</a>)</small></label>
                         <input type="text" name="counter[0][icon]" id="feature_icon" class="form-control" required>
                     </div>
                     @error('counter.0.icon')
                         <div class="alert mt-2 text-danger">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="col-12">
                     <div class="form-group">
                         <label for="counter_count">Count </label>
                         <input type="number" name="counter[0][count]" id="counter_count" class="form-control"
                             required>
                     </div>
                     @error('counter.0.count')
                         <div class="alert mt-2 text-danger">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="col-12">
                     <div class="form-group">
                         <label for="counter_title">Title </label>
                         <input type="text" name="counter[0][title]" id="counter_title" class="form-control"
                             required>
                     </div>
                     @error('counter.0.title')
                         <div class="alert mt-2 text-danger">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-12">
         <button class="btn btn-success float-end" onclick="add_counter_div()" type="button">+</button>
     </div>
 </div>

 <div class="row">
     <div class="col-12">
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th>Sr No</th>
                     <th>Icon</th>
                     <th>Title</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($data as $d)
                     <tr>
                         <td>{{ $loop->index + 1 }}</td>
                         <td>{{ $d->icon }}</td>
                         <td>{{ $d->title }}</td>
                         <td>
                             <form action="{{ route('admin.product.destroy', 'pro_counter/' . $d->id) }}" method="POST"
                                 id="delete-form-{{ $d->id }}">
                                 @csrf
                                 @method('DELETE')
                                 <button type="button" onclick="deleteResource({{ $d->id }})">Delete</button>
                             </form>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </div>
