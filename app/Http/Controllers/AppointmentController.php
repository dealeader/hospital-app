<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AppointmentController extends Controller
{
    public function index(Category $model)
    {
        $categories = $model->all();
        return view('appointment.index', compact('categories'));
    }
}
