<?php

namespace App\Mail;

use App\Apply;
use App\Jop;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendJopEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $apply;
   
    public function __construct(Apply $apply)
    {
        $this->apply = $apply;
    }
  

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.apply');
    }
}
