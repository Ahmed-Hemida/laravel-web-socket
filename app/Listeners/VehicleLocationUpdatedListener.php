<?php

namespace App\Listeners;

use App\Events\VehicleLocationUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class VehicleLocationUpdatedListener
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
     * @param  \App\Events\VehicleLocationUpdated  $event
     * @return void
     */
    public function handle(VehicleLocationUpdated $event)
    {
      return   $event->broadcastWith();
    }
}
