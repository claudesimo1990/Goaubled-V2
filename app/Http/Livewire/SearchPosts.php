<?php

namespace App\Http\Livewire;

use App\search\Search;
use App\Travel;
use Livewire\Component;

class SearchPosts extends Component
{
    public $from;
    public $to;
    public $date;
    protected $results = [];

    public function updatedFrom($value)
    {
        $this->from = $value;
        $this->results = Search::searchByFromCity($this->from);
    }

    function render()
    {
        return view('livewire.search-posts', [
            'results' => $this->results
    ]);
    }

}
