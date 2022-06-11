<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        $parentCategories = Category::whereNull('parent_id')->get();

        return view('admin.categories.create', compact('parentCategories'));
    }


    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated(); #ПЕРЕДЕЛАТЬ С ВАЛИДАЦИЕЙ
        Category::firstOrCreate(['name' => $data['name']], $data);

        return redirect()->route('admin.categories.index');
    }


    public function show(Category $category)
    {

        return view('admin.categories.show', compact('category'));
    }


    public function edit(Category $category)
    {
        $parentCategories = Category::whereNull('parent_id')->get();

        return view('admin.categories.edit', compact('category', 'parentCategories'));
    }


    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('admin.categories.show', compact('category'));
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
