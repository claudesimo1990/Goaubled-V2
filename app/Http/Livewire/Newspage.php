<?php

namespace App\Http\Livewire;

use App\Coli;
use App\Travel;
use Livewire\Component;

class Newspage extends Component
{
    public $news;
    public $title = '';

    protected $listeners = ['newsFilter' => 'newsFilterEvent'];

    public function newsFilter() {
        if ('travel' === 'travel'){
            $collection = Travel::all();
            $this->news = $collection;
        }else{
            $collection = Coli::all();
            $this->news = $collection;
        }
    }

    public function updatedNews(){
        dd('hallo');
        $this->sortNews('travel');
    }

    public function contactUser($action, $id, $user_id)
    {
        if ($action == 'travel') {
            return redirect()->route('reservation',['action' => $action,'annonce' => $id ,'user_id' => $user_id]);
        }else{
            return redirect()->route('reservation',['action' => $action,'annonce' => $id ,'user_id' => $user_id]);
        }
    }

    public function mount()
    {
        $this->title = 'liste d annonces';

        $collection = collect(Travel::all());
        $merge = $collection->merge(Coli::all())->shuffle()->toArray();
        $this->news = $merge;
        //dd($merge);
    }

    public function render()
    {
        return view('livewire.newspage', ['news' => $this->news]);
    }
}
