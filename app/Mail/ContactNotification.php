<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Message from ENTWO Website: ' . ($this->data['subject'] ?? 'No Subject'))
                    ->view('emails.contact-notification'); // Kita akan buat file view-nya
    }
}
