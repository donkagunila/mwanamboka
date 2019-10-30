<?php

namespace App\Providers;

use App\Providers\NewRegistration;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewRegistration  $event
     * @return void
     */
    public function handle(NewRegistration $event)
    {
        //
    }
}
