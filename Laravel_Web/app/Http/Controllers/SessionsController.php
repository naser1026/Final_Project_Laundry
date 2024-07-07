<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        if(Auth::attempt(request(['email', 'password']))) {
            session()->regenerate();
            return redirect('dashboard')->with(['success' => 'You\'ve been signed in.']);
        } else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }

    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success' => 'You\'ve been logged out.']);
    }
}
