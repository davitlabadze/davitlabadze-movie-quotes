<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function submitLogin(StoreAdminRequest $request)
    {
        $attributes = $request->validated();
        auth()->attempt($attributes);
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $moviesCount = Movie::count();
        $quotesCount = Quote::count();
        $quotes = Quote::orderBy('id', 'desc')->paginate(5);
        return view('backend.dashboard', ['quotes'=>$quotes,'moviesCount' => $moviesCount,'quotesCount'=>$quotesCount]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
