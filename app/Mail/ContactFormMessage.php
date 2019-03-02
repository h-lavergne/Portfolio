<?php

namespace App\Mail;

use App\Message;
use Illuminate\Mail\Mailable;

class ContactFormMessage extends Mailable
{

    public $msg;

    /**
     * Create a new message instance.
     *
     * @param $msg
     */
    public function __construct(Message $msg)
    {
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact.form.message');
    }
}
