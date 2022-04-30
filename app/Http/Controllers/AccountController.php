<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Day;

class AccountController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        return view('account.index', [
            'user' => User::find($id),
            'times' => Day::where('patient_id', '=', $id)->get(),
        ]);
    }
}
