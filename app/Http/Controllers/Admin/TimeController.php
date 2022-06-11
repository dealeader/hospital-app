<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TimeStoreRequest;
use App\Http\Requests\Admin\TimeUpdateRequest;
use App\Models\Category;
use App\Models\Day;
use App\Models\User;
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


    public function store(TimeStoreRequest $request)
    {
        $data = $request->validated();

        $parent = Day::where('id', $data['parent_id'])->first();
        $data['date'] = $parent->date->toDateString() . ' ' . $data['date'];

        if (isset($data['isFree'])) {
            $data['isFree'] = '1';
        } else {
            $data['isFree'] = '0';
        }

        Day::firstOrCreate(['date' => $data['date']], $data);

        return redirect()->route('admin.times.index');
    }


    public function show(Day $time)
    {
        return view('admin.times.show', compact('time'));
    }


    public function edit(Day $time)
    {
        $categories = Category::whereNotNull('parent_id')->get();
        $parentDays = Day::whereNull('parent_id')->get();
        $doctors = User::where('category_id', $time->category_id)->get();

        return view('admin.times.edit', compact('time', 'categories', 'parentDays', 'doctors'));
    }


    public function update(TimeUpdateRequest $request, Day $time)
    {
        $data = $request->validated();

        $parent = Day::where('id', $data['parent_id'])->first();
        $data['date'] = $parent->date->toDateString() . ' ' . $data['date'];

        if (isset($data['isFree'])) {
            $data['isFree'] = '1';
        } else {
            $data['isFree'] = '0';
        }

        $time->update($data);

        return redirect()->route('admin.times.index');
    }


    public function destroy(Day $time)
    {
        $time->delete();

        return redirect()->route('admin.times.index');
    }
}
