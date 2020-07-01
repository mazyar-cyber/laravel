<?php

namespace App\Listeners;

use App\Events\ContactViewEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContactViewCount implements ShouldQueue
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
     * @param ContactViewEvent $event
     * @return void
     */
    public function handle(ContactViewEvent $event)
    {
        $event->contact->count += 1;
        $event->contact->save();
    }
}
