<?php

namespace App\Mail;

use App\Models\FreeTrailApply;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
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
            subject: 'Mounteko Free Trial Application',
            to: [
                new Address($this->formData->email, $this->formData->name),
            ],
            cc: [
                new Address('sales@mounteko.com', 'Sales Team'),
                new Address('support@mounteko.com', 'support'),
                new Address('softpromani@gmail.com', 'Developer'),
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
