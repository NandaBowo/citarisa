<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function getLogin() {
        return view('login');
    }

    function postLogin(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
    
       
        if (Auth::guard('sadmin')->attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('survey');
        }
    
        
        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('survey');
        }
    
        
        return back()->withErrors([
            'name' => 'Username atau password salah!',
        ])->onlyInput('name');
    }

    function logout(Request $request): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
