<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactPage extends Component
{
    public $user;
    public $profile;

    public function mount($user)
    {
        $this->user = $user;
        $this->profile = $user->profile;
        //dd($user->profile);
    }

    public function changepage(){
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.contact-page');
    }
}
