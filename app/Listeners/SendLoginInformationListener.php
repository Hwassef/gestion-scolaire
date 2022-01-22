<?php

namespace App\Listeners;

use App\Events\NewDepartmentAdminEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeprtmentAdminLoginInfoEmail;
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
        Mail::to($event->departmentAdmin->email)->send(new DeprtmentAdminLoginInfoEmail($event->departmentAdmin));
    }
}
