<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GeneralEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $message;
    public $subject;
    public $fromEmail;
    public $fromName;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $message, $subject, $fromEmail)
    {
        $this->name = $name;
        $this->message = $message;
        $this->subject = $subject;
        $this->fromEmail = $fromEmail;
        $this->fromName = env('MAIL_FROM_NAME');
    }

    /**
     * Get the message envelope.
     */

    public function build()
    {
        return $this->from($this->fromEmail,$this->fromName)
        ->subject($this->subject)
        ->markdown('mail.general-mail') 
        ->with([
            'userName' => $this->name,
            'themessage' => $this->message,
        ]);
    }

     public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'General Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
