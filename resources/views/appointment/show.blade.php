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

@section("appointment.calendar")
    <table class="table table-borderless absolute">
        <x-calendar-header />
        @for ($i = 0; $i < 5; $i++)
            <x-calendar-row>
                @for ($i = 0; $i < count($days); $i++)
                    <x-calendar-button date="{{ $days[$i]->date->format('d.m.Y') }}" >
                        {{ $days[$i]->date->format('d'); }}
                    </x-calendar-button>
                    @if($i % 7 === 6)
                    <tr></tr>
                    @endif
                @endfor
            </x-calendar-row>
        @endfor
    </table>
@endsection