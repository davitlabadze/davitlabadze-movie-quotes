<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    /**
     * login view function
     */
    public function login()
    {
        return view('backend/login');
    }

    /**
     * submit login function
     */
    public function submitLogin()
    {
        $attributes = request()->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'This mail is not registered'
            ]);
        }

        $adminData = auth()->attempt($attributes);
        session(['adminData'=>$adminData]);
        return redirect()->route('dashboard');
    }

    //dashboard
    public function dashboard()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('backend.dashboard', ['posts'=>$posts]);
    }

    //Logout
    public function destroy()
    {
        session()->forget(['adminData']);
        auth()->logout();
        return redirect()->route('home');
    }
}
