@extends('admin.includes.layout', ['breadcrumb_title' => 'Plan '])
@section('title', 'Plan')

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Price Plan </h3>
            <a class="btn btn-primary float-end" href="{{ route('admin.price-plan.create') }}">+ Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="pricePlan" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr. no</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Billing Cycle</th>
                        <th>Trial Days</th>
                        <th>Features</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

@endsection
@section('script-area')

    <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#pricePlan').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('admin.price-plan.index') }}",
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "title"
                    },
                    {
                        "data": "price"
                    },
                    {
                        "data": "billing_cycle"
                    },
                    {
                        "data": "trial_days"
                    },
                    {
                        "data": "features",
                        "render": function(data, type, row) {
                            try {

                                var features = JSON.parse(data);
                                return features.join(', ');
                            } catch (e) {
                                return data;
                            }
                        }
                    },
                    {
                        "data": "action",
                        "orderable": false,
                        "searchable": false
                    }
                ]
            });

            $('#pricePlan').on('click', '.delete-blog', function() {
                var id = $(this).data('id');
                var newurl = "{{ route('admin.price-plan.destroy', '') }}/" + id;

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: newurl,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                $('#pricePlan').DataTable().ajax.reload();
                                Swal.fire(
                                    'Deleted!',
                                    'Plan has been deleted.',
                                    'success'
                                );
                            },
                            error: function(response) {
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the plan.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>



@endsection
