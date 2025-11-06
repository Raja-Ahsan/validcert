<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(ContactSubmission $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission: ' . $this->contact->subject)
                    ->view('emails.contact-form')
                    ->with([
                        'contact' => $this->contact,
                    ]);
    }
}

