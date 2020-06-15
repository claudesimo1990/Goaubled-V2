<?php

namespace App\Http\Livewire;

use App\Coli;
use App\Travel;
use Livewire\Component;

class Newspage extends Component
{
    public $allnews;
    public $title = '';

    public function mount()
    {
        $this->title = 'liste d annonces';

        $collection = collect(Travel::all());
        $merge = $collection->merge(Coli::all())->shuffle()->toArray();
        $this->allnews = $merge;
        //dd($merge);
    }

    public function contactUser($action, $id, $user_id)
    {
        if ($action == 'travel') {
            return redirect()->route('reservation',['action' => $action,'annonce' => $id ,'user_id' => $user_id]);
        }else{
            return redirect()->route('reservation',['action' => $action,'annonce' => $id ,'user_id' => $user_id]);
        }
    }

    public function render()
    {
        return view('livewire.newspage');
    }
}
