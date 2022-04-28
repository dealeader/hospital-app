<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $credentials = $request->only(['document', 'password']);
        if (auth("web")->attempt($credentials)) {
            return redirect(route('home'));
        };
        return redirect(route('login'));
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route('home'));
    }
}
