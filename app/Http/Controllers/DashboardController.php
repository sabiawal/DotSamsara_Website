<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        // if ($request->user()->hasTwoFactorAuthenticationEnabled()) {
        //     if (! $request->session()->get('authy_token_verified')) {
        //         return redirect()->route('two-factor-verification.index');
        //     }
        // }
        return view('backend.dashboard');
        // return view('/backend/dashboard');
    }

    public function logout(){
        return view('logout');
    }

    public function welcome(){
        return view('welcome');
    }

    // public function twoFactorAuthenticate(){
    //     return view('profile.two-factor-authentication-form');
    // }

}
