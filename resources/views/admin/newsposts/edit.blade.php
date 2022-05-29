@extends('layouts.base')

@section('page.title', 'Категории')

@section('content')
    <h2 class="h4">Редактирование категории</h2>
    <section>

        <x-card>
            <x-card-header>Форма редактирования категории</x-card-header>
            <x-card-body>
                <x-form action="{{ route('admin.categories.update', $category) }}" method="POST">
                    @method('PATCH')
                    <x-form-item>
                        <label>Название категории</label>
                        <x-input name="name" value="{{ $category->name }}" />
                    </x-form-item>
                    <x-form-item>
                        <label>Краткое описание категории</label>
                        <x-input name="content" value="lorem ipsum" />
                    </x-form-item>
                    <x-form-item>
                        <x-button>
                            Редактировать категорию
                        </x-button>
                    </x-form-item>
                </x-form>

            </x-card-body>
        </x-card>
    </section>
@endsection
