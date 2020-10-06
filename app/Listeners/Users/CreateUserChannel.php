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
        dd($event->user->id);
        $event->user->channel()->create([
            'name' => $event->user->name,
        ]);
    }
}
