<?php

namespace App\Http\Controllers;

use App\Events\NewProfile;
use App\Http\Requests\ProfileStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\ReviewNotification;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $profiles = Profile::all();

        return view('Profile.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        return view('profile.create', compact('profile'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Profile $profile)
    {
        return route('Contact.index',['user' => $profile]);
    }

    public function contactUser(Request $request)
    {
        return route('Contact.index',['user' => $request->get('id')]);
    }

    public function showprofile(Request $request)
    {
        //dd($request->all());
        return route('profile.show',['profile' => $request->get('id')]);
    }

    /**
     * @param \App\Http\Requests\ProfileStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileStoreRequest $request)
    {
        $profile = Profile::create($request->all());

        Mail::to($profile->author)->send(new ReviewNotification($profile));

        SyncMedia::dispatch($profile);

        event(new NewProfile($profile));

        $request->session()->flash('profile.name', $profile->name);

        return redirect()->route('profile.index');
    }
}
