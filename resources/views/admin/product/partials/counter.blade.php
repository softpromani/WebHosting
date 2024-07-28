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
        <input type="hidden" name="step" value="pro_counter">
        <input type="hidden" name="product_id" value="{{ isset($product_id) ? $product_id : ''   }}">
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
    let counterIndex = 1;

    function add_counter_div() {
        var currentCounterIndex = document.querySelectorAll('.counter-item').length;

        var counterdiv = `<div class="col-md-12 counter-item mt-5" data-index="${currentCounterIndex}" data-initial="false">
                    <div class="card">
                        <span class="text-danger p-2 btn counter-del">x</span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="counter_icon_${currentCounterIndex}">Icon <small class="text-danger">(icon class from <a
                                                    href="https://fontawesome.com/icons" target="_blank">here
                                                    ...</a>)</small></label>
                                        <input type="text" name="counter[${currentCounterIndex}][icon]" id="counter_icon_${currentCounterIndex}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="counter_count_${currentCounterIndex}">Count </label>
                                        <input type="number" name="counter[${currentCounterIndex}][count]" id="counter_count_${currentCounterIndex}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="counter_title_${currentCounterIndex}">Title </label>
                                        <input type="text" name="counter[${currentCounterIndex}][title]" id="counter_title_${currentCounterIndex}" class="form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;

        $('.counter-div').append(counterdiv);

        counterIndex++; // Increment counterIndex for next added counter
    }

    $(document).on('click', '.counter-del', function() {
        $(this).closest('.col-md-12').remove();
    });

    $(document).ready(function() {
        $('#saveCounterBtn').on('click', function() {
            var counters = [];

            $('.counter-item').each(function() {
                var counterId = $(this).data('index');
                var counter = {
                    icon: $(this).find('input[name^="counter"][name$="[icon]"]').val(),
                    count: $(this).find('input[name^="counter"][name$="[count]"]').val(),
                    title: $(this).find('input[name^="counter"][name$="[title]"]').val()
                };
                counters.push(counter);
            });

            updateCounterTable(counters);
        });

        function updateCounterTable(counters) {
            var tableBody = $('table tbody');
            tableBody.empty();

            $.each(counters, function(index, counter) {
                var row = `<tr data-index="${index}">
                    <td>${index + 1}</td>
                    <td>${counter.icon}</td>
                    <td>${counter.count}</td>
                    <td>${counter.title}</td>
                    <td><button class="btn btn-danger btn-sm delete-counter" data-id="${index}">Delete</button></td>
                </tr>`;
                tableBody.append(row);
            });
        }

        $(document).on('click', '.delete-counter', function() {
            var rowIndex = $(this).data('id');
            var counterItem = $(`.counter-item[data-index="${rowIndex}"]`);

            if (counterItem.data('initial') === true) {
                // Clear the input values if it's an initial counter
                counterItem.find('input[type="text"]').val(''); // Clear text inputs
                counterItem.find('input[type="number"]').val(''); // Clear number inputs
            } else {
                // Remove the entire div if it's a dynamically added counter
                counterItem.remove();
            }
            
            $(this).closest('tr').remove(); // Remove the table row
        });
    });

    $(document).on('click', '.counter-del', function() {
        $(this).closest('.col-md-12').remove();
    });
</script>
