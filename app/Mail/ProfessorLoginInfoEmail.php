<?php

namespace App\Mail;

use App\Models\Professor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProfessorLoginInfoEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $professor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Professor $professor)
    {
        $this -> professor = $professor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.professorlogininfo');
    }
}
