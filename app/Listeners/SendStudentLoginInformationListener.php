<?php

namespace App\Listeners;

use App\Events\NewStudentEvent;
use App\Mail\StudentLoginInfoEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
class SendStudentLoginInformationListener
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
     * @param  \App\Events\NewStudentEvent  $event
     * @return void
     */
    public function handle(NewStudentEvent $event)
    {
        Mail::to($event->student->email)->send(new StudentLoginInfoEmail($event->student));

    }
}
