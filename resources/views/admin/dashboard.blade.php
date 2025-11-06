@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
</div>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Total Services</h5>
                <h2 class="mb-0">{{ $stats['services'] }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Total Bookings</h5>
                <h2 class="mb-0">{{ $stats['bookings'] }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title">Pending Bookings</h5>
                <h2 class="mb-0">{{ $stats['pending_bookings'] }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title">New Contacts</h5>
                <h2 class="mb-0">{{ $stats['contact_submissions'] }}</h2>
            </div>
        </div>
    </div>
</div>

<!-- Recent Bookings -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5><i class="fas fa-calendar-check"></i> Recent Bookings</h5>
            </div>
            <div class="card-body">
                @if($recent_bookings->count() > 0)
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_bookings as $booking)
                            <tr>
                                <td>{{ $booking->service->title ?? 'N/A' }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>
                                    <span class="badge bg-{{ $booking->status === 'pending' ? 'warning' : ($booking->status === 'completed' ? 'success' : 'info') }}">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                                <td>{{ $booking->created_at->format('M d, Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('admin.bookings.index') }}" class="btn btn-sm btn-primary">View All</a>
                @else
                    <p class="text-muted">No bookings yet.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Contacts -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5><i class="fas fa-envelope"></i> Recent Contact Submissions</h5>
            </div>
            <div class="card-body">
                @if($recent_contacts->count() > 0)
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($contact->subject, 30) }}</td>
                                <td>
                                    <span class="badge bg-{{ $contact->status === 'new' ? 'danger' : 'secondary' }}">
                                        {{ ucfirst($contact->status) }}
                                    </span>
                                </td>
                                <td>{{ $contact->created_at->format('M d, Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-primary">View All</a>
                @else
                    <p class="text-muted">No contact submissions yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

