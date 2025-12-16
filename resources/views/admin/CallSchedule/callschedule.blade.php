@extends('admin.includes.layout', ['breadcrumb_title' => 'Call Schedule'])
@section('title', 'Call Schedule')

@section('main-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Call Schedule</h3>
        <a class="btn btn-primary float-end" href="{{ route('admin.callschedule.create') }}">+ Add New</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" id="callscheduleTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($callschedules as $index => $callschedule)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $callschedule->name }}</td>
                        <td>{{ $callschedule->email }}</td>
                        <td>{{ $callschedule->phone }}</td>
                        <td>{{ $callschedule->date }}</td>
                        <td>{{ $callschedule->time }}</td>
                        <td>{{ Str::limit($callschedule->message, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.callschedule.edit', $callschedule->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $callschedule->id }}" title="Delete">
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
    $('.delete-btn').click(function () {
        const id = $(this).data('id');
        const url = "{{ route('admin.callschedule.destroy', ':id') }}".replace(':id', id);

        Swal.fire({
            title: 'Are you sure?',
            text: 'This action cannot be undone!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    success: function () {
                        Swal.fire('Deleted!', 'Call Schedule has been deleted.', 'success')
                            .then(() => location.reload());
                    },
                    error: function () {
                        Swal.fire('Error!', 'Something went wrong.', 'error');
                    }
                });
            }
        });
    });
</script>
@endsection
