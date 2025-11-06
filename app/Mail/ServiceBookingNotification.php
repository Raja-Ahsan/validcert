<?php

namespace App\Mail;

use App\Models\ServiceBooking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServiceBookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct(ServiceBooking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('New Service Booking: ' . $this->booking->service->title)
                    ->view('emails.service-booking')
                    ->with([
                        'booking' => $this->booking,
                        'service' => $this->booking->service,
                    ]);
    }
}

