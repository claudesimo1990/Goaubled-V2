<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use \Datetime;
use App\Mail\BookingMail;
use App\Mail\packBooking;
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

        Post::create([
            'user_id' => Auth::id(),
            'categorie_id' => 1, //ccoli
            'from' => $request->from,
            'to' => $request->to,
            'colis_name' => $request->colis_name,
            'dateFrom' => Carbon::parse($request->dateFrom)->format('Y-m-d H:i:s'),
            'dateTo' => Carbon::parse($request->dateFrom)->format('Y-m-d H:i:s'),
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

        Post::create([
            'user_id' => Auth::id(),
            'categorie_id' => 2, //travel
            'from' => $request->from,
            'to' => $request->to,
            'dateFrom' => Carbon::parse($request->dateFrom)->format('Y-m-d H:i:s'),
            'dateTo' => Carbon::parse($request->dateTo)->format('Y-m-d H:i:s'),
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
        $posts = Post::where('publish',1)->with('user')->paginate(10);
        return response()->json($posts, 200);
    }

    public function bookingPost(Post $post, User $user)
    {
        if($post->categorie_id == 2) {
            return view('booking.travel', ['post' => $post, 'user' => $user]);
        }else if($post->categorie_id == 1) {
            // posts for current user
            return view('booking.coli', ['post' => $post, 'user' => $user]);  
        }
    }

    public function news()
    {
        $posts = Post::where('publish',1);
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

    public function bookingPack(Request $request)
    {
        Mail::to($request->get('owner')['email'])->send(

            new packBooking
            (
                 auth()->user(),
 
                 $request->get('owner'),

                 $request->get('post')[0],
 
                 route('confirm',[
                    'user' => auth()->id(),
                    'post' => $request->get('post')[0]['id']])
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
        
        if($k !== 'pack') {
            $post->kilo = ($post->kilo - $k) > 0 ? $post->kilo - $k : 0;
            $post->save();
        }

        if (!is_null($k)) {
             if($k !== 'pack') {
                $post->kilo =- $request->get('k');
             }
            Mail::to($user->email)->send(new bookingValidate($user, route('accueil')));
        }
        return view('booking.confirmation');
    }

    public function travels()
    {
        return Post::where('publish',1)->where('categorie_id', 2)->with('user')->paginate(10);
    }

    public function packs()
    {
        return Post::where('publish',1)->where('categorie_id', 1)->with('user')->paginate(10);
    }
}

