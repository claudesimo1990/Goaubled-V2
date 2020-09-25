<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class PostController extends Controller
{
    public function ColiForm()
    {
        return view('posts.coli');
    }

    public function createColi(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'dateFrom' => 'required',
            'colis_name' => 'required',
            'kilo' => 'required',
            'prix' => 'required',
        ]);

        $filename = md5($request->from . $request->to).'.jpg';
        $img = ImageManagerStatic::make($request->colisPhoto)->encode('jpg');
        Storage::disk('public')->put('Colis/'.$filename, $img);

        post::create([
            'user_id' => Auth::id(),
            'categorie_id' => 1, //ccoli
            'from' => $request->from,
            'to' => $request->to,
            'colis_name' => $request->colis_name,
            'dateFrom' => $request->dateFrom,
            'dateTo' => $request->dateFrom,
            'content' => $request->content,
            'kilo' => $request->kilo,
            'prix' => $request->prix,
            'colisPhoto' => $filename,
        ]);

        flashy::success('votre post à bien enregistrer. merci de continuer a nous faire confiance');
        return ['redirect' => route('news.index')];
    }

    public function travelForm()
    {
        return view('posts.travel');
    }

    public function createTravel(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'dateFrom' => 'required',
            'dateTo' => 'required',
            'kilo' => 'required',
            'prix' => 'required',
            'compagnie' => 'required',
            'photoBielletAvion' => 'required',
        ]);

        $filename = md5($request->from . $request->to).'.jpg';
        $img = ImageManagerStatic::make($request->photoBielletAvion)->encode('jpg');
        Storage::disk('public')->put('FlysTicket/'.$filename, $img);

        post::create([
            'user_id' => Auth::id(),
            'categorie_id' => 2, //travel
            'from' => $request->from,
            'to' => $request->to,
            'dateFrom' => $request->dateFrom,
            'dateTo' => $request->dateTo,
            'content' => $request->content,
            'kilo' => $request->kilo,
            'prix' => $request->prix,
            'slug' => '',
            'compagnie' => $request->compagnie,
            'photoBielletAvion' => $filename,
        ]);

        flashy::success('votre post à bien enregistrer. merci de continuer a nous faire confiance');
        return ['redirect' => route('news.index')];
    }

    public function listeNews()
    {
        $posts = Post::with('user')->latest()->get();
        return view('App.news',['posts'=> $posts]);
    }

    public function bookingPost(Post $post, User $user)
    {
        if($post->categorie_id == 2) {
            return view('booking.travel', ['post' => $post, 'user' => $user]);
        }else if($post->categorie_id == 1) {
            return view('booking.coli', ['post' => $post, 'user' => $user]);  
        }
    }

    public function news()
    {
        $posts = Post::all();
        return response()->json($posts, 200);
    }
}
