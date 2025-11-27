<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeadEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Debt Lead From Midasgulf');
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.lead',
            with: [
                'slug'          => $this->data['slug'] ?? '',
                'name'          => $this->data['name'] ?? '',
                'country_code'  => $this->data['country_code'] ?? '',
                'phone'         => $this->data['phone'] ?? '',
                'email'         => $this->data['email'] ?? '',
                'type'          => $this->data['type'] ?? 1,
                'details'       => route($this->data['type'] == 2 ? 'report.debt-restructuring-details' : 'report.debt-settlement-details', $this->data['slug']),
            ],
        );
    }

    public function build()
    {
        return $this->to('md@midasgulf.com')->bcc('jangid.sanjay04@gmail.com')->subject('Lead From Midasgulf'); // advocate@midasgulf.com
    }
}
