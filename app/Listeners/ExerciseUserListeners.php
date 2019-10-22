<?php

namespace App\Listeners;

use App\Events\ExerciseUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ExerciseUserListeners
{
    /**
     * Handle the event.
     *
     * @param  ExerciseUser  $event
     * @return void
     */
    public function handle(ExerciseUser $event)
    {
        $user = $event->getUser();
        dd($user->email);
    }
}
