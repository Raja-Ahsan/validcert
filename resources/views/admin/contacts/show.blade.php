@extends('admin.layouts.app')

@section('title', 'Contact Details')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-envelope"></i> Contact Submission Details</h1>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Contacts
    </a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Contact Information</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th width="200">Submission ID:</th>
                        <td>#{{ $contact->id }}</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>{{ $contact->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                    </tr>
                    <tr>
                        <th>Subject:</th>
                        <td>{{ $contact->subject }}</td>
                    </tr>
                    <tr>
                        <th>Message:</th>
                        <td>{{ $contact->message }}</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td>
                            <span class="badge bg-{{ $contact->status === 'new' ? 'danger' : ($contact->status === 'replied' ? 'success' : 'secondary') }}">
                                {{ ucfirst($contact->status) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Submitted:</th>
                        <td>{{ $contact->created_at->format('F j, Y, g:i a') }}</td>
                    </tr>
                    @if($contact->admin_notes)
                    <tr>
                        <th>Admin Notes:</th>
                        <td>{{ $contact->admin_notes }}</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5>Update Status</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.contacts.update-status', $contact) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="new" {{ $contact->status === 'new' ? 'selected' : '' }}>New</option>
                            <option value="read" {{ $contact->status === 'read' ? 'selected' : '' }}>Read</option>
                            <option value="replied" {{ $contact->status === 'replied' ? 'selected' : '' }}>Replied</option>
                            <option value="archived" {{ $contact->status === 'archived' ? 'selected' : '' }}>Archived</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="admin_notes" class="form-label">Admin Notes</label>
                        <textarea name="admin_notes" id="admin_notes" class="form-control" rows="5">{{ old('admin_notes', $contact->admin_notes) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-save"></i> Update Status
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

