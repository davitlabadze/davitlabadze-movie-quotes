<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(StoreAdminRequest $request)
    {
        $attributes = $request->validated();
        $user = auth()->attempt($attributes);
        $findUser = User::where('email', $request->email)->firstOrFail();
        if ($user) {
            $token =$findUser->createToken('token');
            return response()->json(['user'=>$user, 'token' => $token->plainTextToken]);
        } else {
            return response()->json(['user'=>$user, 'status'=>'401']);
        }
    }

    public function dashboard()
    {
        $moviesCount = Movie::count();
        $quotesCount = Quote::count();
        $quotes = Quote::orderBy('id', 'desc')->with('movie')->get();
        return response()->json(['quotes'=>$quotes,'moviesCount' => $moviesCount,'quotesCount'=>$quotesCount]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Logged In Successfully',
        ]);
    }
}
