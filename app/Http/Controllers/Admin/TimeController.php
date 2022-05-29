<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Day;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TimeController extends Controller
{

    public function index()
    {
        $times = Day::all();
        return view('admin.times.index', compact('times'));
    }


    public function create()
    {
        $categories = Category::whereNotNull('parent_id')->get();
        $parentDays = Day::whereNull('parent_id')->get();

        return view('admin.times.create', compact('categories', 'parentDays'));
    }


    public function store(Request $request)
    {
        $data = $request->all(); #ВАЛИДАЦИЯ

//        $data['date'] = Carbon::create($data['date']);
//        dd($data);
        Day::firstOrCreate(['date' => $data['date']], $data);

        return redirect()->route('admin.times.index');
    }


    public function show(Day $time)
    {
        return view('admin.times.show', compact('time'));
    }


    public function edit(Day $time)
    {
        return view('admin.times.edit', compact('time'));
    }


    public function update(Request $request, Day $time)
    {

    }


    public function destroy(Day $time)
    {
        $time->delete();

        return redirect()->route('admin.times.index');
    }
}
