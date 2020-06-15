<?php

namespace App\Http\Livewire;

use http\Env\Request;
use Livewire\Component;

class TravelPost extends Component
{
    public $form = [
        'vilDepart' => '',
        'vilArrive' => '',
        'heurArrive' => '',
        'dateDepart' => '',
        'heurDepart' => '',
        'dateArrive' => '',
        'content' => '',
        'kiloAvalable' => '',
        'prixKilo' => '',
        'hasCourrier' => '',
        'compagnie' => '',
        'photoBielletAvion' => '',
    ];

    public function saveContact(Request $request)
    {
        dd($request);
    }

    public function render()
    {
        return view('livewire.travel-post');
    }
}
