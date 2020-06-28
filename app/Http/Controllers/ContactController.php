<?php

namespace App\Http\Controllers;

use App\Coli;
use App\Message;
use App\Travel;
use App\User;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{

    /**
     * @param User $user
     * @param Travel $travel
     * @return Factory|View {user}/{pack}
     */
    public function showUserTravels(User $user,Travel $travel)
    {
        return view('app.bookingPage',['user' => $user,'travel' => $travel,'log_user' => Auth::user()->id]);
    }

    /**
     * @param User $user
     * @param Coli $coli
     * @return Factory|View
     */
    public function showUserPacks(User $user,Coli $coli)
    {
        return view('app.packBookingPage',['user' => $user,'pack' => $coli]);
    }

    /**
     * @param Request $request
     * @param User $to
     * @param User $from
     * @return ResponseFactory|Response
     */
    public function sendMessage(Request $request,User $to,User $from)
    {
        // validate
        $validateData = $request->validate([
            'book_kilo' => ['required'],
            'message' => ['required'],
        ]);


        $message = new Message();

        $message->user_id = $from->id;
        $message->from_name = $from->name;
        $message->from_email = $from->email;
        $message->from_email = $from->email;
        $message->post_id = $request->post_id;
        $message->to = $to->id;
        $message->book_kilo = $request->book_kilo;
        $message->content = $request->message;

        $message->save();

        return response('success', 200)
            ->header('Content-Type', 'Application/json');



    }
}
