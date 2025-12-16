@extends('admin.includes.layout', ['breadcrumb_title' => 'Ticket Submission'])
@section('title', 'Ticket Submission')

@section('main-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Ticket Submissions</h3>
        <a class="btn btn-primary float-end" href="{{ route('admin.ticketsubmission.create') }}">+ Add New</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Company</th>
                    <th>User</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $index => $ticket)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $ticket->name }}</td>
                    <td>{{ $ticket->phone }}</td>
                    <td>{{ $ticket->email }}</td>
                    <td>{{ $ticket->subject }}</td>
                    <td>{{ $ticket->company_name }}</td>
                    <td>{{ $ticket->user_name }}</td>
                    <td>{{ Str::limit($ticket->message, 50) }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('admin.ticketsubmission.edit', $ticket->id) }}" class="btn btn-sm btn-primary" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $ticket->id }}" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script-area')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.delete-btn').click(function() {
        const id = $(this).data('id');
        const url = "{{ route('admin.ticketsubmission.destroy', ':id') }}".replace(':id', id);

        Swal.fire({
            title: "Are you sure?",
            text: "This action cannot be undone!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire('Deleted!', 'Ticket has been deleted.', 'success').then(() => {
                            location.reload();
                        });
                    },
                    error: function() {
                        Swal.fire('Error!', 'Something went wrong.', 'error');
                    }
                });
            }
        });
    });
</script>
@endsection
