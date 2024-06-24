<div class="row testimonial-div">
    <div class="col-md-6 testimonial-item">
        <div class="card">
            <span class="text-white p-2 btn btn">x</span>
            <div class="card-body">
                <div class="col-12">
                    <div class="form-group">
                        <input type="hidden" name="step" value="pro_testimonal">
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
                        <input type="text" name="testi[0][designation]" id="testideg" class="form-control" required>
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
