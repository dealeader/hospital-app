<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $data = $request->validated();
        $user = User::create([
            "first_name" => $data['name'],
            "document" => $data['document'],
            "password" => $data['password'],
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }
}
