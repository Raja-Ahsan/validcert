<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceBooking;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $stats = [
            'services' => Service::count(),
            'bookings' => ServiceBooking::count(),
            'pending_bookings' => ServiceBooking::where('status', 'pending')->count(),
            'contact_submissions' => ContactSubmission::where('status', 'new')->count(),
        ];

        $recent_bookings = ServiceBooking::with('service')
            ->latest()
            ->take(5)
            ->get();

        $recent_contacts = ContactSubmission::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_bookings', 'recent_contacts'));
    }
}

