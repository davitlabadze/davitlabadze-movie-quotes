<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryPostsController extends Controller
{
    public function index(Category $category)
    {
        return view('frontend.movie', ['category' => $category]);
    }
}
