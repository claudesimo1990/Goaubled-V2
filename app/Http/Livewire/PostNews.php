<?php

namespace App\Http\Livewire;

use App\Coli;
use App\Travel;
use Livewire\Component;

class PostNews extends Component
{
    public $title = 'Toutes les annonces';

    public $allnews;
    public $travels;
    public $colis;
    public $all;
    public $key;


    public function mount()
    {
        $this->title = 'liste d annonces';
        $collection = collect(Travel::all());
        $merge = $collection->merge(Coli::all())->shuffle()->toArray();
        $this->allnews = $merge;

    }

    public function updatedTravels($value)
    {
        $this->title = 'liste travels';

        $collection = collect(Travel::all());
        $this->allnews = $collection->toArray();
    }

    public function updatedColis($value)
    {
        $this->title = 'liste de colis';

        $collection = collect(Coli::all());
        $this->allnews = $collection->toArray();
    }

    public function updatedAll($value)
    {
        $this->title = 'liste d annonces';

        $collection = collect(Travel::all());
        $merge = $collection->merge(Coli::all())->shuffle()->toArray();
        $this->allnews = $merge;
    }

    public function render()
    {
        return view('livewire.post-news', $this->allnews);
    }
}
