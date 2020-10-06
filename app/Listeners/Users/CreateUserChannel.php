<?php

namespace App\Listeners\Users;

use App\Models\Channel;

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
        dd($event->user);
        Channel::create([
            'user_id' => $event->user->id,
            'name' => $event->user->name,
        ]);
    }
}
