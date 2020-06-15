<?php

namespace App\Http\Controllers;

use App\Events\NewTravel;
use App\Http\Requests\TravelStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\ReviewNotification;
use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TravelController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $travels = Travel::class;

        return view('travel.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Travel $travel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        return view('travel.create', compact('travel'));
    }

    /**
     * @param \App\Http\Requests\TravelStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelStoreRequest $request)
    {
        $travel = Travel::create($request->all());

        Mail::to($travel->author)->send(new ReviewNotification($travel));

        SyncMedia::dispatch($travel);

        event(new NewTravel($travel));

        $request->session()->flash('travel.name', $travel->name);

        return redirect()->route('travel.index');
    }
}
