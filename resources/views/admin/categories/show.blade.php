@extends('layouts.base')

@section('page.title', "Категории")

@section('content')
    <h2 class="h4">{{ $category->name }}</h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <table class="table">
                <tr>
                    <td>Название</td>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <td>Краткое описание</td>
                    <td>
                        <div>
                            {{ $category->content }}
                        </div>
                    </td>
                </tr>
            </table>
            <a class="mr-3" href={{ route('admin.categories.edit', $category) }}>редактировать</a>
            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-left text-danger bg-transparent border-0">
                    удалить
                </button>
            </form>
        </div>
    </div>
@endsection
