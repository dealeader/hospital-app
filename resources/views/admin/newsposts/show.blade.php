@extends('layouts.base')

@section('page.title', "Посты")

@section('content')
    <h2 class="h4">{{ $post->name }}</h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <table class="table">
                <tr>
                    <td>Название</td>
                    <td>{{ $post->title }}</td>
                </tr>
                <tr>
                    <td>Содержание</td>
                    <td>
                        <div>
                            {{ $post->content }}
                        </div>
                    </td>
                </tr>
            </table>
            <a class="mr-3" href={{ route('admin.newsposts.edit', $post->id) }}>редактировать</a>
            <form action="{{ route('admin.newsposts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-left text-danger bg-transparent border-0">
                    удалить
                </button>
            </form>
        </div>
    </div>
@endsection
