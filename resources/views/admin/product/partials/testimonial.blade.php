 <input type="hidden" name="step" value="pro_testimonial">
 <input type="hidden" name="product_id" value="{{ $product_id }}">
 <div class="row testimonial-div">
     <div class="col-md-6 testimonial-item">
         <div class="card">
             <span class="text-white p-2 btn btn">x</span>
             <div class="card-body">
                 <div class="col-12">
                     <div class="form-group">
                         <label for="testipic">Image <span class="text-danger">(max 300kb)</span></label>
                         <input type="file" name="testi[0][pic]" id="testipic" class="form-control">
                         @error('testi.0.pic')
                             <div class="alert mt-2 text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="form-group">
                         <label for="testiname">Name</label>
                         <input type="text" name="testi[0][name]" id="testiname" class="form-control" required>
                         @error('testi.0.name')
                             <div class="alert mt-2 text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="form-group">
                         <label for="testideg">Designation</label>
                         <input type="text" name="testi[0][designation]" id="testideg" class="form-control"
                             required>
                         @error('testi.0.designation')
                             <div class="alert mt-2 text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="form-group">
                         <label for="testicomment">Comment</label>
                         <input type="text" name="testi[0][comment]" id="testicomment" class="form-control" required>
                         @error('testi.0.comment')
                             <div class="alert mt-2 text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="row">
     <div class="col-12">
         <button class="btn btn-success float-end" onclick="add_testimonial_div()" type="button">+</button>
     </div>
 </div>

 <div class="row mt-5">
     <div class="col-12">
         @if (isset($data))
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th>Sr No</th>
                         <th>Image</th>
                         <th>Name</th>
                         <th>Designation</th>
                         <th>Comment</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($data as $d)
                         <tr>
                             <td>{{ $loop->index + 1 }}</td>
                             <td> @isset($d->media)
                                     <img src="{{ asset('storage/' . $d->media->media) }}" alt="" height="50px"
                                         width="50px">
                                 @endisset
                             </td>
                             <td>{{ $d->name }}</td>
                             <td>{!! $d->designation !!}</td>
                             <td>{!! $d->comment !!}</td>
                             <td>
                                 <form action="{{ route('admin.product.productDelete', 'pro_testimonial/' . $d->id) }}"
                                     method="POST" id="delete-form-{{ $d->id }}">
                                     @csrf
                                     @method('DELETE')
                                     <button type="button"
                                         onclick="deleteResource({{ $d->id }})">Delete</button>
                                 </form>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         @endif
     </div>
 </div>
