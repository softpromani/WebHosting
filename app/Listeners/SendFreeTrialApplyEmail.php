<?php

namespace App\Listeners;

use App\Events\FreeTrialApply;
use App\Mail\FreeTrialEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendFreeTrialApplyEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(FreeTrialApply $event): void
    {
         $formData = $event->formData;

        Mail::send(new FreeTrialEmail($formData));
    }
}
