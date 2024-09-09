<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    protected $output;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData,$output)
    {
        $this->mailData = $mailData;
         $this->output = $output;
    }
//   public function __construct($output)
//     {
//         $this->mailData = $mailData;
//          $this->output = $output;
//     }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Applicant_form',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'MAILS',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */

      public function build()
    {
        return $this->view('pdf')
        ->attachData($this->output,'Applicant_form_data.pdf',[
            'mime'=>'application/pdf',
            ]);
    }
}