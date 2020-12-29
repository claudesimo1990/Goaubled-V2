<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Events\PresentEvent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index(){
    
        $latest_news = Post::where('publish',1)->with('user')->latest()->limit(3)->get();
        $users = User::all();
        
        return view('App.accueil',compact('latest_news','users'));
    }
    public function annonces() {

        $all_news = travel::paginate(5);

        return view('App.annonces',compact('all_news'));
    }
    public function howItWork(){

        return view('pages.howItWork');
    }
}
