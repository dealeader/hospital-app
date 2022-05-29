<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Day;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;



class AppointmentController extends Controller
{
    public function index()
    {
        Cache::rememberForever('categories', function () {
            return Category::get();
        });

        return view('appointment.index', [
            'categories' => Cache::get('categories'),
        ]);
    }

    public function show(Category $name, Day $days, User $users)
    {
        return view('appointment.show', [
            'categories' => Cache::get('categories'),
            'days' => $days->whereNull('parent_id')->get(),
            'times' => $days->select('date')->where('category_id', '=', $name->id)
                                            ->where('isFree', '=', 1)
                                            ->whereNotNull('parent_id')
                                            ->get(),
            'doctors' => $users->select('first_name', 'second_name')
                                ->where('category_id', '=', $name->id)->get(),
        ]);
    }
}
