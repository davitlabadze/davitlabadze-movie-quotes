<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Category;
use App\Models\Post;

class AdminController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function submitLogin(StoreAdminRequest $request)
    {
        $attributes = $request->validated();
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $moviesCount = Category::count();
        $quotesCount = Post::count();
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('backend.dashboard', ['posts'=>$posts,'moviesCount' => $moviesCount,'quotesCount'=>$quotesCount]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
