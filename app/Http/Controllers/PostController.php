<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use \Datetime;
use Carbon\Carbon;
use App\Reservation;
use App\Mail\BookingMail;
use App\Mail\packBooking;
use Illuminate\Http\Request;
use App\Mail\bookingValidate;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        $posts = Post::where('publish',1)->get();
        return response()->json($posts, 200);
    }

    public function booking(Request $request)
    {
        // save into database
        $booking = Reservation::create([
            'user_id' => auth()->id(),
            'post_id' => $request->get('post'),
            'kilos'  =>  $request->get('kilos'),
            'reservation_date' => Carbon::now(),
            'validation_date'  => Carbon::now(),
            'object' => ''
        ]);


       Mail::to($request->get('owner')['email'])->send(

           new BookingMail
           (
                auth()->user(),

                $request->get('owner'),

                route('confirm',[
                'user' => auth()->id(),
                'post' => $request->get('post'),
                'reservation' => $booking->id
                ]),

                $request->get('kilos'),

                $booking->id,
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
        if($request->get('action') == "true") {
            $k = $request->get('k');
        
        if($k !== 'pack') {
            $post->kilo = ($post->kilo - $k) > 0 ? $post->kilo - $k : 0;
            $post->save();
        }

        if (!is_null($k)) {
             if($k !== 'pack') {
                $post->kilo =- $request->get('k');
             }
             // Update booking
             Reservation::find($request->get('book_id'))->update([
                'validation_date' => now(),
                'status' => 'accepted'
                ]);
            Mail::to($user->email)->send(new bookingValidate($user, route('accueil')));
        }
        return view('booking.confirmation');
        } else {
            // Update booking
            Reservation::find($request->get('book_id'))->update([
            'validation_date' => now(),
            'status' => 'rejected'
            ]);
            return redirect(route('news.index'));
        }
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

