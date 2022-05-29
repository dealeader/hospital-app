@extends('layouts.base')

@section('page.title', 'Время записи')

@section('content')
    <h2 class="h4">Добавление времени записи</h2>
    <x-card>
        <x-card-header>Форма добавления записи</x-card-header>
        <x-card-body>
            <x-form action="{{ route('admin.times.store') }}" method="POST">
                <x-form-item>
                    <label>Дата</label>
                    <select class="form-control" name="parent_id">
                        @foreach($parentDays as $parent)
                            <option value="{{ $parent->id }}">
                                {{ $parent->date->toDateString() }}
                            </option>
                        @endforeach
                    </select>
                </x-form-item>
                <x-form-item>
                    <label>Время</label>
                    <x-input type="time" name="date" value="{{ old('date') }}" />
                </x-form-item>
                <x-form-item>
                    <label>Категория</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </x-form-item>
                <x-form-item>
                    <x-button>Добавить запись</x-button>
                </x-form-item>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
