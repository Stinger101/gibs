<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $mes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mes)
    {
        //
        $this->mes=$mes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.commentreceived',$this->mes);
    }
}
