@extends('layouts.base')

@section('page.title', 'Создание пользователя')

@section('content')
    <h2 class="h4">Создание пользователя</h2>
    <x-card>
        <x-card-header>Форма создания пользователя</x-card-header>
        <x-card-body>
            <x-form action="{{ route('admin.users.store') }}" method="POST">
                {{--<x-form-item>
                    <label>Аватар пользователя</label>
                    <x-input name="first_name" placeholder="Введите имя пользователя" />
                </x-form-item>--}}
                <x-form-item>
                    <label>Имя пользователя</label>
                    <x-input name="first_name" placeholder="Введите имя пользователя" />
                </x-form-item>
                <x-form-item>
                    <label>Фамилия пользователя</label>
                    <x-input name="second_name" placeholder="Введите фамилию пользователя" />
                </x-form-item>
                <x-form-item>
                    <label>Отчество пользователя</label>
                    <x-input name="patronymic" placeholder="Введите отчество пользователя" />
                </x-form-item>
                <x-form-item>
                    <label>Номер полиса пользователя</label>
                    <x-input name="document" placeholder="Введите номер полиса пользователя" />
                </x-form-item>
                <x-form-item>
                    <label>Роль пользователя</label>
                    <select class="form-control" name="role">
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}"
                                {{ $id == old('role') ? ' selected' : '' }}>
                                {{ $role }}
                            </option>
                        @endforeach
                    </select>
                </x-form-item>
                <x-form-item>
                    <label>Опыт работы пользователя (необязательно)</label>
                    <x-input name="work_expirience" placeholder="Введите опыт работы пользователя" />
                </x-form-item>
                <x-form-item>
                    <label>Специализация пользователя (необязательно)</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? ' selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </x-form-item>
                <x-form-item>
                    <label>Пароль для пользователя</label>
                    <x-input type="password" name="password" placeholder="Введите пароль для пользователя" />
                </x-form-item>
                <x-form-item>
                    <x-button>Создать пользователя</x-button>
                </x-form-item>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
