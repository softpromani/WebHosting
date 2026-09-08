@extends('admin.includes.layout', ['breadcrumb_title' => 'Blogs'])
@section('title', 'Blogs Management')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        .table-responsive {
            width: 100% !important;
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
        }
        .dataTables_wrapper {
            width: 100% !important;
        }
        #blogTable {
            width: 100% !important;
            min-width: 680px;
            margin-bottom: 0;
        }
        #blogTable th,
        #blogTable td {
            vertical-align: middle;
        }
        #blogTable th {
            background-color: #f8fafc;
            color: #475569;
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            white-space: nowrap;
        }
        #blogTable td {
            font-size: 0.9rem;
            color: #334155;
        }
        #blogTable td:nth-child(3) {
            min-width: 160px;
            font-weight: 600;
        }
        #blogTable td:nth-child(4) {
            min-width: 220px;
            color: #64748b;
            font-size: 0.85rem;
        }
    </style>
@endsection

@section('main-content')
    <div class="card shadow-sm border-0" style="border-radius: 12px; overflow: hidden;">
        <div class="card-header bg-white d-flex align-items-center justify-content-between py-3 border-bottom">
            <h5 class="card-title mb-0 font-weight-bold text-dark">
                <i class="fa-solid fa-newspaper text-primary mr-2"></i> All Published Blogs
            </h5>
            <a class="btn btn-primary btn-sm px-3" style="border-radius: 8px; font-weight: 600;" href="{{ route('admin.blog.create') }}">
                <i class="fa-solid fa-plus mr-1"></i> Add New Blog
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
            <div class="table-responsive">
                <table id="blogTable" class="table table-bordered table-hover w-100">
                    <thead>
                        <tr>
                            <th style="width: 60px;">Sr. No</th>
                            <th style="width: 80px;">Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
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
                "responsive": false,
                "scrollX": true,
                "autoWidth": false,
                "lengthChange": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('admin.blog.index') }}",
                "columns": [
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return '<span class="font-weight-bold text-muted">' + (meta.row + 1 + meta.settings._iDisplayStart) + '</span>';
                        }
                    },
                    {
                        "data": "blog_image",
                        "orderable": false,
                        "searchable": false
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
                ],
                "language": {
                    "search": "_INPUT_",
                    "searchPlaceholder": "Search blogs..."
                }
            });

            $('#blogTable').on('click', '.delete-blog', function() {
                var id = $(this).data('id');
                var newurl = "{{ route('admin.blog.destroy', '') }}/" + id;

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this blog post!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#2563eb',
                    cancelButtonColor: '#ef4444',
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
                                    'Blog has been successfully deleted.',
                                    'success'
                                );
                            },
                            error: function(response) {
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the blog.',
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

