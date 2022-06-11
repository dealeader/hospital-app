@extends('layouts.appointment')

@section('appointment.content')
    <x-categories>
        @foreach($categories as $category)
            @if(is_null($category->parent_id))
                <x-categories-item>
                    <x-categories-item-title id="{{ $category->id }}">
                        {{ $category->name }}
                    </x-categories-item-title>
                    @foreach ($category->childs as $child)
                        <x-categories-item-option id="{{ $child->parent_id }}" category="{{ $child->name }}">
                            {{ $child->name }}
                        </x-categories-item-option>
                    @endforeach
                </x-categories-item>
            @endif
        @endforeach
    </x-categories>
@endsection

@section("appointment.form")
    <x-form
        action="{{ route('appointment.findTimes', compact('name')) }}"
        method="GET"
    >
        <x-input type="date" name="date" value="{{ old('date') }}" />
        <select class="mt-3 mb-3 form-control" name="doctor" id="doctor">
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->second_name }} {{ $doctor->first_name }}</option>
            @endforeach
        </select>
        <x-button>найти даты</x-button>

    </x-form>

    @if(isset($times))
        <x-form class="mt-3" action="{{ route('appointment.appoint') }}" method="POST">
            @method('PATCH')
            @foreach($times as $time)
                <label class="mt-3 mb-3 btn btn-success">
                    {{ $time->date->toTimeString() }}
                    <x-input type="radio" name="date" value="{{ $time->date }}" />
                </label>
            @endforeach
            <x-button class="mt-3 d-inline">записаться</x-button>
        </x-form>
    @endif

@endsection





