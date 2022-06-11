<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsPostStoreRequest;
use App\Http\Requests\Admin\NewsPostUpdateRequest;
use App\Models\NewsPost;
use Illuminate\Http\Request;

class NewsPostController extends Controller
{
    public function index()
    {
        $posts = NewsPost::all();
        return view('admin.newsposts.index', compact('posts'));
    }


    public function create()
    {
        return view('admin.newsposts.create');
    }


    public function store(NewsPostStoreRequest $request)
    {
        $data = $request->validated();
        NewsPost::firstOrCreate(['title' => $data['title']], $data);

        return redirect()->route('admin.newsposts.index');
    }


    public function show(NewsPost $post)
    {
        return view('admin.newsposts.show', compact('post'));
    }


    public function edit(NewsPost $post)
    {
        return view('admin.newsposts.edit', compact('post'));
    }


    public function update(NewsPostUpdateRequest $request, NewsPost $post)
    {
        $post->update($request->validated());
        return redirect()->route('admin.newsposts.index', compact('post'));
    }


    public function destroy(NewsPost $post)
    {
        $post->delete();
        return redirect()->route('admin.newsposts.index');
    }
}
