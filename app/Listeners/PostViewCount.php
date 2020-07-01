<?php

namespace App\Listeners;

use App\Events\PostViewEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostViewCount
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
     * @param PostViewEvent $event
     * @return void
     */
    private $post;

    public function handle(PostViewEvent $event)
    {
        $this->post = $event->post;
        $this->post->count += 1;
        $this->post->save();
    }
}
