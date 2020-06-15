<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewProfile
{
    use SerializesModels;

    public $profile;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($profile)
    {
        $this->profile = $profile;
    }
}
