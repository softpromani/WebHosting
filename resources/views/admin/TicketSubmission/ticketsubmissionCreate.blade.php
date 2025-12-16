@extends('admin.includes.layout', ['breadcrumb_title' => 'Ticket Submission'])
@section('title', isset($editticketsubmission) ? 'Edit Ticket Submission' : 'Add Ticket Submission')

@section('main-content')

@php
   $formAction = isset($editticketsubmission)
    ? route('admin.ticketsubmission.update', ['ticketsubmission' => $editticketsubmission->id])
    : route('admin.ticketsubmission.store');

@endphp

<form id="ticketForm" action="{{ $formAction }}" method="POST" enctype="multipart/form-data">
    @csrf
    @isset($editticketsubmission)
        @method('PUT')
    @endisset

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ isset($editticketsubmission) ? 'Edit' : 'Add' }} Ticket Submission</h3>
            <a class="btn btn-secondary float-end" href="{{ route('admin.ticketsubmission.index') }}">← Back to List</a>
        </div>

        <div class="card-body row">
            <div class="col-lg-6 mb-3">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" required
                    value="{{ old('name', $editticketsubmission->name ?? '') }}">
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 mb-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{ old('phone', $editticketsubmission->phone ?? '') }}">
                @error('phone')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 mb-3">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control" required
                    value="{{ old('email', $editticketsubmission->email ?? '') }}">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 mb-3">
                <label for="subject">Subject <span class="text-danger">*</span></label>
                <input type="text" name="subject" id="subject" class="form-control" required
                    value="{{ old('subject', $editticketsubmission->subject ?? '') }}">
                @error('subject')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 mb-3">
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" id="company_name" class="form-control"
                    value="{{ old('company_name', $editticketsubmission->company_name ?? '') }}">
                @error('company_name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 mb-3">
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" id="user_name" class="form-control"
                    value="{{ old('user_name', $editticketsubmission->user_name ?? '') }}">
                @error('user_name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-12 mb-3">
                <label for="message">Message <span class="text-danger">*</span></label>
                <textarea name="message" id="message" rows="4" class="form-control" required>{{ old('message', $editticketsubmission->message ?? '') }}</textarea>
                @error('message')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-end">{{ isset($editticketsubmission) ? 'Update' : 'Submit' }}</button>
        </div>
    </div>
</form>

@endsection
