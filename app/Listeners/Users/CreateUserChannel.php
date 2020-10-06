<?php

namespace App\Listeners\Users;

class CreateUserChannel
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->latest()->first()->channel()->create([
            'name' => $event->user->latest()->first()->name,
        ]);
    }
}
