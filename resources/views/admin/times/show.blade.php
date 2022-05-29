@extends('layouts.base')

@section('page.title', "Время записи")

@section('content')
    <h2 class="h4">{{ $time->date }}</h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <table class="table">

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
