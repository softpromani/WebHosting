@extends('admin.includes.layout', ['breadcrumb_title' => 'Testimonial '])
@section('title', 'Testimonial')

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Testimonial  </h3>
            <a class="btn btn-primary float-end" href="{{ route('admin.testimonial.create') }}">+ Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="testimonialTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr. no</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Description</th>
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
            $('#testimonialTable').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('admin.testimonial.index') }}",
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "pic"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "position"
                    },
                    {
                        "data": "description"
                    },
                    {
                        "data": "action",
                        "orderable": false,
                        "searchable": false
                    }
                ]
            });


            $('#testimonialTable').on('click', '.delete-team', function() {
                var id = $(this).data('id');
                var newurl = "{{ route('admin.testimonial.destroy', '') }}/" + id;

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
                                $('#testimonialTable').DataTable().ajax.reload();
                                Swal.fire(
                                    'Deleted!',
                                    'Testimonial has been deleted.',
                                    'success'
                                );
                            },
                            error: function(response) {
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting this Testimonial.',
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
