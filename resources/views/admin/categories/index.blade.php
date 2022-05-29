@extends('layouts.base')

@section('page.title', 'Категории')

@section('content')
    <h2 class="h4">Все категории/<a href="{{ route('admin.categories.create') }}">создать</a></h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach($categories as $category)
                <div class=" col-4 p-12 mt-3">
                    <x-card>
                        <x-card-header>
                            <a href="{{ route('admin.categories.show', $category) }}">
                                {{ $category->name }}
                            </a>
                        </x-card-header>
                        <x-card-body>
                            <div>
                                {{ $category->content }}
                            </div>
                        </x-card-body>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
@endsection
