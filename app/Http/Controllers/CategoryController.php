<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->paginate(5);
        return view('backend.category.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('backend.category.add');
    }

    public function store(StoreCategoryRequest $request)
    {
        $attributes = $request->validated();
        Category::create($attributes);

        return redirect()->route('movies.index');
    }

    public function edit($id)
    {
        $categoryToEdit = Category::where('id', $id)->firstOrfail();
        return view('backend.category.update', ['category' => $categoryToEdit]);
    }

    public function update(StoreCategoryRequest $request, $id)
    {
        $attributes = $request->validated();
        Category::where('id', $id)->update($attributes);

        return redirect()->route('movies.index');
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('movies.index');
    }
}
