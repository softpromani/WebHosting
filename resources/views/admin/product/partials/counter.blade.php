 <div class="row counter-div">
     <div class="col-md-6 counter-item">
         <div class="card">
             <span class="text-white p-2 btn btn">x</span>
             <div class="card-body">
                 <div class="col-12">
                     <input type="hidden" name="step" value="pro_counter">
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
