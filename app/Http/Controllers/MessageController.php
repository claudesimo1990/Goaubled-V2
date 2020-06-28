<?php

namespace App\Http\Controllers;

use App\Coli;
use App\Events\Newmessage;
use App\Http\Requests\MessageStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\ReviewNotification;
use App\Message;
use App\Travel;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $messages = Message::all();

        return view('message.create');
    }

    /**
     * @param Request $request
     * @return Factory|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        dd($request);
    }

    /**
     * @param Request $request
     * @param \App\Message $message
     * @return Factory|\Illuminate\View\View
     */
    public function update(Request $request, Message $message)
    {
        return view('message.create', compact('profile'));
    }

    /**
     * @param MessageStoreRequest $request
     * @return RedirectResponse
     */
    public function store(MessageStoreRequest $request)
    {
        $message = Message::create($request->all());

        Mail::to($message->author)->send(new ReviewNotification($message));

        SyncMedia::dispatch($message);

        event(new Newmessage($message));

        $request->session()->flash('message.name', $message->name);

        return redirect()->route('message.index');
    }
}
