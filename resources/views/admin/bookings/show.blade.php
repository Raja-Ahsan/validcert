@extends('admin.layouts.app')

@section('title', 'Booking Details')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-calendar-check"></i> Booking Details</h1>
    <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Bookings
    </a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Booking Information</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th width="200">Booking ID:</th>
                        <td>#{{ $booking->id }}</td>
                    </tr>
                    <tr>
                        <th>Service:</th>
                        <td>{{ $booking->service->title ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>{{ $booking->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><a href="mailto:{{ $booking->email }}">{{ $booking->email }}</a></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td><a href="tel:{{ $booking->phone }}">{{ $booking->phone }}</a></td>
                    </tr>
                    @if($booking->message)
                    <tr>
                        <th>Message:</th>
                        <td>{{ $booking->message }}</td>
                    </tr>
                    @endif
                    <tr>
                        <th>Status:</th>
                        <td>
                            <span class="badge bg-{{ $booking->status === 'pending' ? 'warning' : ($booking->status === 'completed' ? 'success' : ($booking->status === 'cancelled' ? 'danger' : 'info')) }}">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Submitted:</th>
                        <td>{{ $booking->created_at->format('F j, Y, g:i a') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        @if($booking->form_data && count($booking->form_data) > 0)
        <div class="card mb-4">
            <div class="card-header">
                <h5>Additional Information</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    @foreach($booking->form_data as $key => $value)
                    <tr>
                        <th width="200">{{ ucfirst(str_replace('_', ' ', $key)) }}:</th>
                        <td>{{ $value }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @endif
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5>Update Status</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.bookings.update-status', $booking) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="contacted" {{ $booking->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                            <option value="completed" {{ $booking->status === 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="admin_notes" class="form-label">Admin Notes</label>
                        <textarea name="admin_notes" id="admin_notes" class="form-control" rows="5">{{ old('admin_notes', $booking->admin_notes) }}</textarea>
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

