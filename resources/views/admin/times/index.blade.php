@extends('layouts.base')

@section('page.title', 'Посты')

@section('content')
    <h2 class="h4">Все посты/<a href="{{ route('admin.newsposts.create') }}">создать</a></h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach($posts as $post)
                <div class=" col-4 p-12 mt-3">
                    <x-card>
                        <x-card-header>
                            <a href="{{ route('admin.newsposts.show', $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </x-card-header>
                        <x-card-body>
                            <div>
                                {{ $post->content }}
                            </div>
                        </x-card-body>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
@endsection
