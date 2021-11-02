<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ShowPostController extends Controller
{
    public function index()
    {
        $data = Post::inRandomOrder()->limit(1)->get();

        return view('frontend.welcome', ['data' => $data]);
    }
}