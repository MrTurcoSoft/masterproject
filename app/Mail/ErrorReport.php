<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ErrorReport extends Mailable
{
    use Queueable, SerializesModels;

    public $url;
    public $message;
    public $trace;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($url, $message, $trace)
    {
        $this->url = $url;
        $this->message = $message;
        $this->trace = $trace;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.error')
            ->with([
                'url' => $this->url,
                'message' => $this->message,
                'trace' => $this->trace,
            ]);
    }
}
