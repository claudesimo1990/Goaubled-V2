<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is_admin');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        //stats
        $travels = Post::where('categorie_id',2)->count();
        $packs = Post::where('categorie_id',1)->count();
        $users = User::all()->count();
        
        return view('admin.home', [

            'travels_count' => $travels,
            'packs_count' => $packs,
            'users_count' => $users,
            
        ]);
    }
}
