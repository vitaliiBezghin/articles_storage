<?php

namespace App\Listeners;

use App\Events\ArticleCreate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ArticleCreateListener
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
     * @param  \App\Events\ArticleCreate  $event
     * @return void
     */
    public function handle(ArticleCreate $event)
    {
        dd($event->article);
    }
}
