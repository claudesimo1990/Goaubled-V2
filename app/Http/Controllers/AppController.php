<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
