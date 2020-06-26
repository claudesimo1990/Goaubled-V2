<?php

namespace App\Http\Livewire;

use App\Travel;
use App\User;
use Livewire\Component;

class TravelsReservation extends Component
{
    public $user;
    public $travel;

    public $allKilos;
    public $message;
    public $book;

    public function mount(User $user,Travel $travel)
    {
        $this->travel = $travel;
        $this->user = $user;
        $this->allKilos = $travel->kiloAvalable;

    }

    public function render()
    {
        return view('livewire.travels-reservation');
    }
}
