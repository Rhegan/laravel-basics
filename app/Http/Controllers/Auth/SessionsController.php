<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSessionRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(StoreSessionRequest $request)
    {
        if (Auth::attempt($request->validated()))
        {
            $request->session()->regenerate();
            return redirect()->intended('/ideas');
        }

        return back()
            ->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])
            ->onlyInput('email');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect("/ideas");
    }
}
