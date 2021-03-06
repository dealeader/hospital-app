<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        $roles = User::getRoles();
        $categories = Category::whereNotNull('parent_id')->get();

        return view('admin.users.create', compact('roles', 'categories'));
    }


    public function store(UserStoreRequest $request)
    {
        $data = $request->validated(); #ПЕРЕДЕЛАТЬ С ВАЛИДАЦИЕЙ
        User::firstOrCreate(['document' => $data['document']], $data);

        return redirect()->route('admin.users.index');
    }


    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = User::getRoles();
        $categories = Category::whereNotNull('parent_id')->get();

        return view('admin.users.edit', compact('user', 'roles', 'categories'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated()); #ПЕРЕДЕЛАТЬ С НОРМАЛЬНОЙ ВАЛИДАЦИЕЙ
        return redirect()->route('admin.users.index', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
