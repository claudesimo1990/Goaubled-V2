<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function attemptAdmin(Request $request)
    {
        //validate data
        $data = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
    
        $admin = User::where('email',$data['email'])->where('is_admin',1)->first();

        if ($admin) {

            if (Auth::attempt($data)) {
                return redirect(route('admin.home'));
            }
        } else {
            $request->session()->put('message','vous n avez pas d acces a page');
            return back();
        }
    }
}
