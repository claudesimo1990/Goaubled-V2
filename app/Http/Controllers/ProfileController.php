<?php

namespace App\Http\Controllers;

use App\Events\NewProfile;
use App\Http\Requests\ProfileStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\ReviewNotification;
use App\Profile;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    public function create(Request $request)
    {
        $profiles = Profile::all();

        return view('Profile.create');
    }

    /**
     * @param Request $request
     * @param Profile $profile
     * @return Factory|View
     */
    public function update(Request $request, Profile $profile)
    {
        return view('profile.create', compact('profile'));
    }

    /**
     * @param User $user
     * @return string
     */
    public function show(User $user)
    {
        return view('App.dashboard.home',compact('user'));
    }

    /**
     * @param ProfileStoreRequest $request
     * @return RedirectResponse
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
