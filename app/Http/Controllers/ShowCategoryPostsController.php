<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ShowCategoryPostsController extends Controller
{
    public function index(Category $category)
    {
        return view('frontend.movie', ['category' => $category]);
    }
}
