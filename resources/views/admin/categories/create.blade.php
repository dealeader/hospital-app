@extends('layouts.base')

@section('page.title', 'Создание поста')

@section('content')
    <h2 class="h4">Создание поста</h2>
    <x-card>
        <x-card-header>Форма создания поста</x-card-header>
        <x-card-body>
            <x-form action="{{ route('admin.newsposts.store') }}" method="POST">
                <x-form-item>
                    <label>Заголовок поста</label>
                    <x-input name="title" placeholder="Введите заголовок поста" />
                </x-form-item>
                <x-form-item>
                    <label>Содержание поста</label>
                    <x-input name="content" placeholder="Введите содержание поста" />
                </x-form-item>
                <x-form-item>
                    <x-button>Создать пост</x-button>
                </x-form-item>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
