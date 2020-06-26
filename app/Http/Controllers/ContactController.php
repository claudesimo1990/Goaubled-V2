<?php

namespace App\Http\Controllers;

use App\Coli;
use App\Travel;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
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
        return view('app.bookingPage',['user' => $user,'travel' => $travel]);
    }

    /**
     * @param User $user
     * @param Coli $travel
     * @return Factory|View
     */
    public function showUserPacks(User $user,Coli $travel)
    {
        return view('app.packBookingPage',['user' => $user,'pack' => $travel]);
    }
}
