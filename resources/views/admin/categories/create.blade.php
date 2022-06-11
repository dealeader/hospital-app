@extends('layouts.base')

@section('page.title', 'Создание категории')

@section('content')
    <h2 class="h4">Создание категории</h2>
    <x-card>
        <x-card-header>Форма создания поста</x-card-header>
        <x-card-body>
            <x-form action="{{ route('admin.categories.store') }}" method="POST">
                <x-form-item>
                    <label>Заголовок поста</label>

                    <x-input name="name" placeholder="Введите название категории" value="{{ old('name') }}" />
                    @error('name')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <label>Содержание поста</label>
                    <x-input name="content" placeholder="Введите краткое описание" value="{{ old('content') }}" />
                    @error('content')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <label>Вложить в:</label>
                    <select class="form-control" name="parent_id" id="parent_id">
                        <option value="{{ null }}" {{ null == old('parent_id') ? ' selected' : '' }}>Не вкладывать</option>
                        @foreach($parentCategories as $parent)
                            <option value="{{ $parent->id }}"
                                {{ $parent->id == old('parent_id') ? ' selected' : '' }}> {{ $parent->name }}</option>
                        @endforeach
                    </select>
                    @error('parent_id')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <x-button>Создать категорию</x-button>
                </x-form-item>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
