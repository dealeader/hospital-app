<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentAppointRequest;
use App\Http\Requests\AppointmentFindTimesRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Day;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('appointment.index', compact('categories'));
    }

    public function show(Category $name)
    {
        $categories = Category::all();
        $doctors = User::where('category_id', $name->id)->get();

        return view('appointment.show', compact('categories', 'name', 'doctors'));
    }

    public function findTimes(AppointmentFindTimesRequest $request, Category $name)
    {
        $data = $request->validated();
        $categories = Category::all();
        $doctorTimes = Day::where('doctor_id', $data['doctor'])->get();
        $times = [];

        foreach($doctorTimes as $time) {
            if ($time->date->toDateString() == $data['date'] && $time->isFree == 0) {
                array_push($times, $time);
            }
        }

        $doctors = User::where('category_id', $name->id)->get();

        return view('appointment.show', compact('name', 'times', 'doctors', 'categories'));
    }

    public function appoint(AppointmentAppointRequest $request)
    {
        $data = $request->validated();
        if (Auth::user() == null) {
            return redirect()->route('login');
        }

        $data['patient_id'] = Auth::user()->id;
        $data['IsFree'] = '1';
        $time = Day::where('date', $data['date']);
        $time->update($data);

        return redirect()->route('account');
    }
}
