<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    // Prohibit authenticated users from accessing create and store methods
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    // Create session
    public function create()
    {
        return view('sessions.create');
    }

    // Store session
    public function store()
    {
        // Attempt to authenticate user
        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        };

        return redirect()->home();
    }

    // Destroy session
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
