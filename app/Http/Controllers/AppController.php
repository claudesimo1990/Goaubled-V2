<?php

namespace App\Http\Controllers;

use App\User;
use App\Travel;
use App\Message;
use App\Events\PresentEvent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index(){

        $latest_news = Travel::limit(4)->get();
        return view('App.accueil',compact('latest_news'));
    }
    public function annonces() {
        $all_news = travel::paginate(10);
        return view('App.annonces',compact('all_news'));
    }
}
