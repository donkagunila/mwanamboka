<?php

namespace App\Listeners;

use App\Events\Registration;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class SendWelcomeEmail implements ShouldQueue
{
   
    public function handle(Registration $event)
    {
        Mail::to($event->user->email)->queue(new WelcomeEmail($event->user));
    }
}
