@extends('layouts.base')

@section('page.title', 'Админ-панель')

@section('content')
    <h1>Админ-панель</h1>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class=" col-4 p-12 mt-3">
                    <x-card>
                        <h2 class="h4">
                            <a href={{ route('admin.users.index') }}>Пользователи</a>
                        </h2>
                        <div>
                            Просмотреть, отредактировать список пользователей
                        </div>
                    </x-card>
                </div>
                <div class=" col-4 p-12 mt-3">
                    <x-card>
                        <h2 class="h4">
                            <a href={{ route('admin.categories.index') }}>Категории</a>
                        </h2>
                        <div>
                            Просмотреть, отредактировать категории
                        </div>
                    </x-card>
                </div>
                <div class=" col-4 p-12 mt-3">
                    <x-card>
                        <h2 class="h4">
                            <a href={{ route('admin.times.index') }}>Время записи</a>
                        </h2>
                        <div>
                            Просмотреть, добавить новое время записи
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
    </section>
@endsection
