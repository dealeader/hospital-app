@extends('layouts.appointment')

@section('page.title', 'Запись на прием')

@section('appointment.content')
    <x-categories>
        @foreach($categories as $category)
            @if(is_null($category->parent_id))
                <x-categories-item>
                    <x-categories-item-title id="{{ $category->id }}">
                        {{ $category->name }}
                    </x-categories-item-title>
                    @foreach ($category->childs as $child)
                        <x-categories-item-option id="{{ $child->parent_id }}">
                            {{ $child->name }}
                        </x-categories-item-option>
                    @endforeach
                </x-categories-item>
            @endif
        @endforeach
    </x-categories>
@endsection

@section("appointment.content2")
    <table class="table table-borderless">
        <x-calendar-header />
        <x-calendar-row>
            <x-calendar-button>1</x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button>7</x-calendar-button>
        </x-calendar-row>
        <x-calendar-row>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button>14</x-calendar-button>
        </x-calendar-row>
        <x-calendar-row>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
        </x-calendar-row>
        <x-calendar-row>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
        </x-calendar-row>   
        <x-calendar-row>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
            <x-calendar-button></x-calendar-button>
        </x-calendar-row>  
    </table>
@endsection