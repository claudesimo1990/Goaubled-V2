<?php

namespace App\Http\Livewire;

use App\Coli;
use App\User;
use Livewire\Component;

class PacksReservation extends Component
{
    public $user;
    public $coli;
    public $message;

    public function mount(User $user,Coli $coli)
    {
        $this->coli = $coli;
        $this->user = $user;

    }
    public function render()
    {
        return view('livewire.packs-reservation');
    }
}
