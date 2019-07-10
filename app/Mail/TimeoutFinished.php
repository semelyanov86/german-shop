<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TimeoutFinished extends Mailable
{
    use Queueable, SerializesModels;

    public $diff;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($diff)
    {
        $this->diff = $diff;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.timeout')->subject('Timeout is finished!');
    }
}
