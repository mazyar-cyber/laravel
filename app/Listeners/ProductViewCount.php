<?php

namespace App\Listeners;

use App\Events\ProductViewEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductViewCount
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
     * @param ProductViewEvent $event
     * @return void
     */
//    private $product;

    public function handle(ProductViewEvent $event)
    {
        $event->product->count += 1;
        $event->product->save();
    }
}
