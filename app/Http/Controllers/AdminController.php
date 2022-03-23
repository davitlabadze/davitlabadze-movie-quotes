<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function login(StoreAdminRequest $request)
    {
        $request->validated();
        $email =  $request->get('email');
        $password = $request->get('password');

        $user = User::where('email',$email)->first();
        if(!Hash::check($password, $user->password))
        {
            return response()->json(["message"=>"error"]);
        }
        else
        {
            $token =$user->createToken('token');
            return ['token' => $token->plainTextToken];
        }
    }

    public function dashboard()
    {
        $moviesCount = Movie::count();
        $quotesCount = Quote::count();
        $quotes = Quote::orderBy('id', 'desc')->paginate(5);
        return view('backend.dashboard', ['quotes'=>$quotes,'moviesCount' => $moviesCount,'quotesCount'=>$quotesCount]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
