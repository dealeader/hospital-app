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
        return view('account.index');
    }

    public function show($id)
    {
        $response = $id == Auth::id() 
            ? view('account.show', [
                'user' => User::find($id),
                'times' => Day::where('patient_id', '=', $id)->get(),
            ])
            : redirect(route('account.show', [ 'id' => Auth::id()]));

        return $response;
    }
}
