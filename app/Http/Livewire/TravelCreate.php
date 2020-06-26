<?php

namespace App\Http\Livewire;

use App\Travel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use MercurySeries\Flashy\Flashy;

/**
 * Class TravelCreate
 * @package App\Http\Livewire
 */
class TravelCreate extends Component
{
    use WithFileUploads;

    /**
     * @var
     */
    public $vilDepart;
    /**
     * @var
     */
    public $vilArrive;
    /**
     * @var
     */
    public $date_depart;
    /**
     * @var
     */
    public $date_arrive;
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $kiloAvalable;
    /**
     * @var
     */
    public $compagnie;
    /**
     * @var
     */
    public $photoBielletAvion;
    /**
     * @var
     */
    public $prixKilo;

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function submit()
    {
        $this->validate([
            'vilDepart' => 'required',
            'vilArrive' => 'required',
            'date_depart' => 'required',
            'date_arrive' => 'required',
            'kiloAvalable' => 'required',
            'prixKilo' => 'required',
            'compagnie' => 'required',
            'photoBielletAvion' => 'required',
        ]);

        Travel::create([
            'name' => Auth::user()->name,
            'User_id' => Auth::id(),
            'categorie_id' => 2,
            'hasCourrier' => 1,
            'prixCourrier' => 0,
            'vilDepart' => $this->vilDepart,
            'vilArrive' => $this->vilArrive,
            'date_depart' => $this->date_depart,
            'date_arrive' => $this->date_arrive,
            'content' => $this->content,
            'kiloAvalable' => $this->kiloAvalable,
            'prixKilo' => $this->prixKilo,
            'compagnie' => $this->compagnie,
            'photoBielletAvion' => $this->photoBielletAvion,
        ]);

        flashy::success('votre post à bien enregistrer. merci de continuer a nous faire confiance');
        return redirect('/news');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.travel-create');
    }
}

