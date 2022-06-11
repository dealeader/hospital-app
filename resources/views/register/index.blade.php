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
                @error('name')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </x-form-item>
            <x-form-item>
                <x-input name="document" placeholder="Введите номер полиса" />
                @error('document')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </x-form-item>
            <x-form-item>
                <x-input type="password" name="password" placeholder="Введите пароль" />
                @error('password')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </x-form-item>
            <x-form-item>
                <x-input type="password" name="password_confirmation" placeholder="Подтвердите пароль" />
                @error('password_confirmation')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </x-form-item>
            <x-form-item>
                <x-checkbox name="data_agreement">согласие на обработку персональных данных</x-checkbox>
                @error('data_agreement')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </x-form-item>
            <x-form-item>
                <x-button>регистрация</x-button>
            </x-form-item>
        </x-form>
    </x-card-body>
</x-card>
@endsection
