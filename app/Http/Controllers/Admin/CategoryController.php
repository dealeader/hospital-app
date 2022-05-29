<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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


    public function store(Request $request)
    {
        $data = $request->all(); #ПЕРЕДЕЛАТЬ С ВАЛИДАЦИЕЙ

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


    public function update(Request $request, Category $category)
    {
        $category->update($request->all()); #ВАЛИДАЦИЯ

        return redirect()->route('admin.categories.show', compact('category'));
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
