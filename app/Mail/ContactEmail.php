<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailMessage;

    /**
     * Create a new message instance.
     *
     * @param Request $message
     */
    public function __construct(Request $emailMessage)
    {
        $this->emailMessage = $emailMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emailMessage->email)->to('csteen1005@gmail.com')->
            subject("New Message From ".$this->emailMessage->name)->
            view('contactTemplate')->with([
                'name' => $this->emailMessage->name,
                'email' => $this->emailMessage->email,
                'phone' => $this->emailMessage->phone,
                'message' => $this->emailMessage->message,
            ]);
    }
}
