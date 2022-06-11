@extends('layouts.base')

@section('page.title', 'Посты')

@section('content')
    <h2 class="h4">Редактирование поста</h2>
    <section>

        <x-card>
            <x-card-header>Форма редактирования поста</x-card-header>
            <x-card-body>
                <x-form action="{{ route('admin.newsposts.update', $post->id) }}" method="POST">
                    @method('PATCH')
                    <x-form-item>
                        <label>Название поста</label>
                        <x-input name="title" value="{{ $post->title }}" />
                        @error('title')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </x-form-item>
                    <x-form-item>
                        <label>Содержание</label>
                        <x-input name="content" value="{{ $post->content }}" />
                        @error('content')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </x-form-item>
                    <x-form-item>
                        <x-button>
                            Редактировать пост
                        </x-button>
                    </x-form-item>
                </x-form>

            </x-card-body>
        </x-card>
    </section>
@endsection
