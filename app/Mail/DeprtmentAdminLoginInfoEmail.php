<?php

namespace App\Mail;

use App\Models\DepartmentAdmin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeprtmentAdminLoginInfoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $departmentAdmin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DepartmentAdmin $departmentAdmin)
    {
        $this -> departmentAdmin = $departmentAdmin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.loginInfo');
    }
}
