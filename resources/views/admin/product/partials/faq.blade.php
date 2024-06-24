<div class="row faq-div">
    <div class="col-md-6 faq-item">
        <div class="card">
            <span class="text-white p-2 btn faq-del">x</span>
            <div class="card-body">
                <div class="col-12">
                    <input type="hidden" name="step" value="faqs">
                    <div class="form-group">
                        <label for="faqheading">Question ?</label>
                        <input type="text" name="faq[0][question]" class="form-control" id="faqheading" required>
                    </div>
                    @error('faq.0.question')
                        <div class="alert mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faqans">Answer </label>
                        <input type="text" name="faq[0][answer]" class="form-control" id="faqans" required>
                    </div>
                    @error('faq.0.answer')
                        <div class="alert mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <button class="btn btn-success float-end" onclick="add_faq_div()" type="button">+</button>
    </div>
</div>
