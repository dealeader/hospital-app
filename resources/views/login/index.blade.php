@extends('layouts.auth')

@section('page.title', 'Авторизация')

@section('auth.content')
    <x-card>
        <x-card-header>
            Вход
        </x-card-header>
        <x-card-body>
            <x-form action="{{ route('login.store'); }}" method="POST">
                <x-form-item>
                    <x-input placeholder="Введите полис" />
                </x-form-item>
                <x-form-item>
                    <x-input type="password" placeholder="Введите пароль" />
                </x-form-item>
                <x-form-item>
                    <a href={{ route('register') }}>Еще не зарегистрированы?</a>
                </x-form-item>
                <x-form-item>
                    <x-button>войти</x-button>
                </x-form-item>
            </x-form>
        </x-card-body>
    </x-card>
@endsection