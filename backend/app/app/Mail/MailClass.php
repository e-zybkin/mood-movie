<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->message = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown(
            'admin.mail.send',
            [   'name' => $this->name,
                'email' => $this->email,
                'message' => $this->message,
            ]
        );
    }
}
