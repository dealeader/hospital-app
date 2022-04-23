<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Day;
use Illuminate\Support\Carbon;

class AppointmentController extends Controller
{
    public function index(Category $categories)
    {
        return view('appointment.index', [
            'categories' => $categories->get(),
        ]);
    }

    public function show(Category $name)
    {
        return response()->json($name);
    }
}
