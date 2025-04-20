@extends('admin.includes.layout', ['breadcrumb_title' => 'Faq '])
@section('title', 'Faq')

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Faq </h3>
            <a class="btn btn-primary float-end" href="{{ route('admin.faqs.create') }}">+ Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="faqTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr. no</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Page</th>
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
            $('#faqTable').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('admin.faqs.index') }}",
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "question"
                    },
                    {
                        "data": "answer"
                    },
                    {
                        "data": "type"
                    },
                    {
                        "data": "action",
                        "orderable": false,
                        "searchable": false
                    }
                ]
            });


            $('#faqTable').on('click', '.delete-faq', function() {
                var id = $(this).data('id');
                var newurl = "{{ route('admin.faqs.destroy', '') }}/" + id;

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
                                $('#faqTable').DataTable().ajax.reload();
                                Swal.fire(
                                    'Deleted!',
                                    'FAQ has been deleted.',
                                    'success'
                                );
                            },
                            error: function(response) {
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the FAQ.',
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
