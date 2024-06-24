
<div class="row faq-div">
    <div class="col-md-6">
        <div class="card">
            <span class="text-white p-2 btn btn">x</span>
            <div class="card-body">
                <div class="col-12">
                    <div class="form-group">
                        <label for="faqheading">Question ?</label>
                        <input type="text" name="faq[]['heading']" class="form-control" id="faqheading" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faqans">Answer </label>
                        <input type="text" name="faq[]['ans']" class="form-control" id="faqans" required>
                    </div>
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
