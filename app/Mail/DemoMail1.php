<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
class DemoMail1 extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData1;
    // protected $output;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData1)
    {
        $this->mailData1 = $mailData1;
        //  $this->output = $output;
    }
//   public function __construct($output)
//     {
//         $this->mailData = $mailData1;
//          $this->output = $output;
//     }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'LOGIN DETAILS',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'MAILS1',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */

}