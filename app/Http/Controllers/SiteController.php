<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function home()
    {
        return view('home', [
            'cities' => Post::all()
        ]);
    }
    public function loginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($request->only(['email', 'password'])))
            return redirect('/');
        return back()->withErrors([
            'email' => 'Email or password incorrect'
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function user()
    {
        $user = Auth::user();
        return view('user', [
            'posts' => Post::all()->where('user_id', '=', $user['id'])
        ]);
    }
}
