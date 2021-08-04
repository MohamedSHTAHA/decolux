<?php

namespace App\Mail;

use App\Apply;
use App\ContactUs;
use App\Jop;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactUs;
   
    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
    }
  

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactUs');
    }
}
