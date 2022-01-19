<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(5);
        return view('backend.post.index', ['posts' => $posts]);
    }

    public function create()
    {
        $category = Category::all();
        return view('backend.post.add')->with('category', $category);
    }

    public function store(StorePostRequest $request)
    {
        $attributes = $request->validated();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);
        return redirect()->route('quotes.index');
    }

    public function edit($id)
    {
        $category = Category::all();
        $post = Post::find($id);
        return view('backend.post.update', ['category' => $category, 'post' => $post]);
    }

    public function update(StorePostRequest $request, $id)
    {
        $attributes = $request->validated();
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        Post::where('id', $id)->update($attributes);

        return redirect()->route('quotes.index');
    }

    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('quotes.index');
    }
}
