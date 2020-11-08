<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use App\Mail\BookingMail;
use App\Mail\bookingValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class postController extends Controller
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

    public function index(Request $request)
    {
       $key = !empty($request->get('key')) ? $request->get('key') : 'allNews';

        return view('App.news', compact('key'));
    }

    public function listeNews()
    {
        $posts = Post::with('user')->paginate(3);
        return response()->json($posts, 200);
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

    public function booking(Request $request)
    {
       Mail::to($request->get('owner')['email'])->send(

           new BookingMail
           (
                auth()->user(),

                $request->get('owner'),

                route('confirm',[
                'user' => auth()->id(),
                'post' => $request->get('post')]),

                $request->get('kilos')
            )
        );
        
        if (Mail::failures()) {

            return response('error', 500);

        } else {

            return response('success', 200);
        }
    }

    public function bookingConfirm(User $user, Post $post, Request $request)
    {
        $k = $request->get('k');

        $post->kilo = ($post->kilo - $k) > 0 ? $post->kilo - $k : 0;

        $post->save();

        if (!is_null($k)) {
            $post->kilo =- $request->get('k');
            Mail::to('claudesimo1990@gmail.com')->send(new bookingValidate($user, route('accueil')));
        }
        return view('booking.confirmation');
    }
}

