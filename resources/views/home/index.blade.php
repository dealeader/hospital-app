@extends('layouts.base')

@section('content')
    <h1>Main</h1>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach($posts as $post)
                <div class=" col-4 p-12 mt-3">
                    <x-card>
                        <h2 class="h4">{{ $post->title }}</h2>
                        <div>
                            {{ $post->published_at }}
                        </div>
                        <p>
                            {{ $post->content }}
                        </p>
                    </x-card>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection