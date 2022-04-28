@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
<x-card>
    <x-card-header>
        Регистрация
    </x-card-header>
    <x-card-body>
        <x-form action="{{ route('register.store') }}" method="POST">
            <x-form-item>
                <x-input name="name" placeholder="Введите свое имя" />
            </x-form-item>
            <x-form-item>
                <x-input name="document" placeholder="Введите номер полиса" />
            </x-form-item>
            <x-form-item>
                <x-input type="password" name="password" placeholder="Введите пароль" />
            </x-form-item>
            <x-form-item>
                <x-input type="password" name="password_confirmation" placeholder="Подтвердите пароль" />
            </x-form-item>
            <x-form-item>
                <x-checkbox name="data_agreement">согласие на обработку персональных данных</x-checkbox>
            </x-form-item>
            <x-form-item>
                <x-button>регистрация</x-button>
            </x-form-item>
        </x-form>
    </x-card-body>
</x-card>
@endsection