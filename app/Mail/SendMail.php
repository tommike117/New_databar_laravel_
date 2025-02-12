<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
           return $this->from('website.db@databar.co.th', 'DATABAR no-reply' )
                    ->subject('DBSystem : Mata Tag not Found')
                    ->view('email_template/email_template')
                    ->with('data', $this->data);

    }
}
