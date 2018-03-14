<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

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
            return back()->with('error', 'Sorry we couldn\'t log you in.');
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
