<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewColi
{
    use SerializesModels;

    public $coli;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($coli)
    {
        $this->coli = $coli;
    }
}
