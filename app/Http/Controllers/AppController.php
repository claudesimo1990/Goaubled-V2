<?php

namespace App\Http\Controllers;

use App\post;
use App\Events\PresentEvent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index(){
    
        $latest_news = post::with('user')->latest()->limit(3)->get();
        
        return view('App.accueil',compact('latest_news'));
    }
    public function annonces() {

        $all_news = travel::paginate(5);

        return view('App.annonces',compact('all_news'));
    }
    public function howItWork(){

        return view('pages.howItWork');
    }
    public function how(){

        return view('pages.howItWork');
    }
}
