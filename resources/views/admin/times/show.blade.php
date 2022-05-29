@extends('layouts.base')

@section('page.title', "Время записи")

@section('content')
    <h2 class="h4">
        @if (is_null($time->parent_id))
            {{ $time->date->toDateString() }}
        @else
            {{ $time->date }}
        @endif
    </h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <table class="table">
                <thead>
                    <td>ID</td>
                    <td>Принадлежность</td>
                    <td>ID пациента</td>
                    <td>ID доктора</td>
                    <td>ID категории</td>
                    <td>Статус</td>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $time->id }}</td>
                        <td>{{ $time->parent_id }}</td>
                        <td>{{ $time->patient_id }}</td>
                        <td>{{ $time->doctor_id }}</td>
                        <td>{{ $time->category_id }}</td>
                        <td>{{ boolval($time->isFree) ? 'Занято' : 'Свободно' }}</td>
                    </tr>
                </tbody>
            </table>
            <a class="mr-3" href={{ route('admin.times.edit', $time->id) }}>редактировать</a>
            <form action="{{ route('admin.times.destroy', $time) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-left text-danger bg-transparent border-0">
                    удалить
                </button>
            </form>
        </div>
    </div>
@endsection
