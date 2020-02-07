<?php

namespace App\Observers;

use App\Podcast;
use App\Episode;

class PodcastObserver
{
    /**
     * Handle the podcast "created" event.
     *
     * @param  \App\Podcast  $podcast
     * @return void
     */
    public function created(Podcast $podcast)
    {
        //
    }

    /**
     * Handle the podcast "updated" event.
     *
     * @param  \App\Podcast  $podcast
     * @return void
     */
    public function updated(Podcast $podcast)
    {
        //
    }

    /**
     * Handle the podcast "deleted" event.
     *
     * @param  \App\Podcast  $podcast
     * @return void
     */
    public function deleted(Podcast $podcast)
    {
        Episode::where('podcast_id', $podcast->id)->delete();
    }

    /**
     * Handle the podcast "restored" event.
     *
     * @param  \App\Podcast  $podcast
     * @return void
     */
    public function restored(Podcast $podcast)
    {
        //
    }

    /**
     * Handle the podcast "force deleted" event.
     *
     * @param  \App\Podcast  $podcast
     * @return void
     */
    public function forceDeleted(Podcast $podcast)
    {
        //
    }
}
