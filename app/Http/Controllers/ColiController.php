<?php

namespace App\Http\Controllers;

use App\Coli;
use App\Events\NewColi;
use App\Http\Requests\ColiStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\ReviewNotification;
use Illuminate\Support\Facades\Mail;

class ColiController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coli.create');
    }

    /**
     * @param \App\Http\Requests\ColiStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColiStoreRequest $request)
    {
        $coli = Coli::create($request->all());

        Mail::to($coli->author)->send(new ReviewNotification($coli));

        SyncMedia::dispatch($coli);

        event(new NewColi($coli));

        $request->session()->flash('coli.name', $coli->name);

        return redirect()->route('coli.index');
    }
}
