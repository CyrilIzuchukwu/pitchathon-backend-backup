<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    // public $title;
    // public $message;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data;


        // $this->title = $title;
        // $this->message = $message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'MAIL1',
    //     );
    // }

    public function build()
    {
        return $this->subject($this->data['title'])
            ->view('MAIL1')
            ->with('data', $this->data);
    }

    // public function build()
    // {
    //     return $this->subject($this->title)
    //         ->view('MAIL1')
    //         ->with([
    //             'title' => $this->title,
    //             'message' => $this->message
    //         ]);
    // }


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
