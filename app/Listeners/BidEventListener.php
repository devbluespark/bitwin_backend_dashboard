<?php

namespace App\Listeners;

use App\Events\BidEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BidEventListener
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
     * @param  BidEvent  $event
     * @return void
     */
    public function handle(BidEvent $event)
    {
        //
    }
}
