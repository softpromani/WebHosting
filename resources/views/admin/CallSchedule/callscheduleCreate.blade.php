@extends('admin.includes.layout', ['breadcrumb_title' => 'Call Schedule'])
@section('title', isset($editcallschedule) ? 'Edit Call Schedule' : 'Add Call Schedule')

@section('main-content')

    @php
        $formAction = isset($editcallschedule)
            ? route('admin.callschedule.update', ['callschedule' => $editcallschedule->id])
            : route('admin.callschedule.store');
    @endphp

    <form action="{{ $formAction }}" method="POST">
        @csrf
        @isset($editcallschedule)
            @method('PUT')
        @endisset

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ isset($editcallschedule) ? 'Edit' : 'Add' }} Call Schedule</h3>
                <a class="btn btn-secondary float-end" href="{{ route('admin.callschedule.index') }}">← Back to List</a>
            </div>

            <div class="card-body row">
                <div class="col-lg-6 mb-3">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" required
                        value="{{ old('name', $editcallschedule->name ?? '') }}">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" required
                        value="{{ old('email', $editcallschedule->email ?? '') }}">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="phone">Phone <span class="text-danger">*</span></label>
                    <input type="text" name="phone" id="phone" class="form-control" required
                        value="{{ old('phone', $editcallschedule->phone ?? '') }}">
                    @error('phone')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="date">Date <span class="text-danger">*</span></label>
                    <input type="date" name="date" id="date" class="form-control" required
                        value="{{ old('date', $editcallschedule->date ?? '') }}">
                    @error('date')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="time">Time <span class="text-danger">*</span></label>
                    <input type="time" name="time" id="time" class="form-control" required
                        value="{{ old('time', $editcallschedule->time ?? '') }}">
                    @error('time')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4" class="form-control">{{ old('message', $editcallschedule->message ?? '') }}</textarea>
                    @error('message')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-end">{{ isset($editcallschedule) ? 'Update' : 'Submit' }}</button>
            </div>
        </div>
    </form>

@endsection
