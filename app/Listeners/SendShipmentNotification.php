<?php

namespace App\Listeners;

use App\Events\Reception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendShipmentNotification
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
     * @param  \App\Events\Reception  $event
     * @return void
     */
    public function handle(Reception $event)
    {
        //
    }
}
