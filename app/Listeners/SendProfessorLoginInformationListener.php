<?php

namespace App\Listeners;

use App\Events\NewProfessorEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ProfessorLoginInfoEmail;
use Illuminate\Support\Facades\Mail;
class SendProfessorLoginInformationListener
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
     * @param  \App\Events\NewProfessorEvent  $event
     * @return void
     */
    public function handle(NewProfessorEvent $event)
    {
        Mail::to($event->professor->email)->send(new ProfessorLoginInfoEmail($event->professor));

    }
}
