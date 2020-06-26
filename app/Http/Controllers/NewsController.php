<?php

namespace App\Http\Controllers;

use App\Coli;
use App\Travel;

class NewsController extends Controller
{
    public function index(){

        $all_news = Travel::paginate(10);

        return view('App.news',['all_news'=>$all_news]);
    }

    public function allnews()
    {

        $collection = collect(Travel::all());
        $merge = $collection->merge(Coli::all())
            ->sortBy('dateDepart')
            ->shuffle()
            ->toArray();

        return $merge;
    }

    public function travelsredirect()
    {

        return view('travels.book');

    }
}
