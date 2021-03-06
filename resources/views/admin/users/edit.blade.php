@extends('layouts.base')

@section('page.title', 'Пользователи')

@section('content')
    <h2 class="h4">Список пользователей</h2>
    <section>

    <x-card>
        <x-card-header>Редактирование пользователя</x-card-header>
        <x-card-body>
            <x-form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @method('PATCH')
                {{--<x-form-item>
                    <label>Аватар пользователя</label>
                    <x-input name="first_name" value="1" />
                </x-form-item>--}}
                <x-form-item>
                    <label>Имя пользователя</label>
                    <x-input name="first_name" value="{{ $user->first_name }}" />
                    @error('first_name')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <label>Фамилия пользователя</label>
                    <x-input name="second_name" value="{{ $user->second_name }}" />
                    @error('second_name')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <label>Отчество пользователя</label>
                    <x-input name="patronymic" value="{{ $user->patronymic }}" />
                    @error('patronymic')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <label>Номер полиса пользователя</label>
                    <x-input name="document" value="{{ $user->document }}" />
                    @error('document')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <label>Роль пользователя</label>
                    <select class="form-control" name="role">
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}"
                                {{ $id == $user->role ? ' selected' : '' }}
                            >{{ $role }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </x-form-item>
                @if ($user->role == "doctor")
                    <x-form-item>
                        <label>Опыт работы пользователя</label>
                        <x-input name="work_expirience" value="{{ $user->work_expirience }}" />
                        @error('work_expirience')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </x-form-item>
                    <x-form-item>
                        <label>Специализация пользователя (необязательно)</label>
                        <select class="form-control" name="category_id" id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == old('category_id') ? ' selected' : '' }}
                                >{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </x-form-item>
                @endif
                <x-form-item>
                    <x-button>Редактировать</x-button>
                </x-form-item>
            </x-form>

        </x-card-body>
    </x-card>
    </section>
@endsection

