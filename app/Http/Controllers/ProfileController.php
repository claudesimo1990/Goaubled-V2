<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Jobs\SyncMedia;
use Illuminate\View\View;
use App\Events\NewProfile;
use Illuminate\Http\Request;
use App\Mail\ReviewNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\ProfileStoreRequest;

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
        $user = User::find(Auth::id());

        return view('user.profile', compact('user'));
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
        return view('user.home',compact('user'));
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
