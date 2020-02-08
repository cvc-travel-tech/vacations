<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contact extends Mailable
{
    use Queueable, SerializesModels;
 public $name;
 public $Email;
 public $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$Email,$body)
    {
                $this->name=$name;
        $this->Email=$Email;
        $this->body=$body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.massa')->from($this->Email);
    }
}
