<?php

namespace App\Http\Controllers;

use App\Events\NewTravel;
use App\Http\Requests\TravelStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\ReviewNotification;
use App\Travel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TravelController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $travels = Travel::class;

        return view('travel.create');
    }

    /**
     * @param Request $request
     * @param Travel $travel
     * @return Factory|\Illuminate\View\View
     */
    public function update(Request $request, Travel $travel)
    {
        return view('travel.create', compact('travel'));
    }

    /**
     * @param TravelStoreRequest $request
     * @return RedirectResponse
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
