<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceBooking;
use App\Mail\ServiceBookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string|max:2000',
        ]);

        // Get form fields from service
        $service = Service::findOrFail($validated['service_id']);
        $formFields = $service->form_fields ?? [];

        // Collect dynamic form field data
        $formData = [];
        foreach ($formFields as $field) {
            $fieldName = $field['name'] ?? null;
            if ($fieldName && $request->has($fieldName)) {
                $formData[$fieldName] = $request->input($fieldName);
            }
        }

        // Create booking
        $booking = ServiceBooking::create([
            'service_id' => $validated['service_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'] ?? null,
            'form_data' => !empty($formData) ? $formData : null,
            'status' => 'pending',
        ]);

        // Send email notification
        try {
            Mail::to('info@validcertpk.com')->send(new ServiceBookingNotification($booking));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            \Log::error('Failed to send booking email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for your booking request! We will contact you soon.');
    }
}

