<?php

namespace App\Providers\App\Listeners;

use App\Providers\App\Events\Registration;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateProfile
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
     * @param  Registration  $event
     * @return void
     */
    public function handle(Registration $event)
    {
        //
    }
}
