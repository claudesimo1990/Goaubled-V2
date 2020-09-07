<?php

namespace App\Http\Livewire;

use Livewire\Component;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Login extends Component
{

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:10'
        ]);
        
        //attempt login
        if (Auth::attempt($data)) {
            return  redirect()->route('accueil');
        }else{
            session()->flash('error', 'Aucun correspondant trouvé, veuillez verifier vos informations.');
            return Redirect::back();
        }
    }

}
