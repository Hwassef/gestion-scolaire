<?php

namespace App\Listeners;

use App\Events\NewDepartmentAdminEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendLoginInformationListener
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
     * @param  \App\Events\NewDepartmentAdminEvent  $event
     * @return void
     */
    public function handle(NewDepartmentAdminEvent $event)
    {
        //
    }
}
