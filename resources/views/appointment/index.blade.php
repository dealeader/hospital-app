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
                        <x-categories-item-option id="{{ $child->parent_id }}" category="{{ $child->name }}">
                            {{ $child->name }}
                        </x-categories-item-option>
                    @endforeach
                </x-categories-item>
            @endif
        @endforeach
    </x-categories>
@endsection

