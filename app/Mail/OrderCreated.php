<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $total)
    {
        $this->order = $order;
        $this->total = $total;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.new_order')->subject('New Order Created!');
    }
}
