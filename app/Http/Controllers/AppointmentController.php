<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Day;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class AppointmentController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('appointment.index', compact('categories'));
    }

    public function show(Category $name, Day $days)
    {
        return view('appointment.show', [
            'categories' => Category::all(),
            'days' => $days->whereNull('parent_id')->get(),
            'times' => $days->where('category_id', '=', $name->id)->whereNotNull('parent_id')->get(),
        ]);
    }
}
