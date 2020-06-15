<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewTravel
{
    use SerializesModels;

    public $travel;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($travel)
    {
        $this->travel = $travel;
    }
}
