<?php
namespace App\Mail;

use App\Models\FreeTrailApply;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FreeTrialEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public FreeTrailApply $formData)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Free Trial Mail | ' . now()->setTimezone('Asia/Kolkata')->format('d-m-Y h:i a'),
            to: [
               
                 new Address('sales@mounteko.com', 'Sales Team'),
                // new Address($this->formData->email, $this->formData->name),
            ],
            cc: [
                new Address('support@mounteko.com', 'Support Team'),
               

            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.free-trial',
            with: [
                'formData' => $this->formData,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
