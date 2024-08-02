@extends('admin.includes.layout', ['breadcrumb_title' => 'BLog '])
@section('title', 'Blog')

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">BLog </h3>
            <a class="btn btn-primary float-end" href="{{ route('admin.blog.create') }}">+ Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="blogTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr. no</th>
                        <th>Image</th>
                        <th>title</th>
                        <th>description</th>
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
            $('#blogTable').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('admin.blog.index') }}",
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "blog_image"
                    },
                    {
                        "data": "title"
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


            $('#blogTable').on('click', '.delete-blog', function() {
                var id = $(this).data('id');
                var newurl = "{{ route('admin.blog.destroy', '') }}/" + id;

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
                                $('#blogTable').DataTable().ajax.reload();
                                Swal.fire(
                                    'Deleted!',
                                    'Blog has been deleted.',
                                    'success'
                                );
                            },
                            error: function(response) {
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the BLog.',
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
