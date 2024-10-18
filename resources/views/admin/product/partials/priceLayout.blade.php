<style>
    .feaCard {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 3px solid rgba(0, 0, 0, 0.411);
        border-radius: .25rem;
    }
</style>
<div class="card feaCard">
    <div class="card-body">
        <input type="hidden" name="step" value="layout">
        <input type="hidden" name="product_id" value="{{ isset($product_id) ? $product_id : '' }}">
        <div class="row counter-div">
            <div class="col-md-12 counter-item">
                <div class="card">
                    <span class="text-white p-2 btn counter-del">x</span>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="counter_icon">Icon <small class="text-danger">(icon class from
                                            <a href="https://fontawesome.com/icons" target="_blank">here
                                                ...</a>)</small></label>
                                    <input type="text" name="counter[0][icon]" id="counter_icon" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="counter_count">Count </label>
                                    <input type="number" name="counter[0][count]" id="counter_count"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="counter_title">Title </label>
                                    <input type="text" name="counter[0][title]" id="counter_title"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success float-end" onclick="add_counter_div()" type="button">+</button>
            </div>
            <div class="col-lg-12 float-end">
                <button id="saveCounterBtn" type="button" class="btn btn-primary mt-3 float-end saveCounterData">Save
                    Counter</button>
            </div>
        </div>
    </div>
</div>

<div class="card feaCard">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Icon</th>
                            <th>Count</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>

</script>
