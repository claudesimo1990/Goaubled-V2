<?php

namespace App\Http\Controllers;

use App\contact;
use App\profile;
use App\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(User $user)
    {
        return view('app.contact_voyageur',compact('user'));
    }
}
