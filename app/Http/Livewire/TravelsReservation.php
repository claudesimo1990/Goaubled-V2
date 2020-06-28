<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Travel;
use App\User;

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
        $this->book = '';

    }

    public function submit() {
        dd('hallo');
    }

    public function render()
    {
        return view('livewire.travels-reservation',['book' => $this->book]);
    }
}
