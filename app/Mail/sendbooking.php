<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class sendbooking extends Mailable
{
    use Queueable, SerializesModels;
   public $name;
   public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$data)
    {
        $this->name=$name;
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.booking')->to(auth()->user()->email)->from('om.ist.ofuk@gmail.com','to-istanbultours')->subject('Booking verification');
    }
}
