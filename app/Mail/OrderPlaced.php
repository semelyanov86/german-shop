<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderPlaced extends Mailable
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
        return $this->to($this->order->email, $this->order->name)
            ->subject('Thanks for your order!')
            ->view('email.order_client');
    }
}
