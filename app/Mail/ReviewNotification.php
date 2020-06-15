<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReviewNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $coli;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($coli)
    {
        $this->coli = $coli;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
