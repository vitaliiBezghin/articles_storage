<?php

namespace App\Listeners;

use App\Events\Message;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GetMessageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Message  $event
     * @return void
     */
    public function handle(Message $event)
    {
        dd($event->article);
    }
}
