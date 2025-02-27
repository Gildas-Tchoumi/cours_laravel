<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function showlogin() {
        return view('Auth.loginpage');
    }
    public function login(Request $request): RedirectResponse
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        // dd(Auth::guard('utilisateurs')->attempt($credentials));
        
        if (Auth::guard('utilisateurs')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('/dashboard'));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
