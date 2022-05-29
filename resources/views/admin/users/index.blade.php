@extends('layouts.base')

@section('page.title', 'Пользователи')

@section('content')
    <h2 class="h4">Список пользователей/<a href="{{ route('admin.users.create') }}">cоздать</a></h2>
    <section>

        <table class="table table-striped">
            <thead>
                <td>ID</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Отчество</td>
                <td>Номер полиса</td>
                <td>Роль</td>
                <td>Специализация</td>
                <td>Опыт работы</td>
                <td>Действия</td>
            </thead>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->second_name }}</td>
                    <td>{{ $user->patronymic }}</td>
                    <td>{{ $user->document }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->category_id }}</td>
                    <td>{{ $user->work_expirience }}</td>
                    <td class="d-flex">
                        <a class="mr-3" href={{ route('admin.users.edit', $user->id) }}>редактировать</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-left text-danger bg-transparent border-0">
                                удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection

