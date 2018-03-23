<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddUserToDefaultNewsletterList
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        // Add to CampaignMonitor newsletter list
        // $cm = new CampaignMonitor;
        // $cm->addToList('users');
        echo "<pre>";
        print_r('use CampaignMonitor to add ' . $event->user->email . ' to the main newsletter list.');
        echo "</pre>";
    }
}
