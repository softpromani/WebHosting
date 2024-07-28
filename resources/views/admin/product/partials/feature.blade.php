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
        <div class="row feature-div">
            <input type="hidden" name="step" value="feature">
            <input type="hidden" name="product_id" value="{{ isset($product_id) ? $product_id : '' }}">

            <div class="col-md-12 feature-item" data-index="0">
                <div class="card">
                    <span class="text-white btn feature-del">x</span>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="feature_icon_0">Icon <small class="text-danger">(icon class from
                                                    <a href="https://fontawesome.com/icons" target="_blank">here
                                                        ...
                                                    </a>)</small>
                                            </label>
                                            <input type="text" name="feature[0][icon]" id="feature_icon_0"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="feature_title_0">Title </label>
                                            <input type="text" name="feature[0][title]" id="feature_title_0"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="feature_desc_0">Detail </label>
                                    <textarea name="feature[0][detail]" id="feature_desc_0" class="form-control feature_desc"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 float-end">
                <button type="button" class="btn btn-success mt-3 float-end" onclick="add_feature_div()">+</button>
            </div>
            <div class="col-lg-12 float-end">
                <button id="saveFeatureBtn" type="button" class="btn btn-primary mt-3 float-end saveFeatureData">Save
                    Feature</button>
            </div>
        </div>
    </div>
</div>








<div class="card feaCard">
    <div class="card-body">
        <div class="row mt-5">
            <div class="col-12">
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
                        @if (isset($data))
                            @foreach ($data as $$d)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td> <i class="{{ $d->icon }}"></i></td>
                                    <td>{{ $d->title }}</td>
                                    <td>{!! $d->detail !!}</td>
                                    <td>
                                        <form action="{{ route('admin.product.productDelete', 'feature/' . $d->id) }}"
                                            method="POST" id="delete-form-{{ $d->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                onclick="deleteResource({{ $d->id }})">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script>
    var editors = {};

    ClassicEditor
        .create(document.querySelector('.feature_desc'))
        .then(editor => {
            editors['feature_desc_0'] = editor;
        })
        .catch(error => {
            console.error(error);
        });

    let featureIndex = 1;

    function add_feature_div() {
        var currentFeatureIndex = document.querySelectorAll('.feature-item').length;

        var featdiv = `<div class="col-md-12 feature-item mt-3" data-index="${currentFeatureIndex}">
                <hr class="custom-style mb-3">
            <div class="card mt-5">
                <span class="text-danger p-2 btn feature-del">X</span>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="feature_icon_${currentFeatureIndex}">Icon <small class="text-danger">(icon class from <a
                                                    href="https://fontawesome.com/icons" target="_blank">here
                                                    ...</a>)</small></label>
                                        <input type="text" name="feature[${currentFeatureIndex}][icon]" id="feature_icon_${currentFeatureIndex}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_title_${currentFeatureIndex}">Title </label>
                                        <input type="text" name="feature[${currentFeatureIndex}][title]" id="feature_title_${currentFeatureIndex}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                                <label for="feature_desc_${currentFeatureIndex}">Detail </label>
                                <textarea name="feature[${currentFeatureIndex}][detail]" id="feature_desc_${currentFeatureIndex}" class="form-control feature_desc"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>`;

        $('.feature-div').append(featdiv);

        ClassicEditor.create(document.getElementById(`feature_desc_${currentFeatureIndex}`))
            .then(editor => {
                editors[`feature_desc_${currentFeatureIndex}`] = editor;
                console.log(`Editor created for feature_desc_${currentFeatureIndex}`);
            })
            .catch(error => {
                console.error(error);
            });

        featureIndex++; // Increment featureIndex for next added feature
    }

    $(document).on('click', '.feature-del', function() {
        var featureId = $(this).closest('.feature-item').find('textarea').attr('id');
        delete editors[featureId]; // Remove the editor instance from editors object
        $(this).closest('.col-md-12').remove();
    });

    $(document).ready(function() {
        $('#saveFeatureBtn').on('click', function() {
            var features = [];

            $('.feature-item').each(function() {
                var featureId = $(this).find('textarea').attr('id');
                console.log("Feature ID:", featureId);
                var feature = {
                    icon: $(this).find('input[name^="feature"][name$="[icon]"]').val(),
                    title: $(this).find('input[name^="feature"][name$="[title]"]').val(),
                    detail: editors[featureId] ? editors[featureId].getData() : ''
                };
                features.push(feature);
            });

            updateFeatureTable(features);
        });

        function updateFeatureTable(features) {
            var tableBody = $('table tbody');
            tableBody.empty();

            $.each(features, function(index, feature) {
                var row = `<tr data-index="${index}">
                    <td>${index + 1}</td>
                    <td>${feature.icon}</td>
                    <td>${feature.title}</td>
                    <td>${feature.detail}</td>
                    <td><button class="btn btn-danger btn-sm delete-feature" data-id="${index}">Delete</button></td>
                </tr>`;
                tableBody.append(row);
            });
        }

        $(document).on('click', '.delete-feature', function() {
            var rowIndex = $(this).data('id');
            var featureItem = $(`.feature-item[data-index="${rowIndex}"]`);

            featureItem.find('input[type="text"]').val(''); // Clear text inputs
            var featureId = featureItem.find('textarea').attr('id');
            if (editors[featureId]) {
                editors[featureId].setData(''); // Clear CKEditor content
            }

            $(this).closest('tr').remove(); // Remove the table row
        });
    });

    $(document).on('click', '.feature-del', function() {
        var featureId = $(this).closest('.feature-item').find('textarea').attr('id');
        delete editors[featureId]; // Remove the editor instance from editors object
        $(this).closest('.col-md-12').remove();
    });
</script>
