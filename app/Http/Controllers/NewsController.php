<?php

namespace App\Http\Controllers;

use App\Coli;
use App\Travel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

        $all_news = Travel::paginate(10);

        return view('app.news',['all_news'=>$all_news]);
    }
    public function allnews(){

        $allnews = [];

        $travs = Travel::paginate(20);
        $packs = Coli::paginate(20);

        foreach ($travs as $item){
           array_push($allnews,$item);
        }
        foreach ($packs as $item){
            array_push($allnews,$item);
        }
        shuffle($allnews);

        return $allnews;
    }
}
