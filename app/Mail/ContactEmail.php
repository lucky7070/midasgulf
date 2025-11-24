<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Lead From Midasgulf');
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.contact',
            with: [
                'first_name'        => $this->data['first_name'] ?? '',
                'last_name'         => $this->data['last_name'] ?? '',
                'email'             => $this->data['email'] ?? '',
                'text'              => $this->data['message'] ?? ''
            ],
        );
    }

    public function build()
    {
        return $this->to('luckysolanki.adiyogi@gmail.com')->bcc('jangid.sanjay04@gmail.com')->subject('Lead From Midasgulf'); // advocate@midasgulf.com
    }
}
