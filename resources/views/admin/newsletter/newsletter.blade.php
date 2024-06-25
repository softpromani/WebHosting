@extends('admin.includes.layout', ['breadcrumb_title' => 'Newsletter '])
@section('title', 'Newsletter List')

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Newsletter subscribers </h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr. no</th>
                        <th>Email</th>
                        <th>Status</th>
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
    <script>
        $(function() {
            $('#example1').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('admin.newsletter.index') }}",
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "is_active",
                        "render": function(data, type, row) {
                            if (data == 1) {
                                return '<span style="color: green;">Active</span>';
                            } else {
                                return '<span style="color: red;">Inactive</span>';
                            }
                        }
                    }
                ]
            });
        });
    </script>


@endsection
