<?php

namespace App\Http\Livewire;

use App\Coli;
use App\Travel;
use Livewire\Component;
use Livewire\WithFileUploads;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;

class PacksCreate extends Component
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
    public $dateDepart;
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
    public $kilo;
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
    public $prix;
    
    /**
     * quantity
     *
     * @var mixed
     */
    public $quantity;
    
    /**
     * photo
     *
     * @var mixed
     */
    public $photo;
    
    /**
     * nameColi
     *
     * @var mixed
     */
    public $nameColi;

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */    
    /**
     * submit
     *
     * @return void
     */
    public function submit()
    {
        $this->validate([
            'vilDepart' => 'required',
            'vilArrive' => 'required',
            'dateDepart' => 'required',
            'quantity' => 'required',
            'nameColi' => 'required',
            'kilo' => 'required',
            'prix' => 'required',
            'content' => 'required',
        ]);

        Coli::create([
            'name' => Auth::user()->name,
            'nameColi' => $this->nameColi, 
            'user_id' => Auth::user()->id,
            'user_avatar' => Auth::user()->avatar,
            'user_avatar_original' => Auth::user()->avatar_original,
            'categorie_id' => 1,
            'hasCourrier' => 1,
            'prixCourrier' => 0,
            'vilDepart' => $this->vilDepart,
            'vilArrive' => $this->vilArrive,
            'dateDepart' => $this->dateDepart,
            'content' => $this->content,
            'kilo' => $this->kilo,
            'prix' => $this->prix,
            'quantity' => $this->quantity,
            'photo' => $this->photo,
        ]);

        flashy::success('votre post à bien enregistrer. merci de continuer a nous faire confiance');
        return redirect('/news');
    }
    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.packs-create');
    }
}
