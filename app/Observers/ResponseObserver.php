<?php

namespace App\Observers;

use App\Response;

class ResponseObserver
{
    /**
     * Handle the response "creating" event.
     *
     * @param  \App\Response  $response
     * @return void
     */
    public function creating(Response $response)
    {
        $response->user_id = auth()->user()->id;
    }

    /**
     * Handle the response "created" event.
     *
     * @param  \App\Response  $response
     * @return void
     */
    public function created(Response $response)
    {
        //
    }

    /**
     * Handle the response "updated" event.
     *
     * @param  \App\Response  $response
     * @return void
     */
    public function updated(Response $response)
    {
        //
    }

    /**
     * Handle the response "deleted" event.
     *
     * @param  \App\Response  $response
     * @return void
     */
    public function deleted(Response $response)
    {
        //
    }

    /**
     * Handle the response "restored" event.
     *
     * @param  \App\Response  $response
     * @return void
     */
    public function restored(Response $response)
    {
        //
    }

    /**
     * Handle the response "force deleted" event.
     *
     * @param  \App\Response  $response
     * @return void
     */
    public function forceDeleted(Response $response)
    {
        //
    }
}
