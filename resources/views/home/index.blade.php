@extends('layouts.base')

@section('content')
    <h1>Main</h1>
    <section>
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-6 py-3">
                    <x-card>
                        <h2 class="h4">{{ $post->title }}</h2>
                        <div>
                            {{ $post->time }}
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